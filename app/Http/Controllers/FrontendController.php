<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    //
    function projects(){
        return view('frontend.projects');
    }
    function about(){
        return view('frontend.about');
    }
    function contact(){
        return view('frontend.contact');
    }
}
