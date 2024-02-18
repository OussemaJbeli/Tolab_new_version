<?php

namespace App\Http\Controllers\Admin_pages;

use App\Http\Controllers\Controller;
use App\Models\User;
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
        return Inertia::render('admin_pages/payment_plans/index');
    }

    /**
     * Show the form for creating a new resource.
     */
    
}
