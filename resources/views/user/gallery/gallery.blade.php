@extends('global.user')
@section('title','Gallery')
@section('content')
      <!-- ========== PAGE TITLE ========== -->
      <div class="page-title gradient-overlay op6" style="background: url(images/breadcrumb.jpg); background-repeat: no-repeat;
  background-size: cover;">
        <div class="container">
          <div class="inner">
            <h1>GALLERY</h1>
            <ol class="breadcrumb">
              <li>
                <a href="{{ url('home') }}">Home</a>
              </li>
              <li>Gallery</li>
            </ol>
          </div>
        </div>
      </div>
      <!-- ========== MAIN ========== -->
      <main class="gallery-page">
        <!-- FILTERS -->
        <div class="container">
          <div class="gallery-filters">
            <a href="#" onclick="filterr('all')" class="filter active">ALL</a>
            <a href="#" class="filter" onclick="filterr('restaurant')">RESTAURANT</a>
            <a href="#" onclick="filterr('swimmingpool')" class="filter">SWIMMING POOL</a>
            <a href="#" onclick="filterr('spa')" class="filter">SPA</a>
            <a href="#" onclick="filterr('roomview')" class="filter">ROOM VIEW</a>
          </div>
        </div>
        <!-- GALLERY -->
        <div class="container">
          <div class="image-gallery row">
            @foreach ($gallerys as $g)
            <!-- ITEM -->
            <?php
            $cf = "";
            switch ($g->category) {
                case 'swimming pool':
                    $cf = 'swimmingpool';
                    break;
                case 'room view':
                    $cf = 'roomview';
                    break;
                default:
                    $cf = $g->category;
                    break;
            }
            ?>
            <div class="gallery-item f-{{ $cf }} col-md-3" >
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
      </main>
<script>
function filterr(f) {
    if (f == 'swimmingpool') {
        $('.f-roomview').css('display','none');
        $('.f-restaurant').css('display','none');
        $('.f-spa').css('display','none');
        $('.f-swimmingpool').css('display','block');
    }else if (f == 'roomview') {
        $('.f-swimmingpool').css('display','none');
        $('.f-restaurant').css('display','none');
        $('.f-spa').css('display','none');
        $('.f-roomview').css('display','block');
    }else if (f == 'restaurant') {
        $('.f-swimmingpool').css('display','none');
        $('.f-roomview').css('display','none');
        $('.f-spa').css('display','none');
        $('.f-restaurant').css('display','block');
    }else if (f=='spa') {
        $('.f-swimmingpool').css('display','none');
        $('.f-roomview').css('display','none');
        $('.f-restaurant').css('display','none');
        $('.f-spa').css('display','block');
    }else{
        $('.f-restaurant').css('display','block');
        $('.f-swimmingpool').css('display','block');
        $('.f-roomview').css('display','block');
        $('.f-spa').css('display','block');
    }
}
</script>
@endsection

