@extends('layouts.master')

@section('event')


<section class="reservation">
 <!-- <div class="title"> <h1>WANT TO BOOK A TABLE FOR A SPECIAL OCCASION ?</h1><br>
     <p>Grinnesso is multi-purpose venue. Make an enquiry about hiring our space.</p>
</div>-->
  <form>
    <div class="row">
       <div class="input-group">
         <input type="text" id="Name"required>
         <label for="name">your Name</label>
       </div>
       <div class="input-group">
         <input type="text" id="number"required>
         <label for="number">Phone No.</label>
       </div>
    </div>
       <div class="input-group">
         <input type="email" id="email"required>
         <label for="email">Email Id</label>
       </div>
       <div class="input-group">
         <textarea id="message" rows="8" required></textarea>
         <label for="message">your Message</label>
       </div>
       <div>
          <button type="submit">SUBMIT</button>
       </div>
       <!--<div class="input-group">
         <span class="details">Select Branches:</span><br>
         <input type="radio" name="branch">  <h3>Pokhara</h3> 
         <input type="radio" name="branch"><h3>Shyanja</h3> 
         <input type="radio" name="branch"><h3>Baglung</h3> <br><br>
       </div>-->
      </form>
</section>

@endsection()
