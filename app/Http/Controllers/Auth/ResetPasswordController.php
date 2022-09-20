<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Mail;

class ResetPasswordController extends Controller{



  use ResetsPasswords;
  protected $redirectTo = RouteServiceProvider::HOME;








}
