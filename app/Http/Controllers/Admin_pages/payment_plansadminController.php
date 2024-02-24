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
        $frequency = $request->get('frequency');
        $frame = $request->get('frame');
        $activation = filter_var($request->get('activation'), FILTER_VALIDATE_BOOLEAN);
        $Allclasses = filter_var($request->get('Allclasses'), FILTER_VALIDATE_BOOLEAN);
        $class1 = filter_var($request->get('class1'), FILTER_VALIDATE_BOOLEAN);
        $class2 = filter_var($request->get('class2'), FILTER_VALIDATE_BOOLEAN);
        $class3 = filter_var($request->get('class3'), FILTER_VALIDATE_BOOLEAN);
        $class4 = filter_var($request->get('class4'), FILTER_VALIDATE_BOOLEAN);
        $class5 = filter_var($request->get('class5'), FILTER_VALIDATE_BOOLEAN);
        $class6 = filter_var($request->get('class6'), FILTER_VALIDATE_BOOLEAN);
        $class7 = filter_var($request->get('class7'), FILTER_VALIDATE_BOOLEAN);
        $class8 = filter_var($request->get('class8'), FILTER_VALIDATE_BOOLEAN);
        $class9 = filter_var($request->get('class9'), FILTER_VALIDATE_BOOLEAN);
        $class10 = filter_var($request->get('class10'), FILTER_VALIDATE_BOOLEAN);
        $class11 = filter_var($request->get('class11'), FILTER_VALIDATE_BOOLEAN);
        $class12 = filter_var($request->get('class12'), FILTER_VALIDATE_BOOLEAN);
        
        
        $Payment = new Payment();

        $Payment->name = $name;
        $Payment->description = $description;
        $Payment->Price = $price;
        $Payment->frame = $frame;
        $Payment->frequency = $frequency;
        $Payment->status = $activation;
        $Payment->Allclasses = $Allclasses;
        $Payment->class1 = $class1;
        $Payment->class2 = $class2;
        $Payment->class3 = $class3;
        $Payment->class4 = $class4;
        $Payment->class5 = $class5;
        $Payment->class6 = $class6;
        $Payment->class7 = $class7;
        $Payment->class8 = $class8;
        $Payment->class9 = $class9;
        $Payment->class10 = $class10;
        $Payment->class11 = $class11;
        $Payment->class12 = $class12;

        $Payment->save();

        return Redirect::back()
        ->with('success', 'تم الحفظ بنجاح');
    }
    public function edit(string $id,Request $request)
    {
        $name = $request->get('name');
        $description = $request->get('description');
        $price = $request->get('price');
        $frequency = $request->get('frequency');
        $frame = $request->get('frame');
        $activation = filter_var($request->get('activation'), FILTER_VALIDATE_BOOLEAN);
        $Allclasses = filter_var($request->get('Allclasses'), FILTER_VALIDATE_BOOLEAN);
        $class1 = filter_var($request->get('class1'), FILTER_VALIDATE_BOOLEAN);
        $class2 = filter_var($request->get('class2'), FILTER_VALIDATE_BOOLEAN);
        $class3 = filter_var($request->get('class3'), FILTER_VALIDATE_BOOLEAN);
        $class4 = filter_var($request->get('class4'), FILTER_VALIDATE_BOOLEAN);
        $class5 = filter_var($request->get('class5'), FILTER_VALIDATE_BOOLEAN);
        $class6 = filter_var($request->get('class6'), FILTER_VALIDATE_BOOLEAN);
        $class7 = filter_var($request->get('class7'), FILTER_VALIDATE_BOOLEAN);
        $class8 = filter_var($request->get('class8'), FILTER_VALIDATE_BOOLEAN);
        $class9 = filter_var($request->get('class9'), FILTER_VALIDATE_BOOLEAN);
        $class10 = filter_var($request->get('class10'), FILTER_VALIDATE_BOOLEAN);
        $class11 = filter_var($request->get('class11'), FILTER_VALIDATE_BOOLEAN);
        $class12 = filter_var($request->get('class12'), FILTER_VALIDATE_BOOLEAN);
        $Payment = Payment::find($id);
 
        if ($Payment) {

            $Payment->name = $name;
            $Payment->description = $description;
            $Payment->Price = $price;
            $Payment->frequency = $frequency;
            $Payment->frame = $frame;
            $Payment->status = $activation;
            $Payment->Allclasses = $Allclasses;
            $Payment->class1 = $class1;
            $Payment->class2 = $class2;
            $Payment->class3 = $class3;
            $Payment->class4 = $class4;
            $Payment->class5 = $class5;
            $Payment->class6 = $class6;
            $Payment->class7 = $class7;
            $Payment->class8 = $class8;
            $Payment->class9 = $class9;
            $Payment->class10 = $class10;
            $Payment->class11 = $class11;
            $Payment->class12 = $class12;

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
