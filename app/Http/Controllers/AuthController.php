<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class AuthController extends Controller
{
    //
    public function login(){
        App::setlocale(session()->get('locale'));
        return view('login');
    }

    public function dashboard(){
        App::setlocale(session()->get('locale'));
        return view('dashboard');
    }

    public function register(){
        App::setlocale(session()->get('locale'));
        return view('register');
    }
}
