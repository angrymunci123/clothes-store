<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function loginAdmin() {
        if (Auth::check()) {
            return view('admin.dashboard.dashboard_page');
        }
        return view('admin.login');
    }


    public function logoutAdmin(Request $request) {
        Auth::logout();
        $request->session()->forget('user_id');
        $request->session()->forget('first_name');
        $request->session()->forget('last_name');
        $request->session()->forget('role');
        $request->session()->forget('password');
        return view("admin.login");
    }
}
