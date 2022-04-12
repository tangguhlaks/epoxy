{{-- @extends('global.user')
@section('title','Welcome')
@section('content')
@include('global.slider')
@include('global.about')

<!-- ========== ROOMS ========== -->
<section class="rooms gray">
  <div class="container">
    <div class="section-title">
      <h4>OUR ROOMS</h4>
      <p class="section-subtitle">Our favorite rooms</p>
      <a href="{{ url('room') }}" class="view-all">View all rooms</a>
    </div>
    <div class="row">
        @foreach ($rooms as $r)
        <!-- ITEM -->
        <div class="col-lg-4 col-md-6">
          <div class="room-grid-item">
            <figure class="gradient-overlay-hover link-icon">
                <?php
                    $s = explode(';',$r->service);
                    $i =  DB::table('room_images')->where('id_room',$r->id)->where('selected',1)->first(); ?>
              <a href="{{ url('room-detail/'.$r->id) }}">
                <img src="images/rooms/{{ $i->image }}" class="img-fluid" alt="Image">
              </a>
              <div class="room-services">
                    @if (in_array("BREAKFAST INCLUDE",$s))
                        <i class="fa fa-coffee" aria-hidden="true" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Breakfast Included" data-original-title="Breakfast"></i>
                    @endif
                    @if (in_array("BATHROOM",$s))
                        <i class="fa fa-bath" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="2 Bathrooms" data-original-title="Bathroom"></i>
                    @endif
                    @if (in_array("FREE WI-FI",$s))
                        <i class="fa fa-wifi" aria-hidden="true" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Free WiFi" data-original-title="WiFi"></i>
                    @endif
                    @if (in_array("FLAT SCREEN TV",$s))
                        <i class="fa fa-television" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Plasma TV with cable channels" data-original-title="TV"></i>
                    @endif
              </div>
              <div class="room-price">Rp.{{ number_format($r->price,0, ".", ".") }} / night</div>
            </figure>
            <div class="room-info">
              <h2 class="room-title">
                <a href="{{ url('room-detail/'.$r->id) }}">{{ $r->title }}</a>
              </h2>
              <p>Enjoy our {{ $r->title }}</p>
            </div>
          </div>
        </div>
        @endforeach

      </div>
  </div>
</section>
<!-- ========== SERVICES ========== -->
<section class="services">
  <div class="container">
    <div class="section-title">
      <h4>Nata. SERVICES</h4>
      <p class="section-subtitle">Check out our awesome services</p>
    </div>
    <div class="row">
      <div class="col-lg-7 col-12">
        <div data-slider-id="services" class="services-owl owl-carousel">
        @foreach ($services as $s)
          <figure class="gradient-overlay">
            <img src="{{ url('images/services/'.$s->image) }}" class="img-fluid" alt="Image">
            <figcaption>
              <h4>{{ $s->title }}</h4>
            </figcaption>
          </figure>
          @endforeach
        </div>
      </div>
      <div class="col-lg-5 col-12">

        <div class="owl-thumbs" data-slider-id="services">
        @foreach ($services as $s)
          <div class="owl-thumb-item">
            <span class="media-left">
              <i class="{{ $s->icon }}"></i>
            </span>
            <div class="media-body">
              <h5>{{ $s->title }}</h5>
              <p>{{ $s->text }}</p>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ========== GALLERY ========== -->
<section class="gallery gray">
  <div class="container">
    <div class="section-title">
      <h4>Nata. GALLERY</h4>
      <p class="section-subtitle">Check out our image gallery</p>
      <a href="{{ url('gallery') }}" class="view-all">View gallery images</a>
    </div>
    <div class="gallery-owl owl-carousel image-gallery">
        @foreach ($gallery as $g)
        <!-- ITEM -->
        <div class="gallery-item">
          <figure class="gradient-overlay image-icon">
            <a href="images/gallery/{{ $g->image }}">
              <img src="images/gallery/{{ $g->image }}" class="img-fluid" alt="Image">
            </a>
            <figcaption>{{ $g->title }}</figcaption>
          </figure>
        </div>
        @endforeach
    </div>
  </div>
</section>
<!-- ========== TESTIMONIALS ========== -->
<section class="testimonials">
  <div class="container">
    <div class="section-title">
      <h4>OUR GUESTS LOVE US</h4>
      <p class="section-subtitle">What our guests are saying about us</p>
    </div>
    <div class="owl-carousel testimonials-owl">
      <!-- ITEM -->
      <?php
      $rating = DB::table('ratings')->where('selected',1)->get();
      ?>
      @foreach ($rating as $item)
      <div class="item">
        <div class="testimonial-item">
          <div class="author">
            <h4 class="name">{{ $item->name }}</h4>
          </div>
          <div class="rating">
            @switch($item->stars)
            @case(1)
            <i class="fa fa-star voted" aria-hidden="true"></i>
            <i class="fa fa-star " aria-hidden="true"></i>
            <i class="fa fa-star " aria-hidden="true"></i>
            <i class="fa fa-star " aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
                @break
            @case(2)
            <i class="fa fa-star voted" aria-hidden="true"></i>
            <i class="fa fa-star voted" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
                @break
            @case(3)
            <i class="fa fa-star voted" aria-hidden="true"></i>
            <i class="fa fa-star voted" aria-hidden="true"></i>
            <i class="fa fa-star voted" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
                @break
            @case(4)
            <i class="fa fa-star voted" aria-hidden="true"></i>
            <i class="fa fa-star voted" aria-hidden="true"></i>
            <i class="fa fa-star voted" aria-hidden="true"></i>
            <i class="fa fa-star voted" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
                @break
            @case(5)
            <i class="fa fa-star voted" aria-hidden="true"></i>
            <i class="fa fa-star voted" aria-hidden="true"></i>
            <i class="fa fa-star voted" aria-hidden="true"></i>
            <i class="fa fa-star voted" aria-hidden="true"></i>
            <i class="fa fa-star voted" aria-hidden="true"></i>
                @break
            @default

        @endswitch
          </div>
          <p>{{ $item->text }}</p>
        </div>
      </div>
      @endforeach

    </div>
  </div>
</section>
<!-- ========== CONTACT V2 ========== -->
<section class="contact-v2 gray">
  <div class="container">
    <div class="row">
      <div class="col-md-5">
        <div class="section-title">
          <h4>GET IN TOUCH</h4>
          <p class="section-subtitle">Get in touch</p>
        </div>
        <ul class="contact-details">
          <li>
            <i class="fa fa-map-marker" aria-hidden="true"></i>
            Bandung, Indonesia</li>
          <li>
            <i class="fa fa-phone" aria-hidden="true"></i>
            Phone: +1 888 123 4567
          </li>
          <li>
            <i class="fa fa-fax"></i>
            Fax: +1 888 123 4567</li>
          <li>
            <i class="fa fa-globe"></i>
            Web: www.hotelNata.com</li>
          <li>
            <i class="fa fa-envelope"></i>
            Email:
            <a href="mailto:info@site.com">contact@hotelNata.com</a>
          </li>
        </ul>
      </div>
      <div class="col-md-7">
        <div class="section-title">
          <h4>CONTACT US</h4>
          <p class="section-subtitle">Say hello</p>
        </div>
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
</section>
@endsection --}}

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
    <link rel="stylesheet" href="default/style.css">
    <title>Kya Epoxy Prima</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
      <a class="navbar-brand" href="#">
          <img src="default/asset/img/logo.png" alt="" width="40" height="40" class="d-inline-block me-2">
          Kya Epoxy Prima
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <div class="navbar-nav mx-auto">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
          <a class="nav-link" href="#">Harga</a>
          <a class="nav-link" href="#">Portofolio</a>
          <a class="nav-link" href="#">Kontak</a>
          </div>
          <button class="btn hub btn-outline-info me-2" type="button">Hubungi Kami</button>
      </div>
      </div>
  </nav>

  <div class="row workingspace">
  <div class="col-md-6 marginerror1">
      <img src="default/asset/svg/Epoxy Worker.svg" width="500" class="img-fluid" alt="">
  </div>
  <div class="col-md-6 marginerror2">
      <button class="btn label btn-sm btn-outline-info" type="button">Jasa Epoxy Lantai</button>
      <h1 class="">Aplikator Cat Epoxy Terpercaya</h1>
      <p class="">Dipercaya dalam pekerjaan pengaplikasian cat epoxy untuk lantai rumah dan perusahaan.</p>
      <button class="btn hub btn-outline-info me-2" type="button">Tentang Kami</button>
      <button class="btn hub btn-outline-info" type="button">Cek Harga</button>
  </div>
  </div>

  <div class="container">
  <div class="row mt-4 p-3 infocomp bg-light">
      <div class="col-md-6">
      <h5 class="LPT">Kya Epoxy Prima</h4>
      <h1 class="">Apa Itu Lantai Epoxy ?</h1>
      <p class="">Epoksi merupakan material pelapis lantai yang terbuat dari bahan campuran resin dan bahan pengeras (poliamina) dengan kelebihan sebagai berikut.</p>
      <ul class="">
          <li>Tahan lama dan durabilitas bagus</li>
          <li>Cocok untuk industri</li>
          <li>Anti Air</li>
      </ul>
      </div>
      <div class="col-md-6">
      <img src="default/asset/img/infocomp.png" width="500" class="img-fluid" alt="">
      </div>
  </div>
  </div>

  <div class="row mt-4 p-3 cardgrup">
  <div class="col-md-3">
      <div class="card" style="width: 18rem;">
      <img src="default/asset/img/fast.png" class="card-img-top" alt="Illustrasi Cepat">
      <div class="card-body">
          <h1 class="card-title">Pengerjaan Cepat</h1>
          <h2 class="karyawan"><span style="color: var(--blue);">+30 </span>Karyawan</h2>
          <p class="card-text">Kami siap memberikan pelayanan prima dalam melakukan pengecatan epoxy lantai.</p>
          <a href="#" class="btn btn-primary">Lihat Portofolio</a>
      </div>
      </div>
  </div>
  <div class="col-md-3">
      <div class="card" style="width: 18rem;">
      <img src="default/asset/img/cheap.png" class="card-img-top" alt="Illustrasi Murah">
      <div class="card-body">
          <h1 class="card-title">Harga Juara</h1>
          <h2 class="karyawan"><span style="color: var(--blue);">Rp. 60.000 </span>per Meter</h2>
          <p class="card-text">Kami memberikan kualitas yang terjamin dengan ketebalan 300 Micron</p>
          <a href="#" class="btn btn-primary">Lihat Katalog Harga</a>
      </div>
      </div>
  </div>
  <div class="col-md-3">
      <div class="col-md-6">
      <h1 class="moto">Moto Kami</h1>
      <h2 class="titleside">Kami Memberikan Layanan Terbaik</h2>
      <p class="sidepar">Terjangkau bukan berarti tidak berkualitas, kami memiliki tenaga yang andal, alat yang memadai serta kualitas bahan yang sesuai dengan standar.</p>
      <a href="#" class="btn btn-primary">Lebih Jauh</a>
      </div>
      </div>
  </div>

  <div class="row mt-4 p-3 progrup justify-content-center">
      <div class="col-md-12">
      <a class="company">Perusahaan Kami</a>
      <h2 class="jasa">Jasa yang Kami Tawarkan</h2>
      <p class="rightman">The Right Man on The Right Job</p>
      </div>
      <div class="card rounded-3 border-0" style="width: 18rem;">
      <img src="default/asset/img/paint.png" class="card-img-top mt-3" alt="...">
      <div class="card-body">
          <h5 class="card-title">Epoxy Lantai</h5>
          <p class="card-text">Sudah termasuk Jasa, Peralatan, Man Power, dan Bahan.</p>
      </div>
      </div>
  </div>

  <div class="container">
  <div class="row mt-4 p-3 terhubung">
      <div class="col-md-6">
      <a class="company">Mari Mendekat</a>
      <h2 class="jasa">Mudah Terhubung Dengan Kami</h2>
      <p class="rightman">Untuk detail lebih lanjut anda bisa hubungi kami untuk mendapatkan kalkulasi yang cocok dengan kebutuhan anda.</p>
      <button class="btn hab me-2" type="button"><i class="lab la-whatsapp la-2x me-2"></i>Whatsapp</button>
      <button class="btn hab me-2" type="button"><i class="las la-envelope la-2x me-2"></i>Email</button>
      </div>
      <div class="col-md-6">
      <img src="default/asset/svg/comtac.svg" alt="">
      </div>
  </div>
  </div>

  <div class="row mt-4 p-3 progrup">
  <div class="col-md-12">
      <a class="company">Mari Mendekat</a>
      <h2 class="jasa">Mudah Terhubung Dengan Kami</h2>
  </div>
  <div id="carouselExampleCaptions" class="carousel slide rounded-3" data-bs-ride="carousel">
      <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
      <div class="carousel-item active">
          <img src="default/asset/img/carousel/1.jfif" class="d-block w-100 rounded-3" alt="...">
          <div class="carousel-caption d-none d-md-block">
          <h5>First slide label</h5>
          <p>Some representative placeholder content for the first slide.</p>
          </div>
      </div>
      <div class="carousel-item">
          <img src="default/asset/img/carousel/2.jfif" class="d-block w-100 rounded-3" alt="...">
          <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>Some representative placeholder content for the second slide.</p>
          </div>
      </div>
      <div class="carousel-item">
          <img src="default/asset/img/carousel/3.jfif" class="d-block w-100 rounded-3" alt="...">
          <div class="carousel-caption d-none d-md-block">
          <h5>Third slide label</h5>
          <p>Some representative placeholder content for the third slide.</p>
          </div>
      </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
      </button>
  </div>
  </div>

  <div class="row footer col-md-12 bg-dark">
  <div class="col-md-4">
      <a href="me-5">Aplikator Cat Epoxy Lantai</a>
  </div>
  <div class="col-md-4">
      <img src="default/asset/img/logo.png" class="me-2" width="30" alt="">
      <a href="">Kya Epoxy Prima</a>
  </div>
  <div class="col-md-4">
      <i class="lab la-facebook la-2x"></i>
      <i class="lab la-linkedin la-2x"></i>
  </div>
  </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
