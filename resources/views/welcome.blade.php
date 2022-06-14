@extends('layouts.master')
@section('event')



<!-- ---------branch section--------- -->
<section class="branch">


  <div class="" data-aos="zoom-in-up" data-aos-duration="1000">
    <div class="heading">
      <b><a href="/events" style="color:white;">
          <h4>BRANCHES<h4>
        </a></b>
    </div>
    <div class="branches">
      <div class="branch1">
        <div class="text" onclick="location.href='/branches/branch1'">
          <a href="/branches/branch1">
            <h1>Pokhara Club</h1>
          </a>

          <p>Pokhara </p>
        </div>
        <a href="{{url('/reservation')}}"><button>Reservation</button></a>

      </div>

      <div class="branch2">


        <div class="text" onclick="location.href='/branches/branch2'">
          <a href="/branches/branch2">
            <h1>kathmandu Club</h1>

          </a>
          <p>Kathmandu</p>
        </div>
        <a href="{{url('/reservation')}}"><button>Reservation</button></a>

      </div>

      <div class="branch3">


        <div class="text" onclick="location.href='/branches/branch3'">
          <a href="/branches/branch3">
            <h1>Illam Club</h1>

          </a>

          <p>Illam</p>
        </div>
        <a href="{{url('/reservation')}}"><button>Reservation</button></a>

      </div>
    </div>

  </div>

  </div>
</section>







<!-- ---------------Content Section------------- -->


<section class="book-table">
  <div class="heading">
    <b><a href="/events" style="color:white;">
        <h4>EVENTS<h4>
      </a></b>
  </div>
  <div class="booktable-row" data-aos="zoom-in-up" data-aos-duration="1000">
    <img src="{{ asset('images/e.jpg') }}" alt="">
    <h1>NON STOP PARTY</h1>
    <p>Enjoy the event throughout the entire night. </p>

    <a class="hero-btn" href="#"> Book A Table</a>
  </div>

  <div class="booktable-row" data-aos="zoom-in-up" data-aos-duration="1000">
    <img src="{{ asset('images/table2.jpg') }}" alt="">
    <h1>SPECIAL PROGRAM</h1>
    <p>Enjoy the special progaram every night. </p>

    <a class="hero-btn" href="#"> Book A Table</a>
  </div>

  <div class="booktable-row" data-aos="zoom-in-up" data-aos-duration="1000">
    <img src="{{ asset('images/c.jpg') }}" alt="">
    <h1>TOP RESIDENCE</h1>
    <p>Enjoy the event throughout the entire night </p>

    <a class="hero-btn" href="#"> Book A Table</a>
  </div>


</section>

<!-- ---------------Services Section-------------- -->

<section class="services">
  <div data-aos="zoom-in-up" data-aos-duration="1000">
    <div class="heading">
      <b><a href="/events" style="color:white;">
          <h4>SERVICES<h4>
        </a></b>
    </div>
    <div class="services-row" data-aos="fade-right">
      <a href="">CORPORATE EVENTS</a> <br /> <br />
      <p>Need a great place to arrange an event <br /> for your business family? You are welcome.</p>
    </div>

    <div class="services-row" data-aos="fade-in">
      <a href="">BRANDED EVENTS </a> <br /> <br />
      <p>We will increase your brand awareness with<br /> our special service for big companies.</p>
    </div>

    <div class="services-row" data-aos="fade-up">
      <a href="">COMMERICIAL SHOOTS</a> <br /> <br />
      <p>You will remember your party forever thanks <br /> to our professional photographer.</p>
    </div>

    <div class="services-row" data-aos="fade-in">
      <a href="">HEN PARTIES</a> <br /> <br />
      <p>Feel the magic of dance floor with your <br /> friends before it is not too late.</p>
    </div>

    <div class="services-row" data-aos="fade-up">
      <a href=""> BIRTHDAY PARTIES </a> <br /> <br />
      <p>Happy birthday! Celebrate in our club <br /> with special discounts!

      </p>
    </div>

    <div class="services-row" data-aos="fade-left">
      <a href="#">VIP SERVICES</a> <br /> <br />
      <p>Premium services for special guests. <br /> Available only for loyal clients.</p>
    </div>
  </div>

</section>




<!-- -------------Gallery Section--------- -->
<section class="gallery">
  <div class="heading">
    <b><a href="/events" style="color:white;">
        <h4>GALLERY<h4>
      </a></b>
  </div>
  <div class="photos" data-aos="zoom-in-up" data-aos-duration="1000">
    <div class="container">
      <a href="{{ asset('images/g.jpg') }}" data-lightbox="models" data-title="caption1">
        <img src="{{ asset('images/g.jpg') }}" alt="">
      </a>
      <a href="{{ asset('images/h.jpg') }}" data-lightbox="models" data-title="caption2">
        <img src="{{ asset('images/h.jpg') }}" alt="">
      </a>
      <a href="{{ asset('images/i.jpg') }}" data-lightbox="models" data-title="caption3">
        <img src="{{ asset('images/i.jpg') }}" alt="">
      </a>
      <a href="{{ asset('images/j.jpg') }}" data-lightbox="models" data-title="caption4">
        <img src="{{ asset('images/j.jpg') }}" alt="">
      </a>
      <a href="{{ asset('images/k.jpg') }}" data-lightbox="models" data-title="caption5">
        <img src="{{ asset('images/k.jpg') }}" alt="">
      </a>
      <a href="{{ asset('images/l.jpg') }}" data-lightbox="models" data-title="caption6">
        <img src="{{ asset('images/l.jpg') }}" alt="">
      </a>
      <a href="{{ asset('images/x.jpg') }}" data-lightbox="models" data-title="caption7">
        <img src="{{ asset('images/x.jpg') }}" alt="">
      </a>
      <a href="{{ asset('images/y.jpg') }}" data-lightbox="models" data-title="caption8">
        <img src="{{ asset('images/y.jpg') }}" alt="">
      </a>
      <a href="{{ asset('images/z.jpg') }}" data-lightbox="models" data-title="caption9">
        <img src="{{ asset('images/z.jpg') }}" alt="">
      </a>
      <a href="{{ asset('images/h.jpg') }}" data-lightbox="models" data-title="caption10">
        <img src="{{ asset('images/h.jpg') }}" alt="">
      </a>
    </div>

  </div>





</section>

<!---reservation table-->
<section>
  <div class="reservation">
    <div class="heading">
      <b><a href="/events" style="color:white;">
          <h4>RESERVATION<h4>
        </a></b>
    </div>
    <form>
      <div data-aos="zoom-in-up" data-aos-duration="1000">
        <div class="row1">
          <div class="input-group">
            <input type="text" id="Name" required>
            <label for="name"><i class="fa fa-user"></i>your Name</label>
          </div>
          <div class="input-group">
            <input type="text" id="number" required>
            <label for="number"><i class="fa fa-phone"></i>Phone No.</label>
          </div>
        </div>
        <div class="row2">
          <div class="input-group">
            <input type="number" id="people" required>
            <label for="number"><i class="fa fa-users"></i>NO. Of People</label>
          </div>
          <div class="input-group">
            <input type="date" name="date" required>
            <label for="date"></label>
          </div>
        </div>
        <div class="input-group">
          <input type="email" id="email" required>
          <label for="email"><i class="fa fa-envelope"></i>Email Id</label>
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
      </div>
    </form>
  </div>
</section>


<!-- -----------------about us--------- -->

<section class="about-us">
  <div class="container " data-aos="zoom-in-up" data-aos-duration="1000">
    <div class="content-section">
    <div class="heading">
        <a href="/aboutus" style="color:white;"><h1>About Us</h1></a>
      </div>



      <div class="content">
      
        <h4>Opening Hours: 9PM-3AM</h4>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
          Nisi, atque sequi totam voluptas veritatis expedita dolorum praesentium ratione,
          accusamus id ad fugit, deserunt accusantium incidunt nam delectus labore qui perferendis!</p>
       
        <a href="{{url('/reservation')}}"><button>Reservation</button></a>
      </div>
      <div class="image-section">
        <img src="{{asset('images/logo.png')}}" style="height:70%; width:70%" alt="">
        <div class="address">
          <h1> Pokhara Club</h1>  
          <h4>LakeSide</h4>
          <p>Pokhara, Nepal</p>
        </div>
      </div>

    </div>


  </div>
  <div class="social content">
    <a href="#" style="color:white"><i class="fa-solid fa-phone"> +9779876543218</i></a>
    <a href="#" style="color:white"><i class="fa-brands fa-facebook-f"> Facebook</i></a>
    <a href="#" style="color:white"><i class="fa-brands fa-instagram"> Instagram</i></a>
    <a href="#" style="color:white"><i class="fa-brands fa-twitter"> Twitter </i></a>
  </div>


</section>


<iframe
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7029.990810664071!2d83.98180702529555!3d28.237819136874638!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3995945d57d28ba5%3A0xdd52869218279546!2sShree%20Bindhyabasini%20Temple!5e0!3m2!1sen!2snp!4v1653900842774!5m2!1sen!2snp"
    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
    referrerpolicy="no-referrer-when-downgrade"></iframe>
@endsection()