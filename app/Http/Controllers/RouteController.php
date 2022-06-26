<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{
    //

    function home(){
        return view ('frontend.welcome', [ 'text'=>'ENJOY THE MUSIC', 'title'=>'MAKE YOUR NIGHT']);
    }

    function services(){
        return view ('frontend.layouts.services', ['text'=>'Full services to meet your every need', 'title'=>'Our Services']);
    }
    function reservation(){
        return view ('frontend.layouts.reservation',['text'=>'Scrooll up for', 'title'=>'Reservation']);
    }

    function events(){
        return view ('frontend.layouts.events',['text'=>'See The Events Happening Now', 'title'=>'Events']);
    }
    function gallery(){
        return view ('frontend.layouts.gallery',['text'=>'Memories from the Events', 'title'=>'Gallery']);
    }
    function about(){
        return view ('frontend.layouts.about',['text'=>'Know More About Us', 'title'=>'About Us']);
    }
    function contact(){
        return view ('frontend.layouts.contact',['text'=>'Contact for more details', 'title'=>'Contact Us']);
    }
    function branches(){
        return view ('frontend.layouts.branches',['text'=>'Choose your place.', 'title'=>'Branches']);
    }
   
    function branch1(){
        return view ('frontend.layouts.branches.branch1', ['text'=>  'Pokhara', 'title'=>'Pokhara Club']);
    }
    function branch2(){
        return view ('frontend.layouts.branches.branch2', ['text'=>  'Kathmandu', 'title'=>'Kathmandu Club']);
    }
    function branch3(){
        return view ('frontend.layouts.branches.branch3', ['text'=>  'Illam', 'title'=>'Illam Club']);
    }

}