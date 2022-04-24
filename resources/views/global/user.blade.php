<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ url('default/style.css') }}">

    <!-- owl carousel -->
    <link rel="stylesheet" href="{{ url('owlcarousel/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ url('owlcarousel/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{ url('owlcarousel/css/owl.theme.default.css')}}">

    <title>Kya Epoxy Prima</title>
    <link rel="icon" href="default/asset/img/logo.png" type="image/icon type">
  </head>
  <body>
    @include('global.navbar-user')
    @yield('content')

  <div class="row footer col-md-12 bg-dark">
  <div class="col-md-4">
      <a href="me-5">Aplikator Cat Epoxy Lantai</a>
  </div>
  <div class="col-md-4">
      <img src="default/asset/img/logo.png" class="me-2" width="30" alt="">
      <a href="">Kya Epoxy Prima</a>
  </div>
  <div class="col-md-4">
      <a target="_blank" href="{{ $facebook }}"><i class="lab la-facebook la-2x"></i></a>
      <a target="_blank" href="{{ $linkedin }}"><i class="lab la-linkedin la-2x"></i></a>
      <a target="_blank" href="{{ $instagram }}"><i class="lab la-instagram la-2x"></i></a>
  </div>
  </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

    <!-- owl carousel -->
    <script src="{{ url('owlcarousel/js/owl.carousel.min.js') }}"></script>
    <script src="{{ url('owlcarousel/js/owl.carousel.js') }}"></script>
    <script>
        $(function() {
            myowl();
            console.log('aaaa','asokaoskoas')

        })
        function myowl(){
                $('.owl-carousel').owlCarousel({
                    loop:true,
                    margin:10,
                    responsiveClass:true,
                    responsive:{
                        0:{
                            items:1,
                            nav:true
                        },
                        1000:{
                            items:5,
                            nav:true,
                            loop:false
                        }
                    }
                })
            }
        </script>

  </body>
</html>
