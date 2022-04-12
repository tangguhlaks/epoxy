      <!-- ========== REVOLUTION SLIDER ========== -->
      <div class="slider">
        <div id="rev-slider-1" class="rev_slider gradient-slider" style="display:none" data-version="5.4.5">
          <ul>
            <?php $c = 0; ?>
            @foreach ($sliders as $s)
            <!-- SLIDE NR. 1 -->
            <li data-transition="crossfade">
              <!-- MAIN IMAGE -->
              <img src="images/slider/{{ $s->image }}" alt="Image" title="Image" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina="">
              <!-- LAYER NR. 1 -->
              <h1
                class="tp-caption tp-resizeme"
                data-x="center"
                data-hoffset=""
                data-y="320"
                data-voffset=""
                data-responsive_offset="on"
                data-fontsize="['80','50','40','30']"
                data-lineheight="['60','50','40','30']"
                data-whitespace="nowrap"
                data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                style="z-index: 5; color: #fff; font-weight: 900;">
                {{ $s->text }}</h1>
              <!-- LAYER NR. 2 -->
              <div
                class="tp-caption tp-resizeme"
                data-x="center"
                data-hoffset=""
                data-y="410"
                data-voffset=""
                data-responsive_offset="on"
                data-fontsize="16"
                data-lineheight="16"
                data-whitespace="nowrap"
                data-frames='[{"delay":1500,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                style="z-index: 6; color: #fff;">{{ $s->text2 }}</div>
              <!-- LAYER NR. 5 -->
              @if ($c == 0)
              <div
                class="tp-caption tp_m_title tp-resizeme"
                data-x="center"
                data-hoffset=""
                data-y="200"
                data-voffset=""
                data-responsive_offset="on"
                data-fontsize="['18','18','16','16']"
                data-lineheight="['18','18','16','16']"
                data-whitespace="nowrap"
                data-frames='[{"delay":1800,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                style="color: #fff">
                <i class="fa fa-star-o"></i>
                <i class="fa fa-star-o"></i>
                <i class="fa fa-star-o"></i>
                <i class="fa fa-star-o"></i>
                <i class="fa fa-star-o"></i>
              </div>
              <!-- LAYER NR. 6 -->
              <div
                class="tp-caption tp_m_title tp-resizeme"
                data-x="center"
                data-hoffset=""
                data-y="240"
                data-voffset=""
                data-responsive_offset="on"
                data-fontsize="['25','25','18','18']"
                data-lineheight="['25','25','18','18']"
                data-whitespace="nowrap"
                data-frames='[{"delay":1800,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                style="color: #fff">
                Star Luxury Hotel
              </div>
              @endif
              <?php $c++ ?>
            </li>
            @endforeach
          </ul>
        </div>
        <!-- ========== BOOKING FORM ========== -->
        <div class="horizontal-booking-form">
          <div class="container">
            <div class="inner box-shadow-007">
              <!-- ========== BOOKING NOTIFICATION ========== -->
              <div id="booking-notification" class="notification"></div>
              <form action="{{ url('book-step1') }}" method="POST">
                @csrf
                <!-- NAME -->
                <div class="row">
                  <div class="col-md-2">
                    <div class="form-group">
                      <label>Name
                        <a href="#" title="Your Name" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Please type your first name and last name">
                          <i class="fa fa-info-circle"></i>
                        </a>
                      </label>
                      <input class="form-control" @auth readonly  value="{{ auth()->user()->name }}" @endauth name="name" type="text" data-trigger="hover" placeholder="Write Your Name">
                    </div>
                  </div>
                  <!-- EMAIL -->
                  <div class="col-md-2">
                    <div class="form-group">
                      <label>Email
                        <a href="#" title="Your Email" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Please type your email adress">
                          <i class="fa fa-info-circle"></i>
                        </a>
                      </label>
                      <input class="form-control" @auth  readonly value="{{ auth()->user()->email }}" @endauth name="email" type="email" placeholder="Write your Email">
                    </div>
                  </div>
                  <!-- ROOM TYPE -->
                  <div class="col-md-2">
                    <div class="form-group">
                      <label>Room Type
                        <a href="#" title="Room Type" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Please select room type">
                          <i class="fa fa-info-circle"></i>
                        </a>
                      </label>
                      <?php
                        $roomt = DB::table('rooms')->get();
                      ?>
                      <select class="form-control" name="roomtype" title="Select Room" data-header="Room Type">
                            @foreach ($roomt as $rr)
                            <option data-subtext="<span class='badge badge-info'>Rp.{{ number_format($rr->price,0, ".", ".") }} / night</span>" value="{{ $rr->id }}">{{ $rr->title }}</option>
                            @endforeach
                      </select>
                      <small class="text-danger">@error('roomtype'){{$message}}@enderror</small>
                    </div>
                  </div>
                  <!-- DATE -->
                  <div class="col-md-2">
                    <div class="form-group">
                      <label>Check-In/Out
                        <a href="#" title="Check-In / Check-Out" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Please select check-in and check-out date <br>*Check In from 11:00am">
                          <i class="fa fa-info-circle"></i>
                        </a>
                      </label>
                      <input type="text" class="datepicker form-control" name="booking_date" placeholder="Arrival & Departure" readonly="readonly">
                      <small class="text-danger">@error('bookin_date'){{$message}}@enderror</small>
                    </div>
                  </div>
                  <!-- GUESTS -->
                  <div class="col-md-2">
                    <div class="form-group">
                      <label>Guests
                        <a href="#" title="Guests" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Please Select Adults / Children">
                          <i class="fa fa-info-circle"></i>
                        </a>
                      </label>
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
                              <small class="text-danger">@error('booking_adults'){{$message}}@enderror</small>
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
                  </div>
                  <!-- BOOKING BUTTON -->
                  <div class="col-md-2">
                      @auth
                      <button type="submit" class="btn btn-book">BOOK A ROOM</button>
                      @endauth
                      @guest
                      <a data-toggle="modal" data-target="#loginModal" class="btn btn-book" style="color: white">BOOK A ROOM</a>
                      @endguest
                  </div>
                </div>
              </form>

            </div>
          </div>
        </div>
      </div>
