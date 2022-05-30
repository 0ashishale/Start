<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{
    //

    function home(){
        return view('welcome', [ 'text'=>'ENJOY THE MUSIC', 'title'=>'MAKE YOUR NIGHT']);
    }

    function services(){
        return view('services', ['text'=>'write something', 'title'=>'Our Services']);
    }
    function reservation(){
        return view('reservation',['text'=>'Reserve Your Table', 'title'=>'Reservation']);
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