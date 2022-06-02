@extends('layouts.master')
@section('event')
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7029.990810664071!2d83.98180702529555!3d28.237819136874638!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3995945d57d28ba5%3A0xdd52869218279546!2sShree%20Bindhyabasini%20Temple!5e0!3m2!1sen!2snp!4v1653900842774!5m2!1sen!2snp" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    <section>
<div class="reservation">
         <form>
              <div class="input-group">
                <input type="text" id="Name"required>
                <label for="name"><i class="fa fa-user"></i>your Name</label>
              </div>
              <div class="input-group">
                <input type="email" id="email"required>
                <label for="email"><i class="fa fa-envelope" ></i>Email Id</label>
              </div>

              <div class="input-group">
                <textarea id="message" rows="8" required></textarea>
                <label for="message"><i class="fa fa-comments-o"></i>Your Message</label>
              </div>
              <div>
                 <button type="submit">SEND<i class="fa fa-paper-plane"></i></button>
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
@endsection()