<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function home(){
        return view('UI.home');
    }
    public function aboutus(){
        return view('UI.aboutus');
    }
    public function contact(){
        return view('UI.contact');
    }
    public function download(){
        return view('UI.download');
    }
    public function application(){
        return view('UI.application');
    }
  
}
