<?php

namespace App\Http\Controllers\AccountPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function loadDashboard()
    {
        if (\auth()->user()->user_type === 'customer') {
            return view('AccountPanel.customer.dashboard');
        } elseif (\auth()->user()->user_type === 'seller') {
            return view('AccountPanel.seller.dashboard');
        }

    }
}
