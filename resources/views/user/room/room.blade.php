@extends('global.user')
@section('title','Room')
@section('content')
      <!-- ========== PAGE TITLE ========== -->
      <div class="page-title gradient-overlay op6" style="background: url(images/breadcrumb.jpg); background-repeat: no-repeat;
      background-size: cover;">
        <div class="container">
          <div class="inner">
            <h1>ROOMS</h1>
            <ol class="breadcrumb">
              <li>
                <a href="{{ url('/') }}">Home</a>
              </li>
              <li>Rooms</li>
            </ol>
          </div>
        </div>
      </div>
      <!-- ========== MAIN ========== -->
      <main class="rooms-grid-view">
        <div class="container">
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
      </main>
@endsection

