@extends('layouts.master')
@section('event')

<section>
<div class="reservation">
         <form>
           <div class="row1">
              <div class="input-group">
                <input type="text" id="Name"required>
                <label for="name"><i class="fa fa-user">your Name</label>
              </div>
              <div class="input-group">
                <input type="text" id="number"required>
                <label for="number"><i class="fa fa-phone">Phone No.</label>
              </div>
           </div>
              <div class="input-group">
                <input type="email" id="email"required>
                <label for="email"><i class="fa fa-envelope" >Email Id</label>
              </div>

              <div class="input-group">
                <textarea id="message" rows="8" required></textarea>
                <label for="message"><i class="fa fa-comments-o">Your Message</label>
              </div>
              <div>
                 <button type="submit">Send<i class="fa fa-paper-plane"></button>
              </div>
              <!--<div class="input-group">
                <span class="details">Select Branches:</span><br>
                <input type="radio" name="branch">  <h3>Pokhara</h3> 
                <input type="radio" name="branch"><h3>Shyanja</h3> 
                <input type="radio" name="branch"><h3>Baglung</h3> <br><br>
              </div>-->
          </form>
        </div>
</section>        



 <
@endsection()