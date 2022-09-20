<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    public function showLoginForm(){
        return View('admin.auth.login');
    }
    public function showRegisterForm(){
        return view('admin.auth.register');
    }
    public function logout(Request $request) {
        Auth::logout();
        return redirect('/login');
    }
}
