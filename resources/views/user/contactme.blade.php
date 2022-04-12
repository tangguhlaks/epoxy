@extends('global.user')
@section('title','Contact Us')
@section('content')
      <!-- ========== PAGE TITLE ========== -->
      <div class="page-title gradient-overlay op6" style="background: url(images/breadcrumb.jpg); background-repeat: no-repeat;
    background-size: cover;">
        <div class="container">
          <div class="inner">
            <h1>CONTACT</h1>
            <ol class="breadcrumb">
              <li>
                <a href="{{ url('/') }}">Home</a>
              </li>
              <li>Contact</li>
            </ol>
          </div>
        </div>
      </div>
      <!-- ========== MAIN ========== -->
      <main class="contact-page">
        <div class="container">
          <div class="row">
            <div class="col-md-8">
              <div class="section-title">
                <h4>CONTACT US</h4>
                <p class="section-subtitle">Let’s Talk</p>
              </div>
              <!-- CONTACT FORM -->
              <form method="POST" action="{{ url('contact-me') }}">
                @csrf
              <div class="form-group">
                <input class="form-control" name="name" placeholder="Your Name" type="text">
              </div>
              <div class="form-group">
                <input class="form-control" name="email" type="email" placeholder="Your Email Address">
              </div>
              <div class="form-group">
                <textarea class="form-control" name="text" name="text" placeholder="Your Message"></textarea>
              </div>
              <button class="btn" type="submit">
                <i class="fa fa-location-arrow"></i>Send Message</button>
            </form>
            </div>
          </div>
        </div>
      </main>
@endsection
