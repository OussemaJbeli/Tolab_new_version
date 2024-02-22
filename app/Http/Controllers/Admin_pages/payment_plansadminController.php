<?php

namespace App\Http\Controllers\Admin_pages;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class payment_plansadminController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $pyment = Payment::all();
        return Inertia::render('admin_pages/payment_plans/index',[
            'pyment'=>$pyment,
        ]);
    }
    public function store(Request $request)
    {
        $name = $request->get('name');
        $description = $request->get('description');
        $price = $request->get('price');
        $etudient_level = $request->get('etudient_level');
        $frequency = $request->get('frequency');
        $frame = $request->get('frame');
        $activation = filter_var($request->get('activation'), FILTER_VALIDATE_BOOLEAN);

        
        $Payment = new Payment();

        $Payment->name = $name;
        $Payment->description = $description;
        $Payment->Price = $price;
        $Payment->education_level = $etudient_level;
        $Payment->frame = $frame;
        $Payment->frequency = $frequency;
        $Payment->status = $activation;

        $Payment->save();

        return Redirect::back()
        ->with('success', 'تم الحفظ بنجاح');
    }
    public function edit(string $id,Request $request)
    {
        $name = $request->get('name');
        $description = $request->get('description');
        $price = $request->get('price');
        $etudient_level = $request->get('etudient_level');
        $frequency = $request->get('frequency');
        $frame = $request->get('frame');
        $activation = filter_var($request->get('activation'), FILTER_VALIDATE_BOOLEAN);
         
        $Payment = Payment::find($id);
 
        if ($Payment) {

            $Payment->name = $name;
            $Payment->description = $description;
            $Payment->Price = $price;
            $Payment->education_level = $etudient_level;
            $Payment->frequency = $frequency;
            $Payment->frame = $frame;
            $Payment->status = $activation;

            $Payment->save();
        }
        return Redirect::back()
        ->with('success', 'تم التعديل بنجاح');
    }
    public function destroy(string $id)
    {
        Payment::where('id', $id)
        ->delete();

        return Redirect::back()
        ->with('success', 'تم الحذف بنجاح');
    }

    
}
