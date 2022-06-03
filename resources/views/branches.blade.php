@extends('layouts.master')
@section('event')

<section class="book-table"> 
      
      <b><a href="#"  class="heading">BRANCHES</a> </b><br/>
        <div class="booktable-row">
          <img src="{{ asset('images/d.jpg') }}" alt="" >
          <h1>Branch-1</h1>
          <p>POKHARA</p>
          
          <a class="hero-btn" href="{{asset('/reservation')}}">Reservation</a>
        </div>
  
        <div class="booktable-row">
          <img src="{{ asset('images/table2.jpg') }}" alt="" >
          <h1>Branch-2</h1>
          <p>SHYANJA </p>
          
          <a class="hero-btn" href="{{asset('/reservation')}}">Reservation</a>
        </div>
  
        <div class="booktable-row">
          <img src="{{ asset('images/e.jpg') }}" alt="" >
          <h1>BRANCH-3</h1>
          <p>Baglung</p>
          
          <a class="hero-btn" href="{{asset('/reservation')}}">Reservation</a>
        </div>
  
      </section>


@endsection()