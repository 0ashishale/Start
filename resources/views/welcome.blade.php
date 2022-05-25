<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Club</title>
  <link rel="stylesheet" href = "/css/navbar.css" >
</head>
<body>
   <div class="banner">
      <div class="nav-bar">
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">About US</a></li>
          <li><a href="#">Services</a></li>
          <li><a href="#">Gallery</a></li>
          <li><a href="#">Events</a></li>
          <li><a href="#">Reservation</a></li>
          <li><a href="#">Contact Us</a></li>
        </ul>
      </div>
    <div class="content">
      <div class="section">
        <p>ENJOY THE MUSIC</p>
        <h1>MAKE YOUR NIGHT</h1>
      </div>
      <div class="info">
        <a href="#">More Info</a>
      </div>
      </div>
    </div>

    <div >
      <div class="booktable" >
        <img src="{{ asset('images/table2.jpg') }}" alt="" width="350px" height="300px">
        <h1>heading</h1>
        <p>paragraph </p>
        
        <a class="table" href="#"> Book A Table</a>
      </div>
      <div class="booktable">
      <img src="{{ asset('images/table2.jpg') }}" alt="" width="350px" height="300px">
      <h1>heading</h1>
      <p>paragraph</p>
      <a class="table" href="#"> Book A Table</a>
      </div>

      <div class="booktable">
      <img src="{{ asset('images/table2.jpg') }}" alt="" width="350px" height="300px">
      <h1>heading</h1>
      <p>paragraph</p>
      <a class="table" href="#"> Book A Table</a>
      </div>
    </div>
</body>
</html>