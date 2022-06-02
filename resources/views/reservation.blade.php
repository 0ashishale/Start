@extends('layouts.master')

@section('event')


<section class="reservation">
  <div class="title"> <h1>WANT TO BOOK A TABLE FOR A SPECIAL OCCASION ?</h1><br>
     <p>Grinnesso is multi-purpose venue. Make an enquiry about hiring our space.</p>
</div>
  <br>
  <FORM action="#">
    <div class="input-box">
         <span class="details">Name:</span><br>
         
         <input type="text" class="latter" placeholder="Enter your name"required>
       </div>
       <br>
       <div class="input-box">
         <span class="details">E-mail:</span><br>
         <input type="text" class="latter" placeholder="Enter your email"required>
       </div>
       <br>
       <div class="input-box">
         <span class="details">Phone No:</span><br>
         <input type="number" class="latter"  placeholder="Enter your phone number"required>
         
       </div><br>
       <div class="input-box">
         <span class="details">No. of people:</span><br>
         <input type="number" class="latter"  placeholder="Enter No. of poeple"required>
         
       </div>
       <br>
       <div class="input-box">
         <span class="details">Message:</span><br>
         <input type="text" class="message" placeholder="Enter your message"required>
       </div>
       <br>
       <div class="input-box">
         <span class="details">Select Branches:</span><br>
         <input type="radio" name="branch">  <h3>Pokhara</h3> 
         <input type="radio" name="branch"><h3>Shyanja</h3> 
         <input type="radio" name="branch"><h3>Baglung</h3> <br><br>
       <div class="button">
         <input type="submit" class="value" value="Send message">
       </div> <br>
      

       </div>
  </FORM>
</section>

@endsection()
