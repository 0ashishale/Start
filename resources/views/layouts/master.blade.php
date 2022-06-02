<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Club</title>

  <link rel="stylesheet" href="{{asset('css/navbar.css')}}">
  <link rel="stylesheet" href="{{asset('css/reservation.css')}}">
  <link rel="stylesheet" href="{{asset('css/logo.css')}}">
  <link rel="stylesheet" href="{{asset('css/footer.css')}}">
  <link rel="stylesheet" href="{{asset('css/branch.css')}}">
  <link rel="stylesheet" href="{{asset('css/booktable.css')}}">
  <link rel="stylesheet" href="{{asset('css/content.css')}}">
  <link rel="stylesheet" href="{{asset('css/gallery.css')}}">
  <link rel="stylesheet" href="{{asset('css/service.css')}}">
  

  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  
  
</head>

<body>
  <!-- -----------Header Section------------ -->

  <section class="header">
    <div class="logo">
      <img src="{{asset('images/logo.png')}}" alt="" width="150" height="90">

    </div>
    <i class="fa-solid fa-bars"  onclick="showMenu()" ></i>
    <div class="nav-bar" id="navLinks">
      <i class="fa fa-times" onclick="hideMenu()" ></i>
      
      
      <ul>

        <li><a href="/"><i class="fa fa-home"></i>
            Home</a></li>

            <li><a href="/branches"><i class="fa fa-link"></i></i>
            Branches</a></li>

        <li><a href="/about"><i class="fa fa-grav"></i>About Us</a> </li>
        <li><a href="/services"><i class="fa fa-server"></i>
            Services</a></li>
        <li><a href="/gallery"><i class="fa fa-film"></i>
            Gallery</a></li>
        <li><a href="/events"><i class="fa fa-calendar"></i>
            Events</a></li>
        <li><a href="/reservation"><i class="fa fa-paper-plane"></i>Reservation</a></li>
      
        <li><a href="/contact"><i class="fa fa-handshake-o"></i>Contact Us</a></li>

      </ul>
     
      
   
    </div>
  </section>


  
 <section >


    <div class="text-box">

      <p>{{$text}}</p>
      <h1>{{$title}}</h1>


    </div>
  </section>

@yield('event')



  <!-- ------------------Footer-------------- -->
  <section class="footer">
    <div class="info-bar">
      <p id="address">Phoolbari-11 <br /> Kaski, Nepal</p>
      <p id="phone">Phone : 00000000 <br> Fax : 0000000</p>
    </div>
    <div class="icons"></div>
    <a href=""><i class="fa-brands fa-facebook" style="color:white"></i></a>
    <a href=""> <i class="fa-brands fa-twitter" style="color:white"></i></a>
    <a href=""><i class="fa-brands fa-linkedin" style="color:white"></i></a>
    <a href=""><i class="fa-brands fa-instagram" style="color:white"></i></a>
  
    <p id="bholenath">© 2022 All Rights Reserved Terms of Use and Privacy Policy. Design by BHOLENATH.

    </p>
  </section>

<script src="{{asset('js/menu.js')}}"> </script>
<script src="https://kit.fontawesome.com/77454ad617.js" crossorigin="anonymous"></script>

</body>

</html>
