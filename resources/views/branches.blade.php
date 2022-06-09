@extends('layouts.master')
@section('event')

<section class="branch">
  <div class="heading">
    <b ><a href="/branch" style="color:white;">BRANCHES</a></b>
  </div>
  <div class="branches">
    <div class="branch1">
      <div class="text">
        <a href="">
          <h1>Branch Name</h1>
        </a>

        <p>Branch Address</p>
      </div>
      <a href="url('/reservation')" ><button>Reservation</button></a>

    </div>

    <div class="branch2">
      <div class="text">
        <a href="">
          <h1>Branch_Name2</h1>
        </a>
        <p>Branch Address</p>
      </div>
      <a href="url('/reservation')" ><button>Reservation</button></a>

    </div>

    <div class="branch3">
      <div class="text">
        <a href="">
          <h1>Branch_Name3</h1>
        </a>

        <p>Branch Address</p>
      </div>
      <a href="url('/reservation')" ><button>Reservation</button></a>

    </div>
  </div>
  

</section>


@endsection()