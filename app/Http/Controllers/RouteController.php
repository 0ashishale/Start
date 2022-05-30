<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{
    //

    function home(){
        return view('welcome');
    }

    function services(){
        return view('services');
    }
    function reservation(){
        return view('reservation');
    }

    function events(){
        return view('events');
    }
    function gallery(){
        return view('gallery');
    }
    function about(){
        return view('about');
    }
    function contact(){
        return view('contact');
    }
}