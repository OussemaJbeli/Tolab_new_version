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
    public function store(string $id,string $date)
    {

        $user = Auth::user();
        $user->payment = 1;
        $user->save();

        if($date == 'شهر')
            $newDate = Carbon::now()->addMonth();
        else if($date == 'سنة')
            $newDate = Carbon::now()->addYear();

        $PaymentTrak = new PayTraker();

        $PaymentTrak->id_user = Auth::user()->id;
        $PaymentTrak->id_plan = $id;
        $PaymentTrak->date_end = $newDate;

        $PaymentTrak->save();
        
        return Redirect::back()
        ->with('success', 'تم الاشتراك بنجاح  ');
    }

    private function storeTicket(User $user)
    {

    }
    /**
     * Display the specified resource.
     */
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
