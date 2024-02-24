<?php

namespace App\Http\Requests\Auth;

use Illuminate\Auth\Events\Lockout;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Validation\ValidationException;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string'],
        ];
    }

    /**
     * Attempt to authenticate the request's credentials.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function authenticate_master(): void
    {
        $this->ensureIsNotRateLimited();

        $user = User::where('email', $this->input('email'))->first();

        if ($user && \Hash::check($this->input('password'), $user->password)) {
            // Now check if the user is a master or a super user
            if (!$user->Master && !$user->super_user) {
                RateLimiter::hit($this->throttleKey());
    
                throw ValidationException::withMessages([
                    'email' => 'هذا ليس حساب استاذ',
                ]);
            }
    
            // User is a master or super user, so proceed with login
            Auth::login($user, $this->boolean('remember'));
    
            RateLimiter::clear($this->throttleKey());
        } else {
            RateLimiter::hit($this->throttleKey());
    
            throw ValidationException::withMessages([
                'email' => 'كلمت السر او البريد الالكتروني خاطء',
            ]);
        }
    }
    public function authenticate_student(): void
    {
        $this->ensureIsNotRateLimited();

        $user = User::where('email', $this->input('email'))->first();

        if ($user && \Hash::check($this->input('password'), $user->password)) {
            // Now check if the user is a master or a super user
            if (!$user->etudient && !$user->admin) {
                RateLimiter::hit($this->throttleKey());
    
                throw ValidationException::withMessages([
                    'email' => 'هذا ليس حساب طالب',
                ]);
            }
            if ($user->active_account) {
                RateLimiter::hit($this->throttleKey());
    
                throw ValidationException::withMessages([
                    'email' => 'هذا الحساب بالفعل متصل',
                ]);
            }
    
            // User is a master or super user, so proceed with login
            Auth::login($user, $this->boolean('remember'));
    
            RateLimiter::clear($this->throttleKey());
        } else {
            RateLimiter::hit($this->throttleKey());
    
            throw ValidationException::withMessages([
                'email' => 'كلمت السر او البريد الالكتروني خاطء',
            ]);
        }
    }

    /**
     * Ensure the login request is not rate limited.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function ensureIsNotRateLimited(): void
    {
        if (! RateLimiter::tooManyAttempts($this->throttleKey(), 5)) {
            return;
        }

        event(new Lockout($this));

        $seconds = RateLimiter::availableIn($this->throttleKey());

        throw ValidationException::withMessages([
            'email' => trans('auth.throttle', [
                'seconds' => $seconds,
                'minutes' => ceil($seconds / 60),
            ]),
        ]);
    }

    /**
     * Get the rate limiting throttle key for the request.
     */
    public function throttleKey(): string
    {
        return Str::transliterate(Str::lower($this->input('email')).'|'.$this->ip());
    }
}
