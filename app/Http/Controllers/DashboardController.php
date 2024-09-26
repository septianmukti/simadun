<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function approval()
    {
        if (Auth::user()->account_status == 'inactive') {
            return view('approve');
        } elseif (Auth::user()->account_status == 'active') {
            return redirect()->route('view-dashboard');
        }
    }
    
    public function ViewDashboard()
    {
        return view('dashboard');

    }
}
