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

      

<div id="googleMap" style="width:100%;height:400px;" ></div>

<script>
function myMap() {
var mapProp= {
  center:new google.maps.LatLng(51.508742,-0.120850),
  zoom:5,
};
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>    
@endsection()