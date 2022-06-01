<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Club</title>
 
  <link rel="stylesheet" href="/css/navbar.css">
  <link rel="stylesheet" href="/css/reservation.css">
  <link rel="stylesheet" href="/css/logo.css">
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

</head>
  
<body>



   <!-----branch section--->
   <div class="branch">
     <ul>
       <li style="--i:4;"><a href="#">branch1</a></li>
       <li style="--i:3;"><a href="#">branch2</a></li>
       <li style="--i:2;"><a href="#">branch3</a></li>
       <li style="--i:1;"><a href="#">branch4</a></li>
     </ul>
   </div>
  
  <!-----branch section--->
  

  <section>
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
      <p id="address">Phoolbari-11 <br /> Kaski, Nepal</p>
      <p id="phone">Phone : 00000000 <br> Fax : 0000000</p>
    </div>
    <div class="icons "></div>
    <i class="fa-brands fa-facebook"></i>
    <i class="fa-brands fa-twitter"></i>
    <i class="fa-brands fa-linkedin"></i>
    <i class="fa-brands fa-instagram"></i>


    <p id="bholenath">© 2022 All Rights Reserved Terms of Use and Privacy Policy. Design by BHOLENATH.

    </p>
  </section>

  <script src="{{asset('/js/main.js')}}"></script>

</body>

</html>