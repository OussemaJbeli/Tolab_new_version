<?php
//admin

use App\Http\Controllers\Admin_pages\chanelsadminController;
use App\Http\Controllers\Admin_pages\commentsadminController;
use App\Http\Controllers\Admin_pages\homeadminController;
use App\Http\Controllers\Admin_pages\rapportsadminController;
use App\Http\Controllers\Admin_pages\usersadminController;
use App\Http\Controllers\Admin_pages\payment_plansadminController;
use App\Http\Controllers\Admin_pages\videosadminController;

//auth
use App\Http\Controllers\auth_pages\CommentsController;
use App\Http\Controllers\auth_pages\homeController;
use App\Http\Controllers\auth_pages\historiqueController;
use App\Http\Controllers\auth_pages\hotController;
use App\Http\Controllers\auth_pages\my_chanelController;
use App\Http\Controllers\auth_pages\chanelController;
use App\Http\Controllers\auth_pages\newsController;
use App\Http\Controllers\auth_pages\Play_listController;
use App\Http\Controllers\auth_pages\showVidoeController;
use App\Http\Controllers\auth_pages\subscribeController;
use App\Http\Controllers\auth_pages\supportController;
use App\Http\Controllers\auth_pages\videosController;
use App\Http\Controllers\auth_pages\paymentController;

//gest
use App\Http\Controllers\gest_pages\welcameController;
use App\Http\Controllers\gest_pages\hotGESTController;
use App\Http\Controllers\gest_pages\newsGESTController;


use App\Http\Controllers\ProfileController;

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
//likes
///////////like coment
Route::get('/show_video/Coments_AUTH/{id_videos}/add_like', [CommentsController::class, 'Like_coment']);
Route::get('/show_video/Coments_AUTH/{id_videos}/add_Sublike', [CommentsController::class, 'SUBLike_coment']);

Route::get('/show_video_master/Coments_AUTH/{id_videos}/add_like', [CommentsController::class, 'Like_coment']);
Route::get('/show_video_master/Coments_AUTH/{id_videos}/add_Sublike', [CommentsController::class, 'SUBLike_coment']);

///////////like video
Route::get('/show_video/my_videos_AUTH/{id_videos}/add_like', [videosController::class, 'Like_video']);
///////////subscribe
Route::get('/show_video/my_videos_AUTH/{id_chanel}/add_subscribe', [subscribeController::class, 'add_subscribe']);
Route::get('/chanel_AUTH/my_videos_AUTH/{id_chanel}/add_subscribe', [subscribeController::class, 'add_subscribe']);
Route::get('/other_videos_AUTH/my_videos_AUTH/{id_chanel}/add_subscribe', [subscribeController::class, 'add_subscribe']);
Route::get('/other_playlist_AUTH/my_videos_AUTH/{id_chanel}/add_subscribe', [subscribeController::class, 'add_subscribe']);
Route::get('/other_subscribs_AUTH/{id_user}/my_videos_AUTH/{id_chanel}/add_subscribe', [subscribeController::class, 'add_subscribe']);
Route::get('/other_about_AUTH/my_videos_AUTH/{id_chanel}/add_subscribe', [subscribeController::class, 'add_subscribe']);
////////////////gest pages
Route::get('/', [welcameController::class, 'index'])
    ->name('home.gest');
    
Route::get('/attempte_share', [welcameController::class, 'attempte_share'])
    ->name('home.attempt_share');

Route::get('/login_student', [welcameController::class, 'login_student'])
    ->name('login_student');

Route::get('/register_student', [welcameController::class, 'register_student'])
    ->name('register_student');
    
Route::get('/login_master', [welcameController::class, 'login_master'])
    ->name('login_master');

Route::get('/register_master', [welcameController::class, 'register_master'])
    ->name('register_master');

Route::get('/news_GEST', [newsGESTController::class, 'index'])
    ->name('news.gest');

////////////////admin controller

Route::get('admin_taleb/dashboard', [homeadminController::class, 'dashboard'])
->name('admin_taleb.dashboard')
->middleware('auth');

Route::get('admin_taleb/videos', [videosadminController::class, 'videos'])
->name('admin_taleb.videos')
->middleware('auth');

//chanels
Route::get('admin_taleb/chanels', [chanelsadminController::class, 'chanels'])
->name('admin_taleb.chanels')
->middleware('auth');

Route::get('admin_taleb/chanels/{id_chanel}/chanels_delete', [chanelsadminController::class, 'chanels_delete'])
->name('admin_taleb.chanels_delete')
->middleware('auth');

//COMMENTS
Route::get('admin_taleb/comments', [commentsadminController::class, 'comments'])
->name('admin_taleb.comments')
->middleware('auth');
Route::get('admin_taleb/comments/{id_chanel}/comments_delete', [commentsadminController::class, 'destroy'])
->name('admin_taleb.comments_delete')
->middleware('auth');

//rapport
Route::get('admin_taleb/rapports', [rapportsadminController::class, 'index'])
->name('admin_taleb.rapports')
->middleware('auth');

Route::get('admin_taleb/rapports/{id_user}/message', [rapportsadminController::class, 'rapports'])
->name('admin_taleb.message')
->middleware('auth');

Route::get('admin_taleb/rapports/{id_user}/delete', [rapportsadminController::class, 'destroy'])
->name('admin_taleb.rapports_message_delete')
->middleware('auth');

Route::get('admin_taleb/rapports/{id_user}/create', [rapportsadminController::class, 'create'])
->name('admin_taleb.rapports_message_create')
->middleware('auth');

//users
Route::get('admin_taleb/users', [usersadminController::class, 'index'])
->name('admin_taleb.users')
->middleware('auth');

Route::get('admin_taleb/users/{id_user}/chaneg_state_users', [usersadminController::class, 'chaneg_state_users'])
->name('admin_taleb.chaneg_state_users')
->middleware('auth');

Route::post('admin_taleb/users/{id_user}/chaneg_details_users', [usersadminController::class, 'chaneg_details_users'])
->name('admin_taleb.chaneg_details_users')
->middleware('auth');

Route::get('admin_taleb/users/{id_user}/add_chanel_users', [usersadminController::class, 'add_chanel_users'])
->name('admin_taleb.add_chanel_users')
->middleware('auth');

Route::get('admin_taleb/users/add_special_student', [usersadminController::class, 'add_special_student'])
->name('admin_taleb.add_special_student')
->middleware('auth');

Route::get('admin_taleb/users/edite_special_student', [usersadminController::class, 'edite_special_student'])
->name('admin_taleb.edite_special_student')
->middleware('auth');

Route::get('admin_taleb/users/add_master', [usersadminController::class, 'add_master'])
->name('admin_taleb.add_master')
->middleware('auth');

Route::get('admin_taleb/users/add_admin', [usersadminController::class, 'add_admin'])
->name('admin_taleb.add_admin')
->middleware('auth');

Route::get('admin_taleb/users/{id_user}/dessubscribe', [usersadminController::class, 'dessubscribe'])
->name('admin_taleb.dessubscribe')
->middleware('auth');

Route::get('admin_taleb/users/{id_user}/addsubscribe', [usersadminController::class, 'addsubscribe'])
->name('admin_taleb.addsubscribe')
->middleware('auth');

Route::get('admin_taleb/users/{id_user}/destroy', [usersadminController::class, 'destroy'])
->name('admin_taleb.destroy')
->middleware('auth');

//users
Route::get('admin_taleb/payment_plans', [payment_plansadminController::class, 'index'])
->name('admin_taleb.payment_plans')
->middleware('auth');

Route::get('admin_taleb/payment_plans/add', [payment_plansadminController::class, 'store'])
->name('admin_taleb.payment_plans_add')
->middleware('auth');

Route::get('admin_taleb/payment_plans/{id_plan}/edite', [payment_plansadminController::class, 'edit'])
->name('admin_taleb.payment_plans_edite')
->middleware('auth');

Route::get('admin_taleb/payment_plans/{id_plan}/remove', [payment_plansadminController::class, 'destroy'])
->name('admin_taleb.payment_plans_remove')
->middleware('auth');

////////////////////////// master

    Route::middleware(['auth', 'check_session'])->group(function () {
        
        ////////////////Auth pages
        Route::get('home_AUTH', [homeController::class, 'index'])
        ->name('home_AUTH')
        ->middleware('auth');
        //historique
        Route::get('historique_AUTH', [historiqueController::class, 'index'])
        ->name('historique_AUTH')
        ->middleware('auth');

        Route::get('historique_AUTH/{id_video}/delete', [historiqueController::class, 'destroyOne'])
        ->name('historique_AUTH.delete_one')
        ->middleware('auth');

        Route::get('historique_AUTH/delete', [historiqueController::class, 'destroy'])
        ->name('historique_AUTH.delete')
        ->middleware('auth');

        Route::get('hot_AUTH', [hotController::class, 'index'])
        ->name('hot_AUTH')
        ->middleware('auth');

        //chanel
        //**main */

        Route::get('my_chanel_AUTH/master_panel', [my_chanelController::class, 'master_panel'])
        ->name('master_panel')
        ->middleware('auth');

        Route::get('my_chanel_AUTH/{id_chanel}', [my_chanelController::class, 'index'])
        ->name('my_chanel_AUTH')
        ->middleware('auth');

        //**videos */
        Route::get('my_videos_AUTH/{id_chanel}', [my_chanelController::class, 'my_videos_AUTH'])
        ->name('my_videos_AUTH')
        ->middleware('auth');

        Route::post('my_videos_AUTH/{id_chanel}/upload_main', [videosController::class, 'upload_main_video'])
        ->name('my_videos_AUTH.uploadmain')
        ->middleware('auth');

        //watsh video
        Route::get('show_video/{id_video}', [showVidoeController::class, 'index'])
            ->name('show_video.show')
            ->middleware('auth');

        //watsh video master
        Route::get('show_video_master/{id_video}/', [showVidoeController::class, 'index_master'])
            ->name('show_video.show')
            ->middleware('auth');

        //striks
        Route::get('show_video/striks/{id_video}/striks_main', [videosController::class, 'striks_main_video'])
            ->name('show_video.striks_main')
            ->middleware('auth');
        //delete video
        Route::get('my_videos_AUTH/{id_video}/delete', [VideosController::class, 'destroy'])
        ->name('my_video.delete')
        ->middleware('auth');
        //edite video
        Route::post('my_videos_AUTH/{id_video}/edit', [VideosController::class, 'edit'])
        ->name('my_video.edit')
        ->middleware('auth');

        Route::post('my_videos_AUTH/{id_chanel}/upload', [videosController::class, 'upload_video'])
        ->name('my_videos_AUTH.upload')
        ->middleware('auth');
        //**playlist */

        Route::get('playlist_AUTH/{id_chanel}', [Play_listController::class, 'playlist_AUTH'])
        ->name('playlist_AUTH')
        ->middleware('auth');

        Route::post('playlist_AUTH/{id_chanel}/create', [Play_listController::class, 'playlist_AUTH_create'])
        ->name('playlist_AUTH.create')
        ->middleware('auth');

        Route::post('playlist_AUTH/{id_playlist}/edit', [Play_listController::class, 'playlist_AUTH_edite'])
        ->name('playlist_AUTH.edite')
        ->middleware('auth');

        Route::get('playlist_AUTH/{id_playlist}/delete', [Play_listController::class, 'playlist_AUTH_delete'])
        ->name('playlist_AUTH.delete')
        ->middleware('auth');

        Route::post('playlist_AUTH/{id_videos}/add_videos', [Play_listController::class, 'playlist_AUTH_add_videos'])
        ->name('playlist_AUTH.add_videos')
        ->middleware('auth');

        Route::get('playlist_AUTH/{id_videos}/delete_videos', [Play_listController::class, 'playlist_AUTH_delete_videos'])
        ->name('playlist_AUTH.delete_videos')
        ->middleware('auth');
        //**about */
        Route::get('my_about_AUTH/{id_chanel}', [my_chanelController::class, 'my_about_AUTH'])
        ->name('my_about_AUTH')
        ->middleware('auth');
        //**subs */
        Route::get('my_subscribs_AUTH/{id_chanel}', [my_chanelController::class, 'my_subscribs_AUTH'])
        ->name('my_subscribs_AUTH')
        ->middleware('auth');
        //creat chanel
        Route::post('my_chanel_AUTH/create', [my_chanelController::class, 'store'])
        ->name('my_chanel_AUTH.create')
        ->middleware('auth');

        Route::put('my_chanel_AUTH/{id_chanel}/remove_chanel', [my_chanelController::class, 'remove_chanel'])
        ->name('my_chanel_AUTH.remove_chanel')
        ->middleware('auth');

        Route::post('my_chanel_AUTH/{id_chanel}/edit', [my_chanelController::class, 'edit'])
        ->name('my_chanel_AUTH.edite')
        ->middleware('auth');

        Route::put('my_chanel_AUTH/{id_chanel}/links', [my_chanelController::class, 'add_links'])
        ->name('my_chanel_AUTH.links')
        ->middleware('auth');

        Route::put('my_chanel_AUTH/{id_link}/remove', [my_chanelController::class, 'remove_links'])
        ->name('my_chanel_AUTH.links_remove')
        ->middleware('auth');

        //creat coment
        Route::get('Coments_AUTH/{id_videos}/create', [CommentsController::class, 'store'])
        ->name('Coments_AUTH.create')
        ->middleware('auth');

        Route::get('Coments_AUTH/{id_coments}/createSub', [CommentsController::class, 'storeSub'])
        ->name('Coments_AUTH.createSub')
        ->middleware('auth');


        //**other */
        Route::get('chanel_AUTH/{id_chanel}', [chanelController::class, 'index'])
        ->name('other_chanel_AUTH')
        ->middleware('auth');
        //**videos */
        Route::get('other_videos_AUTH/{id_chanel}', [chanelController::class, 'other_videos_AUTH'])
        ->middleware('auth');
        //**playlist */
        Route::get('other_playlist_AUTH/{id_chanel}', [chanelController::class, 'other_playlist_AUTH'])
        ->name('other_playlist_AUTH')
        ->middleware('auth');
        //**about */
        Route::get('other_about_AUTH/{id_chanel}', [chanelController::class, 'other_about_AUTH'])
        ->name('other_about_AUTH')
        ->middleware('auth');
        //**subs */
        Route::get('other_subscribs_AUTH/{id_chanel}/{id_user}', [chanelController::class, 'other_subscribs_AUTH'])
        ->name('other_subscribs_AUTH')
        ->middleware('auth');


        // 

        Route::get('news_AUTH', [newsController::class, 'index'])
        ->name('news_AUTH')
        ->middleware('auth');

        Route::get('subscribe_AUTH', [subscribeController::class, 'index'])
        ->name('subscribe_AUTH')
        ->middleware('auth');

        //support
        Route::get('support_AUTH', [supportController::class, 'index'])
        ->name('support_AUTH')
        ->middleware('auth');

        Route::get('support_AUTH/create', [supportController::class, 'create'])
        ->name('support_AUTH.create')
        ->middleware('auth');

        Route::middleware('auth')->group(function () {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::get('/edit_admin', [ProfileController::class, 'edit_admin'])->name('profile.edit_admin');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
        });

        //payment
        Route::get('pyment_AUTH', [paymentController::class, 'index'])
        ->name('pyment_AUTH')
        ->middleware('auth');

        Route::post('pyment_AUTH/{id}/store', [paymentController::class, 'store'])
        ->name('pyment_AUTH.store')
        ->middleware('auth');

        Route::get('pyment_AUTH/{id}/success', [PaymentController::class, 'handleSuccess'])
        ->name('pyment_AUTH.success')
        ->middleware('auth');

        Route::get('pyment_AUTH/faild', [paymentController::class, 'handleCancel'])
        ->name('pyment_AUTH.faild')
        ->middleware('auth');


        
    });
require __DIR__.'/auth.php';
