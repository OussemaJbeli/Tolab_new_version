<?php

namespace App\Http\Controllers\gest_pages;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Payment;
use App\Models\Videos;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\DB;

class welcameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $payments_plan_all = Payment::where('status','1') 
        ->where('Allclasses','1') 
        ->get();
        $payments_plan_class1 = Payment::where('status','1') 
        ->where('class1','1') 
        ->get();
        $payments_plan_class2 = Payment::where('status','1') 
        ->where('class2','1') 
        ->get();
        $payments_plan_class3 = Payment::where('status','1') 
        ->where('class3','1') 
        ->get();
        $payments_plan_class4 = Payment::where('status','1') 
        ->where('class4','1') 
        ->get();
        $payments_plan_class5 = Payment::where('status','1') 
        ->where('class5','1') 
        ->get();
        $payments_plan_class6 = Payment::where('status','1') 
        ->where('class6','1') 
        ->get();
        $payments_plan_class7 = Payment::where('status','1') 
        ->where('class7','1') 
        ->get();
        $payments_plan_class8 = Payment::where('status','1') 
        ->where('class8','1') 
        ->get();
        $payments_plan_class9 = Payment::where('status','1') 
        ->where('class9','1') 
        ->get();
        $payments_plan_class10 = Payment::where('status','1') 
        ->where('class10','1') 
        ->get();
        $payments_plan_class11 = Payment::where('status','1') 
        ->where('class11','1') 
        ->get();
        $payments_plan_class12 = Payment::where('status','1') 
        ->where('class12','1') 
        ->get();

        return Inertia::render('gest_pages/home',[
            'payments_plan_all'=>$payments_plan_all,
            'payments_plan_class1'=>$payments_plan_class1,
            'payments_plan_class2'=>$payments_plan_class2,
            'payments_plan_class3'=>$payments_plan_class3,
            'payments_plan_class4'=>$payments_plan_class4,
            'payments_plan_class5'=>$payments_plan_class5,
            'payments_plan_class6'=>$payments_plan_class6,
            'payments_plan_class7'=>$payments_plan_class7,
            'payments_plan_class8'=>$payments_plan_class8,
            'payments_plan_class9'=>$payments_plan_class9,
            'payments_plan_class10'=>$payments_plan_class10,
            'payments_plan_class11'=>$payments_plan_class11,
            'payments_plan_class12'=>$payments_plan_class12,
        ]);
    }
    public function login_student()
    {
        return Inertia::render('gest_pages/Auth/Login');
    }
    public function register_student()
    {
        return Inertia::render('gest_pages/Auth/Register');
    }
    public function login_master()
    {
        return Inertia::render('gest_pages/Auth/Login_master');
    }
    public function register_master()
    {
        return Inertia::render('gest_pages/Auth/Register_master');
    }
}
