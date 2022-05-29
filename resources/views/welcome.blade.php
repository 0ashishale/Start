<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Club</title>
  
  <link rel="stylesheet" href = "/css/navbar.css" >
  <script src="https://kit.fontawesome.com/77454ad617.js" crossorigin="anonymous"></script>
  </head>
<body>
  <!-- -----------Header Section------------ -->

  <section class="header">
      <div class="nav-bar">
        <ul>
          <li><a href="/">Home</a></li>
          <li><a href="/about">About US</a></li>
          <li><a href="/services">Services</a></li>
          <li><a href="/gallery">Gallery</a></li>
          <li><a href="/events">Events</a></li>
          <li><a href="/reservation">Reservation</a></li>
          <li><a href="/contact">Contact Us</a></li>
        </ul>
      </div>
 </section>

 <section >
    <div class="text-box">
        <p>ENJOY THE MUSIC</p>
        <h1>MAKE YOUR NIGHT</h1>
        <a href="#" class="hero-btn" >More Info</a>
    </div>
    </section>

  
  
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

<!-- ------------------Footer-------------- -->
  <section class="footer">
    <div class="info-bar">
    <p id="address">Phoolbari-11 <br/> Kaski, Nepal</p>
    <p id="phone">Phone : 00000000 <br> Fax : 0000000</p>
    </div>
    <div class="icons " ></div>
    <i class="fa-brands fa-facebook"></i>
    <i class="fa-brands fa-twitter"></i>
    <i class="fa-brands fa-linkedin"></i>
    <i class="fa-brands fa-instagram"></i>
          

   <p id="bholenath">© 2022 All Rights Reserved Terms of Use and Privacy Policy. Design by BHOLENATH.

    </p>
    </section>

</body>
</html>