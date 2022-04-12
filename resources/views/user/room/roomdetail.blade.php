@extends('global.user')
@section('title','Room')
@section('content')
      <!-- ========== PAGE TITLE ========== -->
      <div class="page-title gradient-overlay op5" style="background: url(images/breadcrumb.jpg); background-repeat: no-repeat;
    background-size: cover;">
        <div class="container">
          <div class="inner">
            <h1>{{ $room->title }}</h1>
            <div class="room-details-price">
                Rp.{{ number_format($room->price,0, ".", ".") }}  / NIGHT
            </div>
            <ol class="breadcrumb">
              <li>
                <a href="{{ url('/') }}">Home</a>
              </li>
              <li>
                <a href="{{ url('/room') }}">Rooms</a>
              </li>
              <li>{{ $room->title }}</li>
            </ol>
          </div>
        </div>
      </div>
      <?php
      $s = explode(';',$room->service);
      $image =  DB::table('room_images')->where('id_room',$room->id)->get(); ?>
      <!-- ========== MAIN ========== -->
      <main class="room">
        <div class="container">
          <div class="row">
            <div class="col-lg-9 col-12">
              <!-- ROOM SLIDER -->
              <div class="room-slider">
                <div id="room-main-image" class="owl-carousel image-gallery">
                  <!-- ITEM -->
                  @foreach ($image as $i)
                  <div class="item">
                    <figure class="gradient-overlay-hover image-icon">
                      <a href="{{ url('images/rooms/'.$i->image) }}">
                        <img class="img-fluid" src="{{ url('images/rooms/'.$i->image) }}" alt="Image">
                      </a>
                    </figure>
                  </div>
                  @endforeach
                </div>
                <div id="room-thumbs" class="room-thumbs owl-carousel">
                  <!-- ITEM -->
                  @foreach ($image as $i)
                  <div class="item"><img class="img-fluid" src="{{ url('images/rooms/'.$i->image) }}" alt="Image"></div>
                  @endforeach
                </div>
              </div>
              <p class="dropcap">
                  {{ $room->description }}
              </p>
              <p>
                  {{ $room->description2 }}
              </p>
              <div class="section-title sm">
                <h4>ROOM SERVICES</h4>
                <p class="section-subtitle">{{ $room->title }} Includes</p>
              </div>
              <div class="room-services-list">
                <div class="row">
                  <div class="col-sm-4">
                    <ul class="list-unstyled">
                      <li class="{{ in_array("DOUBLE BED",$s) ? '' : 'no'}}">
                        <i class="fa {{ in_array("DOUBLE BED",$s) ? 'fa-check' : 'fa-times'}}"></i>Double Bed</li>
                      <li class="{{ in_array("BATHROOM",$s) ? '' : 'no'}}">
                        <i class="fa {{ in_array("BATHROOM",$s) ? 'fa-check' : 'fa-times'}}"></i>Bathroom</li>
                      <li class="{{ in_array("3 PERSONS",$s) ? '' : 'no'}}">
                        <i class="fa {{ in_array("3 PERSONS",$s) ? 'fa-check' : 'fa-times'}}"></i>3 Persons</li>
                      <li class="{{ in_array("FREE INTERNET",$s) ? '' : 'no'}}">
                        <i class="fa {{ in_array("FREE INTERNET",$s) ? 'fa-check' : 'fa-times'}}"></i>Free Internet</li>
                    </ul>
                  </div>
                  <div class="col-sm-4">
                    <ul class="list-unstyled">
                      <li class="{{ in_array("FREE WI-FI",$s) ? '' : 'no'}}">
                        <i class="fa {{ in_array("FREE WI-FI",$s) ? 'fa-check' : 'fa-times'}}"></i>Free Wi-Fi</li>
                      <li class="{{ in_array("BREAKFAST INCLUDE",$s) ? '' : 'no'}}">
                        <i class="fa {{ in_array("BREAKFAST INCLUDE",$s) ? 'fa-check' : 'fa-times'}}"></i>Breakfast Include</li>
                      <li class="{{ in_array("PRIVATE BALCONY",$s) ? '' : 'no'}}">
                        <i class="fa {{ in_array("PRIVATE BALCONY",$s) ? 'fa-check' : 'fa-times'}}"></i>Private Balcony</li>
                      <li class="{{ in_array("FREE NEWSPAPER",$s) ? '' : 'no'}}">
                        <i class="fa {{ in_array("FREE NEWSPAPER",$s) ? 'fa-check' : 'fa-times'}}"></i>Free Newspaper</li>
                    </ul>
                  </div>
                  <div class="col-sm-4">
                    <ul class="list-unstyled">
                      <li class="{{ in_array("FLAT SCREEN TV",$s) ? '' : 'no'}}">
                        <i class="fa {{ in_array("FLAT SCREEN TV",$s) ? 'fa-check' : 'fa-times'}}"></i>Flat Screen Tv</li>
                      <li class="{{ in_array("FULL AC",$s) ? '' : 'no'}}">
                        <i class="fa {{ in_array("FULL AC",$s) ? 'fa-check' : 'fa-times'}}"></i>Full Ac</li>
                      <li class="{{ in_array("BEACH VIEW",$s) ? '' : 'no'}}">
                        <i class="fa {{ in_array("BEACH VIEW",$s) ? 'fa-check' : 'fa-times'}}"></i>Beach View</li>
                      <li class="{{ in_array("ROOM SERVICE",$s) ? '' : 'no'}}">
                        <i class="fa {{ in_array("ROOM SERVICE",$s) ? 'fa-check' : 'fa-times'}}"></i>Room Service</li>
                    </ul>
                  </div>
                </div>
              </div>
              <!-- ROOM REVIEWS -->
              <?php
              $rating = DB::table('ratings')->where('id_room',$room->id)->get();
              $s1 = DB::table('ratings')->where('id_room',$room->id)->where('stars',1)->count();
              $s2 = DB::table('ratings')->where('id_room',$room->id)->where('stars',2)->count();
              $s3 = DB::table('ratings')->where('id_room',$room->id)->where('stars',3)->count();
              $s4 = DB::table('ratings')->where('id_room',$room->id)->where('stars',4)->count();
              $s5 = DB::table('ratings')->where('id_room',$room->id)->where('stars',5)->count();
              $st =DB::table('ratings')->where('id_room',$room->id)->count();
              if ($st > 0) {
                $avg = ($s1*1+$s2*2+$s3*3+$s4*4+$s5*5)/5*5/$st;;
                $s1 = round($s1 /$st*100);
                $s2 = round($s2 /$st*100);
                $s3 = round($s3 /$st*100);
                $s4 = round($s4 /$st*100);
                $s5 = round($s5 /$st*100);
              }else {
                $avg =0;
                $s1 = 0;
                $s2 = 0;
                $s3 = 0;
                $s4 = 0;
                $s5 = 0;
              }
              ?>
              <div id="room-reviews" class="room-reviews">
                <div class="section-title sm">
                  <h4>ROOM REVIEWS</h4>
                  <p class="section-subtitle">What our guests are saying about us</p>
                </div>
                <div class="rating-details">
                  <div class="row">
                    <div class="col-lg-3">
                      <div class="review-summary">
                        <div class="average">{{ $avg }}</div>
                        <div class="rating">
                          <i class="fa fa-star voted" aria-hidden="true"></i>
                          <i class="fa fa-star voted" aria-hidden="true"></i>
                          <i class="fa fa-star voted" aria-hidden="true"></i>
                          <i class="fa fa-star voted" aria-hidden="true"></i>
                          <i class="fa fa-star" aria-hidden="true"></i>
                        </div>
                        <small>Based on {{ $st }} ratings</small>
                      </div>
                    </div>
                    <div class="col-lg-9">
                      <!-- ITEM -->
                      <div class="progress-item">
                        <div class="row">
                          <div class="col-lg-2 col-sm-2 col-3">
                            <div class="progress-stars">5 star</div>
                          </div>
                          <div class="col-lg-9 col-sm-9 col-8">
                            <div class="progress">
                              <div class="progress-bar" role="progressbar" style="width: {{ $s5 }}%" aria-valuenow="{{ $s5 }}" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                          <div class="col-lg-1 col-sm-1 col-1">
                            <div class="progress-value">{{ $s5 }}%</div>
                          </div>
                        </div>
                      </div>
                      <!-- ITEM -->
                      <div class="progress-item">
                        <div class="row">
                          <div class="col-lg-2 col-sm-2 col-3">
                            <div class="progress-stars">4 star</div>
                          </div>
                          <div class="col-lg-9 col-sm-9 col-8">
                            <div class="progress">
                              <div class="progress-bar" role="progressbar" style="width: {{ $s4 }}%" aria-valuenow="{{ $s4 }}" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                          <div class="col-lg-1 col-sm-1 col-1">
                            <div class="progress-value">{{ $s4 }}%</div>
                          </div>
                        </div>
                      </div>
                      <!-- ITEM -->
                      <div class="progress-item">
                        <div class="row">
                          <div class="col-lg-2 col-sm-2 col-3">
                            <div class="progress-stars">3 star</div>
                          </div>
                          <div class="col-lg-9 col-sm-2 col-8">
                            <div class="progress">
                              <div class="progress-bar" role="progressbar" style="width: {{ $s3 }}%" aria-valuenow="{{ $s3 }}" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                          <div class="col-lg-1 col-sm-1 col-1">
                            <div class="progress-value">{{ $s3 }}%</div>
                          </div>
                        </div>
                      </div>
                      <!-- ITEM -->
                      <div class="progress-item">
                        <div class="row">
                          <div class="col-lg-2 col-sm-2 col-3">
                            <div class="progress-stars">2 star</div>
                          </div>
                          <div class="col-lg-9 col-sm-9 col-8">
                            <div class="progress">
                              <div class="progress-bar" role="progressbar" style="width: {{ $s2 }}%" aria-valuenow="{{ $s2 }}" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                          <div class="col-lg-1 col-sm-1 col-1">
                            <div class="progress-value">{{ $s2 }}%</div>
                          </div>
                        </div>
                      </div>
                      <!-- ITEM -->
                      <div class="progress-item">
                        <div class="row">
                          <div class="col-lg-2 col-sm-2 col-3">
                            <div class="progress-stars">1 star</div>
                          </div>
                          <div class="col-lg-9 col-sm-9 col-8">
                            <div class="progress">
                              <div class="progress-bar" role="progressbar" style="width: {{ $s1 }}%" aria-valuenow="{{ $s1 }}" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                          <div class="col-lg-1 col-sm-1 col-1">
                            <div class="progress-value">{{ $s1 }}%</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                @foreach ($rating as $item)
                <div class="review-box">
                  <div class="review-contentt">
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
                    <div class="review-info">
                      {{ $item->name }} – {{ date('F d,Y',strtotime($item->created_at)) }}
                    </div>
                    <div class="review-text">
                      <p>
                      {{ $item->text }}
                      </p>
                    </div>
                  </div>
                </div>
                @endforeach
              </div>
            </div>
            <!-- SIDEBAR -->
            <div class="col-lg-3 col-12">
              <div class="sidebar">
                <!-- WIDGET -->
                <aside class="widget noborder">
                  <div class="vertical-booking-form">
                    <div id="booking-notification" class="notification"></div>
                    <h3 class="form-title">BOOK YOUR ROOM</h3>
                    <div class="inner">
                        <form action="{{ url('book-step1') }}" method="POST">
                            @csrf
                        <div class="form-group">
                            <input class="form-control" type="text"  @auth readonly value="{{ auth()->user()->name }}" @endauth name="name" placeholder="Your Name">
                          </div>
                        <!-- EMAIL -->
                        <div class="form-group">
                          <input class="form-control" @auth readonly value="{{ auth()->user()->email }}" @endauth type="email" name="email" placeholder="Your Email Address">
                        </div>
                        <!-- ROOM TYPE -->
                        <div class="form-group">
                            <input type="text" class="form-control" name="typerooms" id="typerooms" value="{{ strtoupper($room->title) }}" readonly>
                            <input type="hidden" class="form-control" name="roomtype" id="typeroom" value="{{ strtoupper($room->id) }}" >
                        </div>
                        <!-- DATE -->
                        <div class="form-group">
                          <div class="form_date">
                            <input type="text" class="datepicker form-control" name="booking_date" placeholder="Slect Arrival & Departure Date" readonly="readonly">
                          </div>
                        </div>
                        <!-- GUESTS -->
                        <div class="form-group">
                          <div class="panel-dropdown">
                            <div class="form-control guestspicker">Guests
                              <span class="gueststotal"></span></div>
                            <div class="panel-dropdown-content">
                              <div class="guests-buttons">
                                <label>Adults
                                  <a href="#" title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="18+ years" data-original-title="Adults">
                                    <i class="fa fa-info-circle"></i>
                                  </a>
                                </label>
                                <div class="guests-button">
                                  <div class="minus"></div>
                                  <input type="text" name="booking_adults" class="booking-guests" value="0">
                                  <div class="plus"></div>
                                </div>
                              </div>
                              <div class="guests-buttons">
                                <label>Cildren
                                  <a href="#" title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Under 18 years" data-original-title="Children">
                                    <i class="fa fa-info-circle"></i>
                                  </a>
                                </label>
                                <div class="guests-button">
                                  <div class="minus"></div>
                                  <input type="text" name="booking_children" class="booking-guests" value="0">
                                  <div class="plus"></div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- BOOKING BUTTON -->
                        <button type="submit" class="btn btn-dark btn-fw mt20 mb20">BOOK A ROOM</button>
                      </form>
                    </div>
                  </div>
                </aside>
              </div>
            </div>
          </div>
        </div>
      </main>
@endsection

