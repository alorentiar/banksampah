<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class CoreController extends Controller
{
    //
    public function admin(){
        App::setlocale(session()->get('locale'));
        return view('login');
    }

    public function gov(){
        App::setlocale(session()->get('locale'));
        return view('login');
    }

    public function user(){
        App::setlocale(session()->get('locale'));
        return view('login');
    }
}
