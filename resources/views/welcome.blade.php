@extends('layouts.master')
@section('event')
 
  
  
    <!-- ---------------Content Section--------------->


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

<!-- ---------------Services Section-------------- -->
    
    <section class="services">
       
        <b><a href="#"  class="heading">OUR SERVICES</a> </b><br/>
          <div class="services-row">
               <a href="">CORPORATE EVENTS</a> <br/> <br/>
                <p>Need a great place to arrange an event <br/> for your business family? You are welcome.</p>
          </div>

          <div class="services-row">
          <a href="">BRANDED EVENTS </a> <br/> <br/>
                <p>We will increase your brand awareness  with<br/>  our special service for big companies.</p>
          </div>

          <div class="services-row">
                <a href="">COMMERICIAL SHOOTS</a> <br/> <br/>
                <p>You will remember your party forever thanks <br/> to our professional photographer.</p>
          </div>

          <div class="services-row">
                <a href="">HEN PARTIES</a> <br/> <br/>
                <p>Feel the magic of dance floor with your <br/> friends before it is not too late.</p>
          </div>

          <div class="services-row">
               <a href=""> BIRTHDAY PARTIES </a> <br/> <br/>
                <p>Happy birthday! Celebrate in our club <br/> with special discounts!

</p>
          </div>

          <div class="services-row">
                <a href="#">VIP SERVICES</a> <br/> <br/>
                <p>Premium services for special guests. <br/> Available only for loyal clients.</p>
          </div>
          
          
    </section>




    <!-- -------------Gallery Section--------- -->

      <section class="gallery">
        <h1 class="heading">GALLERY</h1>
      <div class="services-row" >
        <img src="{{ asset('images/table2.jpg') }}" alt="" >
        <img src="{{ asset('images/table2.jpg') }}" alt="" >
        <img src="{{ asset('images/table2.jpg') }}" alt="" >
        <img src="{{ asset('images/table2.jpg') }}" alt="" >
        <img src="{{ asset('images/table2.jpg') }}" alt="" >
        <img src="{{ asset('images/table2.jpg') }}" alt="" >
        <img src="{{ asset('images/table2.jpg') }}" alt="" >
        <img src="{{ asset('images/table2.jpg') }}" alt="" >
        <img src="{{ asset('images/table2.jpg') }}" alt="" >
        <img src="{{ asset('images/table2.jpg') }}" alt="" >
        </div>


      </section>
      <section class="reservation">
  <div class="title">TABLE RESERVATION</div>
  <br>
  <form action="#">
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
</form>
</section>

      




<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7029.990810664071!2d83.98180702529555!3d28.237819136874638!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3995945d57d28ba5%3A0xdd52869218279546!2sShree%20Bindhyabasini%20Temple!5e0!3m2!1sen!2snp!4v1653900842774!5m2!1sen!2snp" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
@endsection()