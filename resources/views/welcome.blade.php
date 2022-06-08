@extends('layouts.master')
@section('event')

<section class="book-table">
  
  <b><a href="#" class="heading">BRANCHES</a> </b><br />
  <div class="booktable-row">
    <img src="{{ asset('images/d.jpg') }}" alt="">
    <h1>Branch-1</h1>
    <p>POKHARA</p>

    <a class="hero-btn" href="{{asset('/reservation')}}">Reservation</a>
  </div>

  <div class="booktable-row">
    <img src="{{ asset('images/table2.jpg') }}" alt="">
    <h1>Branch-2</h1>
    <p>SHYANJA </p>

    <a class="hero-btn" href="{{asset('/reservation')}}">Reservation</a>
  </div>

  <div class="booktable-row">
    <img src="{{ asset('images/e.jpg') }}" alt="">
    <h1>BRANCH-3</h1>
    <p>Baglung</p>

    <a class="hero-btn" href="{{asset('/reservation')}}">Reservation</a>
  </div>

</section>


<!-- ---------------Content Section------------- -->


<section class="book-table">

  <b><a href="#" class="heading">EVENTS</a> </b><br />
  <div class="booktable-row">
    <img src="{{ asset('images/a.jpg') }}" alt="">
    <h1>NON STOP PARTY</h1>
    <p>Enjoy the event throughout the entire night. </p>

    <a class="hero-btn" href="#"> Book A Table</a>
  </div>

  <div class="booktable-row">
    <img src="{{ asset('images/b.jpg') }}" alt="">
    <h1>SPECIAL PROGRAM</h1>
    <p>Enjoy the special progaram every night. </p>

    <a class="hero-btn" href="#"> Book A Table</a>
  </div>

  <div class="booktable-row">
    <img src="{{ asset('images/img.jpg') }}" alt="">
    <h1>TOP RESIDENCE</h1>
    <p>Enjoy the event throughout the entire night </p>

    <a class="hero-btn" href="#"> Book A Table</a>
  </div>

</section>

<!-- ---------------Services Section-------------- -->

<section class="services">

  <b><a href="#" class="heading">OUR SERVICES</a> </b><br />
  <div class="services-row">
    <a href="">CORPORATE EVENTS</a> <br /> <br />
    <p>Need a great place to arrange an event <br /> for your business family? You are welcome.</p>
  </div>

  <div class="services-row">
    <a href="">BRANDED EVENTS </a> <br /> <br />
    <p>We will increase your brand awareness with<br /> our special service for big companies.</p>
  </div>

  <div class="services-row">
    <a href="">COMMERICIAL SHOOTS</a> <br /> <br />
    <p>You will remember your party forever thanks <br /> to our professional photographer.</p>
  </div>

  <div class="services-row">
    <a href="">HEN PARTIES</a> <br /> <br />
    <p>Feel the magic of dance floor with your <br /> friends before it is not too late.</p>
  </div>

  <div class="services-row">
    <a href=""> BIRTHDAY PARTIES </a> <br /> <br />
    <p>Happy birthday! Celebrate in our club <br /> with special discounts!

    </p>
  </div>

  <div class="services-row">
    <a href="#">VIP SERVICES</a> <br /> <br />
    <p>Premium services for special guests. <br /> Available only for loyal clients.</p>
  </div>


</section>




<!-- -------------Gallery Section--------- -->

<section class="gallery">

  <h1 class="heading">GALLERY</h1>
  <div class="services-row">
    <img src="{{ asset('images/a.jpg') }}" alt="">
    <img src="{{ asset('images/b.jpg') }}" alt="">
    <img src="{{ asset('images/c.jpg') }}" alt="">
    <img src="{{ asset('images/reservation.jpg') }}" alt="">
    <img src="{{ asset('images/d.jpg') }}" alt="">
    <img src="{{ asset('images/e.jpg') }}" alt="">
    <img src="{{ asset('images/b.jpg') }}" alt="">
    <img src="{{ asset('images/img.jpg') }}" alt="">
    <img src="{{ asset('images/reservation.jpg') }}" alt="">
    <img src="{{ asset('images/table2.jpg') }}" alt="">
    <img src="{{ asset('images/a.jpg') }}" alt="">
    <img src="{{ asset('images/e.jpg') }}" alt="">
  </div>
</section>
<!---reservation table-->
<section>
      <div class="reservation">
        <b><a href="/reservation"  class="heading">RESERVATION TABLE</a> </b>
         <form>
           <div class="row1">
              <div class="input-group">
                <input type="text" id="Name"required>
                <label for="name"><i class="fa fa-user"></i>your Name</label>
              </div>
              <div class="input-group">
                <input type="text" id="number"required>
                <label for="number"><i class="fa fa-phone"></i>Phone No.</label>
              </div>
           </div>
           <div class="row2">
             <div class="input-group">
                <input type="number" id="people"required>
                <label for="number"><i class="fa fa-users"></i>NO. Of People</label>
              </div>
              <div class="input-group">
                <input type="date" name="date" required>
                <label for="date"></label>
              </div>
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
                 <button type="submit">SUBMIT<i class="fa fa-paper-plane"></i></button>
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


<!-- -----------------about us--------- -->
<section class="about-us">
  <div class="container ">
    <div class="content-section">
      <div class="title">
        <h1>About Us</h1>
      </div>

      <div class="content">
        <h4>Opening Hours: 9PM-3AM</h4>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
          Nisi, atque sequi totam voluptas veritatis expedita dolorum praesentium ratione,
          accusamus id ad fugit, deserunt accusantium incidunt nam delectus labore qui perferendis!</p>
        <a href="{{url('/reservation')}}"><button>Reservation</button></a>
      </div>
      <div class="image-section">
        <img src="{{asset('images/logo.png')}}" alt="">
      </div>

    </div>


  </div>
  <div class="social content">
    <a href="#"><i class="fa-solid fa-phone"> +9779876543218</i></a>
    <a href="#"><i class="fa-brands fa-facebook-f"> Facebook</i></a>
    <a href="#"><i class="fa-brands fa-instagram"> Instagram</i></a>
    <a href="#"><i class="fa-brands fa-twitter"> Twitter </i></a>
  </div>


<iframe
  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7029.990810664071!2d83.98180702529555!3d28.237819136874638!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3995945d57d28ba5%3A0xdd52869218279546!2sShree%20Bindhyabasini%20Temple!5e0!3m2!1sen!2snp!4v1653900842774!5m2!1sen!2snp"
  width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
  referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>

@endsection()