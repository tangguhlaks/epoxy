<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin - @yield('title') </title>
    <!-- HTML5 Shim and Respond.js IE9 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="'https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="'https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
      <!-- Meta -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="description" content="CodedThemes">
      <meta name="keywords" content=" Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
      <meta name="author" content="CodedThemes">
      <!-- Favicon icon -->
      <link rel="icon" href="default/asset/img/logo.png" type="image/icon type">
      <!-- Google font-->
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
      <!-- Required Fremwork -->
      <link rel="stylesheet" type="text/css" href="{{ url('admin/css/bootstrap/css/bootstrap.min.css')}}">
      <!-- themify-icons line icon -->
      <link rel="stylesheet" type="text/css" href="{{ url('admin/icon/themify-icons/themify-icons.css')}}">
      <!-- ico font -->
      <link rel="stylesheet" type="text/css" href="{{ url('admin/icon/icofont/css/icofont.css')}}">
      <!-- Style.css -->
      <link rel="stylesheet" type="text/css" href="{{ url('admin/css/style.css')}}">
      <link rel="stylesheet" type="text/css" href="{{ url('admin/css/jquery.mCustomScrollbar.css')}}">

      {{-- datatable --}}
      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
  </head>

  <body>
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="ball-scale">
            <div class='contain'>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">

                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            @include('global.navbar')
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    @include('global.navbar2')
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">
                                    @yield('content')

                                    <div id="styleSelector">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<!-- Warning Section Ends -->
<!-- Required Jquery -->
<script type="text/javascript" src="{{ url('admin/js/jquery/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{ url('admin/js/jquery-ui/jquery-ui.min.js')}}"></script>
<script type="text/javascript" src="{{ url('admin/js/popper.js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{ url('admin/js/bootstrap/js/bootstrap.min.js')}}"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="{{ url('admin/js/jquery-slimscroll/jquery.slimscroll.js')}}"></script>
<!-- modernizr js -->
<script type="text/javascript" src="{{ url('admin/js/modernizr/modernizr.js')}}"></script>
<!-- am chart -->
<script src="{{ url('admin/pages/widget/amchart/amcharts.min.js')}}"></script>
<script src="{{ url('admin/pages/widget/amchart/serial.min.js')}}"></script>
<!-- Todo js -->
<script type="text/javascript " src="{{ url('admin/pages/todo/todo.js')}}"></script>
<!-- Custom js -->
<script type="text/javascript" src="{{ url('admin/pages/dashboard/custom-dashboard.js')}}"></script>
<script type="text/javascript" src="{{ url('admin/js/script.js')}}"></script>
<script type="text/javascript " src="{{ url('admin/js/SmoothScroll.js')}}"></script>
<script src="{{ url('admin/js/pcoded.min.js')}}"></script>
<script src="{{ url('admin/js/demo-12.js')}}"></script>
<script src="{{ url('admin/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>

{{-- datatable --}}
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>



{{-- chart js --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js" integrity="sha512-QSkVNOCYLtj73J4hbmVoOV6KVZuMluZlioC+trLpewV8qMjsWqlIQvkn1KGX2StWvPMdWGBqim1xlC8krl1EKQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
var $window = $(window);
var nav = $('.fixed-button');
    $window.scroll(function(){
        if ($window.scrollTop() >= 200) {
         nav.addClass('active');
     }
     else {
         nav.removeClass('active');
     }
 });
</script>
<script>
    $(document).ready( function () {
    $('.table').DataTable();
} );
</script>
@yield('js')
</body>

</html>
