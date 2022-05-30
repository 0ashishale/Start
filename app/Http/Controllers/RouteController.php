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
        return view('services', ['text'=>'Full services to meet your every need', 'title'=>'Our Services']);
    }
    function reservation(){
        return view('reservation',['text'=>'Reserve Your Table', 'title'=>'Reservation']);
    }

    function events(){
        return view('events',['text'=>'See The Events Happening Now', 'title'=>'Events']);
    }
    function gallery(){
        return view('gallery',['text'=>'Memories from the Events', 'title'=>'Gallery']);
    }
    function about(){
        return view('about',['text'=>'Know More About Us', 'title'=>'About Us']);
    }
    function contact(){
        return view('contact',['text'=>'Contact for more details', 'title'=>'Reservation']);
    }
}