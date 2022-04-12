<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
    <!-- ========== SEO ========== -->
    <title>Hotel Nata - @yield('title')</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <meta content="" name="author">
    <!-- ========== FAVICON ========== -->
    <link rel="apple-touch-icon-precomposed" href="{{url('images/favicon-apple.png')}}"/>
    <link rel="icon" href="{{url('images/favicon.png')}}">
    <!-- ========== STYLESHEETS ========== -->
    <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('css/bootstrap-select.min.css')}}">
    <link rel="stylesheet" href="{{url('css/jquery.mmenu.css')}}">
    <link rel="stylesheet" href="{{url('revolution/css/layers.css')}}">
    <link rel="stylesheet" href="{{url('revolution/css/settings.css')}}">
    <link rel="stylesheet" href="{{url('revolution/css/navigation.css')}}">
    <link rel="stylesheet" href="{{url('css/animate.min.css')}}">
    <link rel="stylesheet" href="{{url('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{url('css/daterangepicker.css')}}">
    <link rel="stylesheet" href="{{url('css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{url('css/style.css')}}">
    <link rel="stylesheet" href="{{url('css/responsive.css')}}">
    <!-- ========== ICON FONTS ========== -->
    <link href="{{url('fonts/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{url('fonts/flaticon.css')}}" rel="stylesheet">
    <!-- ========== GOOGLE FONTS ========== -->
    <link href="https://fonts.googleapis.com/css?family=Oswald:400,500,600,700%7CRoboto:100,300,400,400i,500,700" rel="stylesheet">
  </head>
  <body>
    <!-- ========== MOBILE MENU ========== -->
    <nav id="mobile-menu"></nav>
    <!-- ========== WRAPPER ========== -->
    <div class="wrapper">
      <!-- ========== TOP MENU ========== -->

      @yield('content')
    </div>


    <!--Logout Modal -->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="logoutModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="logoutModalLabel">Logout</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            are you sure you want to logout from Hotel Nata ?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" style="background:grey" data-dismiss="modal">Close</button>
          <form id="logout" action="{{ url('logout') }}" method="post">
            @csrf
          <button type="submit" class="btn btn-default">Logout</button>
          </form>
        </div>
      </div>
    </div>
  </div>

      <!--register Modal -->
<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="logoutModalLabel">Register</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form id="logout" action="{{ url('register-user') }}" method="post">
            @csrf
        <div class="modal-body">
            <div class="form-group">
                <input type="text" name="name" placeholder="Name" id="name" class="form-control">
                <small class="text-danger">@error('name'){{$message}}@enderror</small>
            </div>
            <div class="form-group">
                <input type="email" name="email" placeholder="Email" id="email" class="form-control">
                <small class="text-danger">@error('email'){{$message}}@enderror</small>
            </div>
            <div class="form-group">
                <input type="password" name="password" placeholder="Password" id="password" class="form-control">
                <small class="text-danger">@error('password'){{$message}}@enderror</small>
            </div>
            <div class="form-group">
                <input type="password" name="password_confirmation" placeholder="Confirm Password" id="password_confirmation" class="form-control">
                <small class="text-danger">@error('password_confirmation'){{$message}}@enderror</small>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" style="background:grey" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-default">Register</button>
          </form>
        </div>
      </div>
    </div>
  </div>

<!--login Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="logoutModalLabel">Login</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form id="logout" action="{{ url('auth') }}" method="post">
            @csrf
        <div class="modal-body">
            <div class="form-group">
                <input type="email" name="email" placeholder="Email" id="email" class="form-control">
                <small class="text-danger">@error('email'){{$message}}@enderror</small>
            </div>
            <div class="form-group">
                <input type="password" name="password" placeholder="Password" id="password" class="form-control">
                <small class="text-danger">@error('password'){{$message}}@enderror</small>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" style="background:grey" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-default">Login</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <script>
    window.addEventListener("load", window.print());
    window.onafterprint = back;

    function back() {
        window.history.back();
    }
</script>

    <!-- ========== CONTACT NOTIFICATION ========== -->
    <div id="contact-notification" class="notification fixed"></div>
    <!-- ========== BACK TO TOP ========== -->
    <div class="back-to-top">
      <i class="fa fa-angle-up" aria-hidden="true"></i>
    </div>
    <!-- ========== JAVASCRIPT ========== -->
    <script src="{{ url('js/jquery.min.js')}}"></script>
    <script src="http://maps.google.com/maps/api/js?key=YOUR_API_KEY"></script>
    <script src="{{ url('js/bootstrap.min.js')}}"></script>
    <script src="{{ url('js/bootstrap-select.min.js')}}"></script>
    <script src="{{ url('js/jquery.mmenu.js')}}"></script>
    <script src="{{ url('js/jquery.inview.min.js')}}"></script>
    <script src="{{ url('js/jquery.countdown.min.js')}}"></script>
    <script src="{{ url('js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{ url('js/owl.carousel.min.js')}}"></script>
    <script src="{{ url('js/owl.carousel.thumbs.min.js')}}"></script>
    <script src="{{ url('js/isotope.pkgd.min.js')}}"></script>
    <script src="{{ url('js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{ url('js/masonry.pkgd.min.js')}}"></script>
    <script src="{{ url('js/wow.min.js')}}"></script>
    <script src="{{ url('js/countup.min.js')}}"></script>
    <script src="{{ url('js/moment.min.js')}}"></script>
    <script src="{{ url('js/daterangepicker.js')}}"></script>
    <script src="{{ url('js/parallax.min.js')}}"></script>
    <script src="{{ url('js/smoothscroll.min.js')}}"></script>
    <script src="{{ url('js/instafeed.min.js')}}"></script>
    <script src="{{ url('js/main.js')}}"></script>
    <!-- ========== REVOLUTION SLIDER ========== -->
    <script src="{{ url('revolution/js/jquery.themepunch.tools.min.js')}}"></script>
    <script src="{{ url('revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
    <script src="{{ url('revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
    <script src="{{ url('revolution/js/extensions/revolution.extension.carousel.min.js')}}"></script>
    <script src="{{ url('revolution/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
    <script src="{{ url('revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
    <script src="{{ url('revolution/js/extensions/revolution.extension.migration.min.js')}}"></script>
    <script src="{{ url('revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
    <script src="{{ url('revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>
    <script src="{{ url('revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
    <script src="{{ url('revolution/js/extensions/revolution.extension.video.min.js')}}"></script>
  </body>
</html>
