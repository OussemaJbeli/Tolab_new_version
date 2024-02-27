<?php

namespace App\Http\Controllers\auth_pages;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Payment;
use App\Models\PayTraker;
use App\Models\Videos;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Http;
use Carbon\Carbon;

class paymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userTrak = Auth::user();
        $current_date =  Carbon::now();

        if($userTrak->payment){

            $PaymentTrak = PayTraker::where('id_user',$userTrak->id)->first();

            if($PaymentTrak && $PaymentTrak->date_end < $current_date){

                $userTrak->payment = 0;
                $userTrak->save();
                
                $PaymentTrak->delete();
            }
            else if($PaymentTrak){
                return Inertia::render('auth_pages/payment_page/index',[
                    'date_end'=>$PaymentTrak->date_end,
                    'payments_plan'=>[]
                ]);
            }
            else{
                return Inertia::render('auth_pages/payment_page/index',[
                    'special_stident'=>'special_stident',
                    'payments_plan'=>[]
                ]);
            }
        }
        $target_class="";
        
        switch (Auth::user()->etudient_level) {
            case 'الصف 1':$target_class='class1' ;break;
            case 'الصف 2':$target_class='class2' ;break;
            case 'الصف 3':$target_class='class3' ;break;
            case 'الصف 4':$target_class='class4' ;break;
            case 'الصف 5':$target_class='class5' ;break;
            case 'الصف 6':$target_class='class6' ;break;
            case 'الصف 7':$target_class='class7' ;break;
            case 'الصف 8':$target_class='class8' ;break;
            case 'الصف 9':$target_class='class9' ;break;
            case 'الصف 10':$target_class='class10' ;break;
            case 'الصف 11':$target_class='class11' ;break;
            case 'الصف 12':$target_class='class12' ;break;
        }

        $payment = Payment::where('status','1') 
        ->where($target_class,true)
        ->orWhere('Allclasses',true)
        ->get();

        return Inertia::render('auth_pages/payment_page/index',[
            'payments_plan'=>$payment,
        ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(string $id)
    {

    }

    /**
     * Store a newly created resource in storage.
     */

// payment

    public function store($id)
    {
        $paymentPlan = Payment::findOrFail($id);
        try {
            
            $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . env('ZIINA_API_KEY'),
                'Accept' => 'application/json',
                'Content-Type' => 'application/json',
            ])->post('https://api-v2.ziina.com/api/payment_intent', [
                'amount' => $paymentPlan->Price * 100, 
                'currency_code' => 'AED',
                'message' => $paymentPlan->description,
                'success_url' => route('pyment_AUTH.success', ['id' => $paymentPlan->id]), 
                'cancel_url' => route('pyment_AUTH.faild'),
                'test' => true,
            ]);
    
            if ($response->successful()) {
                $body = $response->json();
                return response()->json(['redirect_url' => $body['redirect_url']]);
            } else {
                \Log::error('Failed', [
                    'response' => $response->body() // 
                ]);
                return response()->json(['error' => 'Failed to create payment intent'], 500);
            }
        } catch (\Exception $e) {
            \Log::info('Payment Initiation Request', ['error' => $e]);
            return response()->json(['error' => $e], 500);
        }

    }


    /**
     * Display the specified resource.
     */
    public function handleCancel()
    {
        return Inertia::render('auth_pages/payment_page/faild');
    }

    public function handleSuccess(string $id)
    {
        //other code
        $user = Auth::user();
        $user->payment = 1;
        $user->save();

        $paymentPlan = Payment::findOrFail($id);

        if($paymentPlan){

            if($paymentPlan->frequency == 'شهر')
                $newDate = now()->addDay();
            else if($paymentPlan->frequency == 'شهرين')
                $newDate =  now()->addMonths(2);
            else{
                $normalizedFrequency = str_replace(' ', '', $paymentPlan->frequency);
                $normalizedFrequency = preg_replace('/[^\d]/', '', $normalizedFrequency);

                $monthCount = (int)$normalizedFrequency;
            
                if ($monthCount >= 3 && $monthCount <= 11) {
                    $newDate = now()->addMonths($monthCount);
                } else if ($monthCount == 12) {
                    $newDate = now()->addYear();
                } else {
                    \Log::warning("Unexpected payment plan frequency: " . $paymentPlan->frequency);
                    // Optionally, handle unexpected frequency value more specifically
                }
        
            }

            $PaymentTrak = new PayTraker();
        
            $PaymentTrak->id_user = $user->id;
            $PaymentTrak->id_plan = $id;
            $PaymentTrak->date_end = $newDate;
        
            $PaymentTrak->save();

        }

        return Inertia::render('auth_pages/payment_page/success');
    }

    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $tickets)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {       
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {

    }
}
