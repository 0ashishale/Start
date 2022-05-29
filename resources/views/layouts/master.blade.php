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