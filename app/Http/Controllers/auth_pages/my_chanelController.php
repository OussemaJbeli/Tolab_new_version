<?php

namespace App\Http\Controllers\auth_pages;

use App\Http\Controllers\Controller;
use App\Models\Links;
use App\Models\Play_list;
use App\Models\Videos;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\chanels;
use App\Models\Subscribe;
use App\Models\User;
use App\Models\Views;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use DateTime;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;



class my_chanelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(string $id_chanel)
    {   
        session(['selected_channel_id' => $id_chanel]);
        
        $videos = Videos::where('videos.id_chanel', $id_chanel)
            ->select('videos.*',DB::raw('COALESCE(count(views.id), 0) as vuews_video'))
            ->leftJoin('views', 'views.id_video', '=', 'videos.id') 
            ->groupBy('videos.id') 
            ->take(10)
            ->get();
            
        foreach ($videos as $video) {
            $minutesDifference = $video->created_at->diffInMinutes(now()); 
            $video->date_count = $this->date_count_function($minutesDifference);
            $video_duration = $video->duration; 
            $video->video_duration = $this->convertDuration($video_duration);
        }

        $main_video = Videos::where('id_chanel', $id_chanel)
            ->select('videos.*',DB::raw('COALESCE(count(views.id), 0) as vuews_video'))
            ->leftJoin('views', 'views.id_video', '=', 'videos.id')  
            ->where('main_video', true)
            ->groupBy('videos.id')
            ->first();
        //
        $date_count_target_video= '';
        if($main_video){
            $record = Videos::find($main_video['id']); // Replace $id with the actual ID of your record
            $currentTime = Carbon::now();
            $minutesDifference = $record->created_at->diffInMinutes($currentTime);
            $date_count_target_video = $this->date_count_function($minutesDifference);
        }//

        return Inertia::render('auth_pages/my_chanel/main',[
            'videos' => $videos,
            'main_video' => $main_video,
            'time_test'=> $date_count_target_video,
        ]);

    }
    // master panel
    public function master_panel()
    {   
        //general info totlel

        $chanelNum = chanels::where('id_user', Auth::user()->id) 
        ->count();

        $videosTotal = Videos::where('id_user', Auth::user()->id)
        ->count();

        $subscribesTotal = chanels::where('id_user', Auth::user()->id)
        ->join('subscribes', 'subscribes.id_chanel', '=', 'chanels.id')
        ->count();

        $vuewsNum = Videos::where('id_user', Auth::user()->id)
        ->join('views', 'views.id_video', '=', 'videos.id')
        ->count();

        //all chanels info for tab

        $chanel = chanels::where('id_user', Auth::user()->id) 
        ->get();

        $viewsNums = Videos::groupBy('videos.id_chanel')
                ->where('id_user', Auth::user()->id) 
                ->join('views', 'views.id_video', '=', 'videos.id')
                ->select(
                    'videos.id_chanel',
                    DB::raw('COALESCE(count(views.id), 0) as count_views'))
                ->get();

                // subscribes
        $subscribesNums = Subscribe::join('chanels', 'subscribes.id_chanel', '=', 'chanels.id')
                ->where('chanels.id_user', Auth::user()->id)
                ->groupBy('subscribes.id_chanel')
                ->select(
                    'subscribes.id_chanel',
                    DB::raw('COUNT(subscribes.id) as count_subscribe')
                )
                ->get();

                // videos
        $videosNums = Videos::select(
                    'videos.id_chanel',
                    DB::raw('COALESCE(count(videos.id), 0) as count_videos'))
                ->where('id_user', Auth::user()->id) 
                ->groupBy('videos.id_chanel')
                ->get();
        // date 
        $month_name = '';  
        foreach ($chanel as $chanels) {
            $chanels->count_subscribe = 0;
            $chanels->count_videos = 0;
            $chanels->count_views = 0;

            foreach ($subscribesNums as $subscribesNum) {
                if($chanels->id === $subscribesNum->id_chanel)
                    $chanels->count_subscribe = $subscribesNum->count_subscribe;
            }

            foreach ($videosNums as $videosNum) {
                if($chanels->id == $videosNum->id_chanel)
                    $chanels->count_videos = $videosNum->count_videos;
            }

            foreach ($viewsNums as $viewsNum) {
                if($chanels->id == $viewsNum->id_chanel)
                    $chanels->count_views = $viewsNum->count_views;
            }

            $dateString = $chanels->created_at;
            $date = Carbon::parse($dateString);
            switch ($date->translatedFormat('M')) {
                case 'Jan':
                    $month_name = 'يناير';
                    break;
                case 'Feb':
                    $month_name = 'فبراير';
                    break;
                case 'Mar':
                    $month_name = 'مارس';
                    break;
                case 'Apr':
                    $month_name = 'أبريل';
                    break;
                case 'May':
                    $month_name = 'مايو';
                    break;
                case 'Jun':
                    $month_name = 'يونيو';
                    break;
                case 'Jul':
                    $month_name = 'يوليو';
                    break;
                case 'Aug':
                    $month_name = 'أغسطس';
                    break;
                case 'Sep':
                    $month_name = 'سبتمبر';
                    break;
                case 'Oct':
                    $month_name = 'أكتوبر';
                    break;
                case 'Nov':
                    $month_name = 'نوفمبر';
                    break;
                case 'Dec':
                    $month_name = 'ديسمبر';
                    break;
            }
            $date_created = $date->day . ' ' . $month_name . ' ' .$date->translatedFormat('Y') ;
            $chanels->date_create = $date_created;
        }

        //shart data
        $startDate = new DateTime('first day of this month');
        $endDate = new DateTime('last day of this month');

        $dateRange = [];

        while ($startDate <= $endDate) {
            $dateRange[] = $startDate->format('j');
            $startDate->modify('+1 day');
        }
        
        $startDate = Carbon::now()->firstOfMonth(); // Start of the current month
        $endDate = Carbon::now()->endOfMonth(); // End of the current month

        $viewsByDay = Views::select(DB::raw('DAY(created_at) as day'), DB::raw('COUNT(*) as views_count'))
            ->whereBetween('created_at', [$startDate, $endDate])
            ->groupBy('day')
            ->orderBy('day', 'desc') // Optional: Order by day in descending order
            ->get();
        
        $today = Carbon::today();
        $lastDayOfMonth = $today->endOfMonth();
        $dayNumber = $lastDayOfMonth->day;

        $viewsDay = [];

        for ($i = 1; $i <= $dayNumber; $i++) {
            $viewsDay[$i] = 0; // Initialize with zero views
        }
        
        foreach ($viewsByDay as $views) {
            $viewsDay[$views->day] = $views->views_count;
        }

        return Inertia::render('auth_pages/master_dashboard/index',[
            //total info
            'videosTotal' => $videosTotal,
            'subscribesTotal' => $subscribesTotal,
            'vuewsNum'=> $vuewsNum,
            'chanelNum' => $chanelNum,
            //char info
            'dateRange' => $dateRange,
            'viewsDay' => $viewsDay,
            //tab info
            'chanel_tab' => $chanel,
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
    //videos chanel
    public function my_videos_AUTH(string $id_chanel)
    {
        session(['selected_channel_id' => $id_chanel]);

        $videos = Videos::where('id_chanel', $id_chanel)
        ->select('videos.*',DB::raw('COALESCE(count(views.id), 0) as vuews_video'))
        ->leftJoin('views', 'views.id_video', '=', 'videos.id') 
        ->groupBy('videos.id') 
        ->get();

        foreach ($videos as $video) {
            $minutesDifference = $video->created_at->diffInMinutes(now()); 
            $video->date_count = $this->date_count_function($minutesDifference);
            $video_duration = $video->duration; 
            $video->video_duration = $this->convertDuration($video_duration);
        }

        return Inertia::render('auth_pages/my_chanel/my_videos',[
            'videos' => $videos,
        ]);
    }
    // about chanel
    public function my_about_AUTH(string $id_chanel)
    {
        session(['selected_channel_id' => $id_chanel]);

            $chanel = chanels::find($id_chanel);
            $videosNum = Videos::where('id_chanel', $id_chanel)
            ->count();

            $subscribesNum = Subscribe::where('id_chanel', $id_chanel)
            ->count();

            $vuewsNum = Videos::where('id_chanel', $id_chanel)
            ->join('views', 'views.id_video', '=', 'videos.id')
            ->join('chanels', 'chanels.id', '=', 'videos.id_chanel')
            ->count();

            //date   
            $month_name='';
            $dateString = $chanel['created_at'];
            $date = Carbon::parse($dateString);
            switch ($date->translatedFormat('M')) {
                case 'Jan':
                    $month_name = 'يناير';
                break;
                case 'Feb':
                    $month_name = 'فبراير';
                break;
                case 'Mar':
                    $month_name = 'مارس';
                break;
                case 'Apr':
                    $month_name = 'أبريل';
                break;
                case 'May':
                    $month_name = 'مايو';
                break;
                case 'Jun':
                    $month_name = 'يونيو';
                break;
                case 'Jul':
                    $month_name = 'يوليو';
                break;
                case 'Aug':
                    $month_name = 'أغسطس';
                break;
                case 'Sep':
                    $month_name = 'سبتمبر';
                break;
                case 'Oct':
                    $month_name = 'أكتوبر';
                break;
                case 'Nov':
                    $month_name = 'نوفمبر';
                break;
                case 'Dec':
                    $month_name = 'ديسمبر';
                break;
            }
            $date_created = $date->day . ' ' . $month_name . ' ' .$date->translatedFormat('Y') ;

        return Inertia::render('auth_pages/my_chanel/about',[
            'date_created' => $date_created,
            'videosNum' => $videosNum,
            'subscribesNum' => $subscribesNum,
            'vuewsNum' => $vuewsNum,
        ]);
    }
    function convertDuration($duration) {
        // Parse the duration into hours, minutes, and seconds
        sscanf($duration, "%d:%d:%f", $hours, $minutes, $seconds);
    
        // Convert to total seconds
        $totalSeconds = $hours * 3600 + $minutes * 60 + $seconds;
    
        // Format as hh:mm:ss or mm:ss
        if ($hours > 0) {
            $formattedDuration = sprintf("%02d:%02d:%02d", $hours, floor($totalSeconds / 60), $totalSeconds % 60);
        } else {
            $formattedDuration = sprintf("%02d:%02d", floor($totalSeconds / 60), $totalSeconds % 60);
        }
    
        return $formattedDuration;
    }
    // subscribs chanel
    public function my_subscribs_AUTH(string $id_chanel)
    {
        session(['selected_channel_id' => $id_chanel]);

        $subscrib_chanel = Subscribe::where('id_chanel', $id_chanel)
        ->join('users','users.id','=','subscribes.id_subscriber')
        ->get();

        return Inertia::render('auth_pages/my_chanel/sub_chanels',[
            'subscrib_chanel' => $subscrib_chanel,
        ]);
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request,string $id)
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $name = $request->get('name');
        $discription = $request->get('discription');
        $chanels_level = $request->get('chanels_level');

        //upload img
        //new path
        $newPath = public_path('img/chanels/users/');
        //get values
        $logo_path = $request->file('logo_path');
        $img_path = $request->file('img_path');

        //create name img
        if($logo_path){
            $filename_logo = uniqid() . '_' . time() . '.' . $logo_path->getClientOriginalExtension();
                    //save uploade
            $logo_path->move($newPath, $filename_logo);
        }
        if($img_path){
            $filename_bg = uniqid() . '_' . time() . '.' . $img_path->getClientOriginalExtension();
                    //save uploade
            $img_path->move($newPath, $filename_bg);
        }

        $chanel = new Chanels();

        $chanel->id_user = Auth::user()->id;
        $chanel->name_chanel = $name;
        $chanel->discription_chanel = $discription;
        $chanel->study_level = $chanels_level;
        if($logo_path == null)
            $chanel->logo_path_chanel = "img/chanels/base_logo.png";
        else{
            $filePath = 'img/chanels/users/' . $filename_logo;
            $chanel->logo_path_chanel = $filePath;
        }

        if($img_path == null)
            $chanel->img_path_chanel = 'img/chanels/base_back.webp';
        else{
            $filePath = 'img/chanels/users/' . $filename_bg;
            $chanel->img_path_chanel = $filePath;
        }

        $chanel->save();
        
        return Redirect::back();
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
    public function edit(Request $request, string $id)
    {
        $name = $request->get('name');
        $discription = $request->get('discription');

        //upload img
        //new path
        $newPath = public_path('img/chanels/users/');
        //get values
        $logo_path = $request->file('logo_path');
        $img_path = $request->file('img_path');

        //create name img
        if($logo_path){
            $filename_logo = uniqid() . '_' . time() . '.' . $logo_path->getClientOriginalExtension();
                    //save uploade
            $logo_path->move($newPath, $filename_logo);
        }
        if($img_path){
            $filename_bg = uniqid() . '_' . time() . '.' . $img_path->getClientOriginalExtension();
                    //save uploade
            $img_path->move($newPath, $filename_bg);
        }



        $chanel = Chanels::find($id);

        if ($chanel) {
            $chanel->id_user = Auth::user()->id;
            $chanel->name_chanel = $name;
            $chanel->discription_chanel = $discription;
            if($logo_path != null){
                File::delete($chanel['logo_path']);
                $filePath = 'img/chanels/users/' . $filename_logo;
                $chanel->logo_path_chanel = $filePath;
            }

            if($img_path != null){
                File::delete($chanel['img_path']);
                $filePath = 'img/chanels/users/' . $filename_bg;
                $chanel->img_path_chanel = $filePath;
            }

            $chanel->save();
        }
        return Redirect::back();
    }

    public function add_links(Request $request, string $id_chanel)
    {
        $link_type = $request->get('link_type');
        $link_name = $request->get('link_name');

        $link = new Links();

        $link->id_chanel = $id_chanel;
        $link->name = $link_type;
        $link->link = $link_name;
        $link->icon = $link_type;

        $link->save();

        return Redirect::back();
    }

    public function remove_links(string $id_link)
    {

        Links::where('id', $id_link)
        ->delete();

        return Redirect::back();
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
