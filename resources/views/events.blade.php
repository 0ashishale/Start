@extends('layouts.master')

@section('event')



<section class="book-table">

  <div class="heading">
    <b ><a href="/events" style="color:white;" >EVENTS</a></b>
  </div>
    <div class="booktable-row" data-aos="zoom-in-up" data-aos-duration="1000">
      <img src="{{ asset('images/e.jpg') }}" alt="">
      <h1>NON STOP PARTY</h1>
      <p>Enjoy the event throughout the entire night. </p>

      <a class="hero-btn" href="#"> Book A Table</a>
    </div>

    <div class="booktable-row" data-aos="zoom-in-up" data-aos-duration="1000">
      <img src="{{ asset('images/table2.jpg') }}" alt="">
      <h1>SPECIAL PROGRAM</h1>
      <p>Enjoy the special progaram every night. </p>

      <a class="hero-btn" href="#"> Book A Table</a>
    </div>

    <div class="booktable-row" data-aos="zoom-in-up" data-aos-duration="1000">
      <img src="{{ asset('images/c.jpg') }}" alt="">
      <h1>TOP RESIDENCE</h1>
      <p>Enjoy the event throughout the entire night </p>

      <a class="hero-btn" href="#"> Book A Table</a>
    </div>
 

</section>

@endsection()