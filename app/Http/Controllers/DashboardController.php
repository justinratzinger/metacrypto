<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(){
        return view('dashboard.dashboard');
    }

    public function profile(){
        return view('dashboard.profile');
    }
    public function deposit(){
        return view('dashboard.deposit');
    }
    public function withdraw(){
        return view('dashboard.withdraw');
    }
    public function investments(){
        return view('dashboard.investments');
    }

    public function referrals(){
        return view('dashboard.referrals');
    }
}
