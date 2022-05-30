<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Club</title>
  
  <link rel="stylesheet" href = "/css/navbar.css" >
  <link rel="stylesheet" href="/css/reservation.css">
  <link rel="stylesheet" href="/css/logo.css">
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <script src="https://kit.fontawesome.com/77454ad617.js" crossorigin="anonymous"></script>
  </head>
<body>
  <!-- -----------Header Section------------ -->

  <section class="header">
  <div class="logo" >
      <img src="{{asset('images/logo.png')}}" alt="" width="150" height="90">
      </div>
      <div class="nav-bar">
        <ul>
          <li><a href="/"><i class="fa fa-home"></i>
Home</a></li>
          <li><a><i class="fa fa-grav"></i>About US</a>
             <div class="sub-manu-1">
               <ul>
                 <li><a href="/aboutus/pricing">Pricing</a></li><br>
                 <li class="hover-me"><a href="{{url('/events')}}">Events<i class="fa fa-angle-double-right"></i></a>
                </li><br>
               </ul>
             </div>
        </li>
          <li><a href="/services"><i class="fa fa-server"></i>
Services</a></li>
          <li><a href="/gallery"><i class="fa fa-film"></i>
Gallery</a></li>
          <li><a href="/events"><i class="fa fa-calendar"></i>
Events</a></li>
          <li><a href="/reservation"><i class="fa fa-paper-plane"></i>Reservation</a></li>
          <li><a href="/contact"><i class="fa fa-handshake-o"></i>
Contact Us</a></li>
        </ul>
      </div>
 </section> 

 <section >
    <div class="text-box">
        <!-- <p>ENJOY THE MUSIC</p>
        <h1>MAKE YOUR NIGHT</h1> -->
        <p>{{$text}}</p>
        <h1>{{$title}}</h1>

        
    </div>
    </section>

 @yield('event')

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