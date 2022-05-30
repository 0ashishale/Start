@extends('layouts.master')
@section('event')



 <section class="reservation">
  <div class="title">
      <h1>CONTACT US </h1><br>
    <h3 class="details">(feel free to send us a message)</h3>
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
         <span class="details">Message:</span><br>
         <input type="text" class="message" placeholder="Enter your message"required>
       </div>
       <br>
       <div class="button">
         <input type="submit" class="value" value="Send message">
       </div> <br>
  </FORM>
</section>
@endsection()