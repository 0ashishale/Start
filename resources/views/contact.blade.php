@extends('layouts.master')
@section('event')

<section>
  <div class="reservation ">
   
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
      <div class="input-group">
        <input type="email" id="email" required>
        <label for="email"><i class="fa fa-envelope"></i>Email Id</label>
      </div>

      <div class="input-group">
        <textarea id="message" rows="8" required></textarea>
        <label for="message"><i class="fa fa-comments-o"></i>Your Message</label>
      </div>
      <div>
        <button type="submit">Send<i class="fa fa-paper-plane"></i></button>
      </div>

    </form>

</section>
@endsection()