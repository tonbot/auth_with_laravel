<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{

    public function index()
    {
        return view("dashboard.index");
    }

    public function logout()
    {
        Auth::logout();
        Session::flush();
        return redirect('/login'); 
    }
}
