@extends('global.userprint')
@section('title','Book')
@section('content')
            <!-- ========== MAIN ========== -->
            <main>
              <div class="container">
                <div class="row">
                  <!-- CONTENT -->
                  <div class="col-lg-9 col-12">
                    <div class="section-title">
                      <h4>HOTEL NATA.</h4>
                      <p class="section-subtitle">Your Book Room</p>
                    </div>
                    <!-- BOOKING FORM -->
                    <form action="{{ url('book-step2') }}" method="POST">
                        @csrf
                      <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                              <label>Payment Number</label>
                              <input name="name" readonly value="{{ $mybook->payment_number }}" type="text" class="form-control">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label>Status</label>
                              <input class="form-control" name="email" readonly value="{{$mybook->status}}" type="text" placeholder="Your Email Address">
                            </div>
                          </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Your Name</label>
                            <input name="name" readonly value="{{ $mybook->name }}" type="text" class="form-control" placeholder="Your Name">
                            <input type="hidden"  value="{{ $mybook->id }}" name="myid" class="form-control" placeholder="Your Name">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Email Address</label>
                            <input class="form-control" name="email" readonly value="{{$mybook->email}}" type="email" placeholder="Your Email Address">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Phone Number</label>
                            <input name="phone" type="text" value="{{ $mybook->phone }}" class="form-control" placeholder="Your Phone Number">
                            <small class="text-danger">@error('phone'){{$message}}@enderror</small>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Country</label>
                            <input type="text" name="country" class="form-control" id="country" value="{{ $mybook->country }}">
                            <small class="text-danger">@error('country'){{$message}}@enderror</small>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>CHECK-IN/OUT
                            </label>
                            <input type="text" class="form-control" readonly name="booking_date" value="{{ $mybook->booking_date}}">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Guests
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
                                    <input type="text" name="booking_adults" class="booking-guests" value="{{ $mybook->booking_adults }}">
                                    <div class="plus"></div>
                                    <small class="text-danger">@error('booking_adults'){{$message}}@enderror</small>
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
                                    <input type="text" name="booking_children" class="booking-guests" value="{{ $mybook->booking_children }}">
                                    <div class="plus"></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <?php
                        $room = DB::table('rooms')->where('id',$mybook->id_room)->first();
                        ?>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Room Type</label>
                            <input type="text" name="roomtype" class="form-control" value="{{ strtoupper($room->title)}}" readonly>
                          </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                              <label>Price</label>
                              <input type="text" name="roomtype" class="form-control" value="Rp.{{ number_format($room->price,0, ".", ".") }} / Night" readonly>
                            </div>
                          </div>
                        <div class="col-md-12">
                            <div class="form-group">
                              <label>Total Payment</label>
                              <input type="text" name="roomtype" class="form-control" value="Rp.{{ number_format($mybook->total_payment,0, ".", ".") }}" readonly>
                        </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                              <label>Payment Method</label>
                              <input type="text" name="paymnet_method" value="{{ $mybook->payment_method }}" class="form-control">
                              <small class="text-danger">@error('payment_method'){{$message}}@enderror</small>
                            </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                            <label>Your Comments</label>
                            <textarea class="form-control" name="comment" placeholder="Your Comments...">{{ $mybook->comment }}</textarea>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <button type="submit" class="btn mt50 float-right">
                            Hotel Nata.
                          </button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </main>
@endsection

