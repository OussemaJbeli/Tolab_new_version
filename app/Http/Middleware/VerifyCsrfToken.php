<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array<int, string>
     */
    protected $except = [
        '/pyment_AUTH/*',
        'home_AUTH',
        'my_chanel_AUTH',
        'show_video/*',
        'my_chanel_AUTH/*',
        'login_M',
        'login_S',
        'register_M',
        'register_S',
        'logout',
        'playlist_AUTH/*',
        'my_videos_AUTH/*',
        'profile',
        'admin_taleb/*'
    ];
}
