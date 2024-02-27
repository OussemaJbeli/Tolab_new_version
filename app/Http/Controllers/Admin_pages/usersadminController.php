<?php

namespace App\Http\Controllers\Admin_pages;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\PayTraker;
use App\Models\Chanels;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

class usersadminController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $users_student = User::where('etudient', true)
        ->where('admin', false)
        ->get();

        $users_master = User::where('Master', true)
        ->where('admin', false)
        ->get();

        $mastersData = [];

        foreach ($users_master as $users_masters) {
            $minutesDifference = $users_masters->created_at->diffInMinutes(now()); 
            $users_masters->date_count = $this->date_count_function($minutesDifference);

            $mastersData[$users_masters->id]['count_chanels'] = 0;
        }

        // Fetch and update vues
        $chanels_counts = User::leftJoin('chanels', 'chanels.id_user', '=', 'users.id') 
            ->select(
                'users.id',
                DB::raw('COALESCE(count(chanels.id), 0) as user_chanel'),
            )
            ->groupBy('users.id')
            ->get();

        foreach ($chanels_counts as $chanels_count) {
            $mastersData[$chanels_count->id]['count_chanels'] = $chanels_count->user_chanel;
        }

        // Now, $videosData contains the aggregated data for each video
        foreach ($users_master as $users_masters) {
            $users_masters->count_chanels = $mastersData[$users_masters->id]['count_chanels'];
        }

        $users_admin = User::where('super_user', true)
        ->where('admin', false)
        ->get();

        return Inertia::render('admin_pages/users/index',[
            'users_student' => $users_student,
            'users_master' => $users_master,
            'users_admin' => $users_admin,
        ]);
    }
    public function date_count_function($date_minut)
    {
        if($date_minut < 1){
            return 'الآن';
        }
        elseif($date_minut == 1){
            return 'دقيقة';
        }
        elseif($date_minut <= 10){
            return $date_minut.' دقائق';
        }
        elseif($date_minut <= 60 ){
            return $date_minut.' دقيقة';
        }
        elseif($date_minut == 61){
            return 'ساعة';
        }
        elseif($date_minut <= 600){
            return intdiv($date_minut,60).' ساعات';
        }
        elseif($date_minut <= 1440){
            return intdiv($date_minut,60).' ساعة';
        }
        elseif($date_minut == 1441){
            return 'يوم';
        }
        elseif($date_minut <= 14400){
            return intdiv($date_minut,1440).' ايام';
        }
        elseif($date_minut <= 43200){
            return intdiv($date_minut,1440).' يوم';
        }
        elseif($date_minut == 43201){
            return 'شهر';
        }
        elseif($date_minut <= 432000){
            return intdiv($date_minut,43200).' اشهر';
        }
        elseif($date_minut <= 518400){
            return intdiv($date_minut,43200).' شهر';
        }
        elseif($date_minut == 518401){
            return 'سنة';
        }
        elseif($date_minut <= 5184000){
            return intdiv($date_minut,518400).' سنوات';
        }
        else{
            return intdiv($date_minut,518400).' سنة';
        }
    }
    /**
     * Show the form for creating a new resource.
     */
    public function add_special_student(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|lowercase|email|max:255|unique:'.User::class,
            'password' => 'required', 'confirmed',
            'student_level' => 'required|string|max:255',
        ]);
    
        $user = new User();
    
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->etudient = true;
        $user->payment = true;
        $user->etudient_level = $request->student_level;
    
        $user->save();

        return Redirect::back()
        ->with('success', 'تم الحفظ بنجاح');

    }

    public function edite_special_student(Request $request)
    {
        $id_user = $request->get('id_student');

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $id_user,
            'password' => 'nullable',
            'student_level' => 'required|string|max:255',
        ]);
    
        // Fetch the admin user record from the database
        $user = User::findOrFail($id_user);
    
        // Update the admin user's attributes
        $user->name = $request->name;
        $user->email = $request->email;
        $user->etudient_level = $request->student_level;
    
        // Update the password if a new one is provided
        if ($request->password) {
            $user->password = Hash::make($request->password);
        }
    
        // Save the updated user record
        $user->save();

        return Redirect::back()
        ->with('success', 'تم التعديل بنجاح');
    }

    public function add_master(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|lowercase|email|max:255|unique:'.User::class,
            'password' => 'required', 'confirmed',
        ]);

        $users = new User();

        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = Hash::make($request->password);
        $users->master = true;

        $users->save();

        return Redirect::back()
        ->with('success', 'تم الحفظ بنجاح');

    }

    
    public function add_admin(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|lowercase|email|max:255|unique:'.User::class,
            'password' => 'required', 'confirmed',
        ]);

        $users = new User();

        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = Hash::make($request->password);
        $users->super_user = true;

        $users->save();

        return Redirect::back()
        ->with('success', 'تم الحفظ بنجاح');


    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request,User $user)
    {
        
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
    public function add_chanel_users(Request $request)
    {
       $id_user = $request->get('id_user');
       $name = $request->get('chanels_name');
       $discription = '';
       $chanels_level = $request->get('chanels_level');

       $chanel = new Chanels();

       $chanel->id_user = $id_user;
       $chanel->name_chanel = $name;
       $chanel->discription_chanel = $discription;
       $chanel->study_level = $chanels_level;
       $chanel->logo_path_chanel = "img/chanels/base_logo.png";
       $chanel->img_path_chanel = 'img/chanels/base_back.webp';

       $chanel->save();
       
       return Redirect::back();
    }
    public function remove_chanel(string $id_chanel)
    {

        Chanels::where('id', $id_chanel)
        ->delete();

        return Redirect::back();
    }
     public function chaneg_details_users(Request $request)
     {
        $id_user = $request->get('id_user');

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $id_user,
            'password' => 'nullable|confirmed',
        ]);
    
        // Fetch the admin user record from the database
        $user = User::findOrFail($id_user);
    
        // Update the admin user's attributes
        $user->name = $request->name;
        $user->email = $request->email;
    
        // Update the password if a new one is provided
        if ($request->password) {
            $user->password = Hash::make($request->password);
        }
    
        // Save the updated user record
        $user->save();

         return Redirect::back()
         ->with('success', 'تم التعديل بنجاح');
     }

    /**
     * Update the specified resource in storage.
     */
    public function chaneg_state_users(Request $request, string $id)
    { 
        $dashboard_control = filter_var($request->get('dashboard_control'), FILTER_VALIDATE_BOOLEAN);
        $chanels_control = filter_var($request->get('chanels_control'), FILTER_VALIDATE_BOOLEAN);
        $support_control = filter_var($request->get('support_control'), FILTER_VALIDATE_BOOLEAN);
        $comments_control = filter_var($request->get('comments_control'), FILTER_VALIDATE_BOOLEAN);
        $videos_control = filter_var($request->get('videos_control'), FILTER_VALIDATE_BOOLEAN);

        $users = User::find($id);

        if ($users) {
            $users->dashboard_control = $dashboard_control;
            $users->chanels_control = $chanels_control;
            $users->support_control = $support_control;
            $users->comments_control = $comments_control;
            $users->videos_control = $videos_control;
            
            $users->save();
        }
        return Redirect::back()
        ->with('success', 'تم التعديل بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function addsubscribe(string $id)
    {
        $userTrak = User::where('id',$id)->first();
        $userTrak->payment = 1;
        $userTrak->save();

        return Redirect::back()
        ->with('success', 'تم الحذف بنجاح');
    }

    public function dessubscribe(string $id)
    {
        $PaymentTrak = PayTraker::where('id_user',$id)->first();
        if($PaymentTrak)
            $PaymentTrak->delete();

        $userTrak = User::where('id',$id)->first();
        $userTrak->payment = 0;
        $userTrak->save();

        return Redirect::back()
        ->with('success', 'تم الحذف بنجاح');
    }

    public function destroy(string $id)
    {
        User::where('id', $id)
        ->delete();

        return Redirect::back()
        ->with('success', 'تم الحذف بنجاح');
    }
}
