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
                    'date_end'=>
                    [
                        $current_date,
                        $PaymentTrak->date_end
                    ]
                ]);
            }
            else{
                return Inertia::render('auth_pages/payment_page/index',[
                    'special_stident'=>'special_stident',
                ]);
            }
        }

        $payment = Payment::where('status','1') 
        ->where('education_level',Auth::user()->etudient_level)
        ->orWhere('education_level','جميع الصفوف')
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

    public function store(Request $request, $id)
    {
        $paymentPlan = Payment::findOrFail($id);
        
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . env('ZIINA_API_KEY'),
            'Accept' => 'application/json',
            'Content-Type' => 'application/json',
        ])->post('https://api-v2.ziina.com/api/payment_intent', [
            'amount' => $paymentPlan->Price * 100, // Assuming Price is in AED, convert to fils
            'currency_code' => 'AED',
            'message' => $paymentPlan->description,
            'success_url' => route('pyment_AUTH.success'), 
            'cancel_url' => route('pyment_AUTH.faild'),
            'test' => true, // or false in production
        ]);

        if ($response->successful()) {
            $body = $response->json();
            return response()->json(['redirect_url' => $body['redirect_url']]);
        } else {
            return response()->json(['error' => 'Failed to create payment intent'], 500);
        }
    }


    /**
     * Display the specified resource.
     */
    public function handleCancel()
    {
        return Inertia::render('auth_pages/payment_page/faild');
    }

    public function handleSuccess()
    {
        //other code
        $user = Auth::user();
        $user->payment = 1;
        $user->save();
        
                switch ($date) {
                    case 'شهر':$newDate = Carbon::now()->addMonth();break;
                    case 'شهرين':$newDate = Carbon::now()->addMonths(2);break;
                    case '3 اشهر':$newDate = Carbon::now()->addMonths(3);break;
                    case '4 اشهر':$newDate = Carbon::now()->addMonths(4);break;
                    case '5 اشهر':$newDate = Carbon::now()->addMonths(5);break;
                    case '6 اشهر':$newDate = Carbon::now()->addMonths(6);break;
                    case '7 اشهر':$newDate = Carbon::now()->addMonths(7);break;
                    case '8 اشهر':$newDate = Carbon::now()->addMonths(8);break;
                    case '9 اشهر':$newDate = Carbon::now()->addMonths(9);break;
                    case '10 اشهر':$newDate = Carbon::now()->addMonths(10);break;
                    case '11 اشهر':$newDate = Carbon::now()->addMonths(11);break;
                    case '12 اشهر':$newDate = Carbon::now()->addYear();break;
                }
        
        $PaymentTrak = new PayTraker();
    
        $PaymentTrak->id_user = Auth::user()->id;
        $PaymentTrak->id_plan = $id;
        $PaymentTrak->date_end = $newDate;
    
        $PaymentTrak->save();

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
