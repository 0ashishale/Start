@extends('layouts.master')
@section('event')

            
    <section class="book-table"> 
      
      <b><a href="#"  class="heading">EVENTS</a> </b><br/>
        <div class="booktable-row">
          <img src="{{ asset('images/table2.jpg') }}" alt="" >
          <h1>NON STOP PARTY</h1>
          <p>Enjoy the event throughout the entire night. </p>
          
          <a class="hero-btn" href="#"> Book A Table</a>
        </div>
  
        <div class="booktable-row">
          <img src="{{ asset('images/table2.jpg') }}" alt="" >
          <h1>SPECIAL PROGRAM</h1>
          <p>Enjoy the special progaram every night. </p>
          
          <a class="hero-btn" href="#"> Book A Table</a>
        </div>
  
        <div class="booktable-row">
          <img src="{{ asset('images/table2.jpg') }}" alt="" >
          <h1>TOP RESIDENCE</h1>
          <p>Enjoy the event throughout the entire night </p>
          
          <a class="hero-btn" href="#"> Book A Table</a>
        </div>
  
      </section>

@endsection()