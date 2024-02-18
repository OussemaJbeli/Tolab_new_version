<?php

namespace App\Http\Controllers\gest_pages;

use App\Http\Controllers\Controller;
use App\Models\User;
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
        return Inertia::render('gest_pages/home');
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
