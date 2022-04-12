@extends('global.user')
@section('title','Book')
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
                <li>My Books</li>
              </ol>
            </div>
          </div>
        </div>
        <!-- ========== MAIN ========== -->
        <main class="rooms-list-view">
            <!-- FILTERS -->
        <div class="container">
            <div class="gallery-filters">
                <div class="col-md-12">
                    <a href="#" onclick="filterr('all')" class="filter active">ALL</a>
                    <a href="#" class="filter" onclick="filterr('order')">Order List</a>
                    <a href="#" onclick="filterr('wp')" class="filter">Waiting For Payment</a>
                    <a href="#" onclick="filterr('wv')" class="filter">Waiting For Verification</a>
                    <a href="#" onclick="filterr('pv')" class="filter">Payment Verified</a>
                </div>
                <div class="col-md-12" style="margin-top: 5px">
                    <a href="#" onclick="filterr('cin')" class="filter">Check In</a>
                    <a href="#" onclick="filterr('cout')" class="filter">Check Out</a>
                    <a href="#" onclick="filterr('finish')" class="filter">Finish</a>
                </div>
            </div>
          </div>
          <div class="container">
            @if (session()->has('messagebook'))
            <div class="alert alert-success">
                {{ session('messagebook') }}
            </div>
            @endif
            @if (session()->has('messageerror'))
            <div class="alert alert-danger">
                {{ session('messageerror') }}
            </div>
            @endif
            @foreach ($mybook as $v)
            <?php
            $ccc = "";
            switch ($v->status) {
                case 'Order list':
                    $ccc = "order";
                    break;
                case 'Waiting for payment':
                    $ccc = "wp";
                    break;
                case 'Waiting for verification':
                    $ccc = "wv";
                    break;
                case 'Payment verified':
                    $ccc = "pv";
                    break;
                case 'Check In':
                    $ccc = "cin";
                    break;
                case 'Check Out':
                    $ccc = "cout";
                    break;
                default:
                    $ccc = "finish";
                    break;
            }
            ?>
            <?php
            $r =  DB::table('rooms')->where('id',$v->id_room)->first();
            $s = explode(';',$r->service);
            $i =  DB::table('room_images')->where('id_room',$r->id)->where('selected',1)->first(); ?>
            <!-- ITEM -->
            <div class="room-list-item {{ $ccc }}">
              <div class="row">

                <div class="col-lg-4">
                  <figure class="gradient-overlay-hover link-icon">
                    <img src="images/rooms/{{ $i->image }}" class="img-fluid" alt="Image">
                  </figure>
                </div>
                <div class="col-lg-6">
                  <div class="room-info">
                    <h3 class="room-title">
                      {{ $r->title }}
                    </h3>
                    <h4>
                        Payment Number : {{ $v->payment_number != "" ? $v->payment_number : "-"}}
                    </h4>
                    @if ($v->status == "Waiting for payment")
                    <button class="btn btn-sm btn-default" style="background:rgb(218, 215, 50)">{{ $v->status }}</button>
                    @endif
                    @if($v->status == "Proof of payment rejected")
                    <button class="btn btn-sm btn-default" style="background:rgb(211, 92, 92);color:white">{{ $v->status }}</button>
                    @endif
                    @if ($v->status == "Order list")
                    <button class="btn btn-sm btn-default" style="background:gray">{{ $v->status }}</button>
                    @endif
                    @if ($v->status == "Waiting for verification")
                    <button class="btn btn-sm btn-default" style="background:rgb(218, 215, 50)">{{ $v->status }}</button>
                    @endif
                    @if ($v->status == "Payment verified" || $v->status == "Check In"  || $v->status == "Check Out")
                    <button class="btn btn-sm btn-default" style="background:rgb(140, 218, 50)">{{ $v->status }}</button>
                    @endif
                    @if ($v->status == "Finish")
                    <button class="btn btn-sm btn-default" style="background:rgb(54, 128, 224)">{{ $v->status }}</button>
                    @endif
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
                  </div>
                </div>
                <div class="col-lg-2">
                  <div class="room-price">
                    @if ($v->status == "Order list")
                    <a class="btn btn-sm btn-default" href="{{ url('book/'.$v->id) }}" style="background:rgb(44, 88, 155);color:white">Continue</a>
                    @endif
                    @if (($v->status == "Waiting for payment" || $v->status == "Proof of payment rejected") && $v->payment_method == "Transfer")
                        <button data-toggle="modal" data-target="#modalUF{{ $v->id }}" class="btn btn-sm btn-default" style="background:rgb(44, 88, 155)">Upload Proof</button>
                    @endif
                    @if ($v->status == "Finish" && ($v->rating == null || $v->rating == 0))
                    <button data-toggle="modal" data-target="#modalTest{{ $v->id }}" class="btn btn-sm btn-default" style="background:rgb(44, 88, 155)">Rating</button>
                    @endif
                    <a data-toggle="modal" style="color: white;margin-bottom:5px;margin-top:5px" data-target="#detailModal{{ $v->id }}" class="btn btn-sm">VIEW DETAILS</a>
                    <a target="blank" class="btn btn-sm btn-default" style="color: white;margin-bottom:5px;" href="{{ url('print/'.$v->id) }}">Print</a>
                    @if ($v->status == "Order list")
                    <a href="{{ url('delete-payment-user/'.$v->id) }}" class="btn btn-sm btn-default" style="background:rgb(211, 92, 92);color:white">Delete</a>
                    @endif
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </main>
        @foreach ($mybook as $v )
        <?php
        $r = DB::table('rooms')->where('id',$v->id_room)->first();
        ?>
        <div class="modal fade" id="detailModal{{ $v->id }}" tabindex="-1" role="dialog" aria-labelledby="detailModal{{ $v->id }}" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">{{ $v->payment_number }}</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                        <div class="col-md-12">
                            <div class="form-group">
                              <label>Your Name</label>
                              <input name="name" readonly value="{{ $v->name }}" type="text" class="form-control" placeholder="Your Name">
                              <input type="hidden"  value="{{ $v->id }}" name="myid" class="form-control" placeholder="Your Name">
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group">
                              <label>Email Address</label>
                              <input class="form-control" name="email" readonly value="{{$v->email}}" type="email" placeholder="Your Email Address">
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group">
                              <label>Phone Number</label>
                              <input name="phone" type="text" readonly value="{{ $v->phone }}" class="form-control" placeholder="Your Phone Number">
                              <small class="text-danger">@error('phone'){{$message}}@enderror</small>
                            </div>
                          </div>
                        <div class="col-md-12">
                            <div class="form-group">
                              <label>Country
                              </label>
                              <input type="text" class="form-control" readonly name="country" value="{{ $v->country}}">
                            </div>
                          </div>
                        <div class="col-md-12">
                            <div class="form-group">
                              <label>CHECK-IN/OUT
                              </label>
                              <input type="text" class="form-control" readonly name="booking_date" value="{{ $v->booking_date}}">
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group">
                              <label>Guests
                              </label>
                              <input type="text" value="{{ $v->booking_adults + $v->booking_children }}" class="form-control">
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group">
                              <label>Room Type</label>
                              <input type="text" name="roomtype" class="form-control" value="{{ strtoupper($r->title)}}" readonly>
                            </div>
                          </div>
                          <div class="col-md-12">
                              <div class="form-group">
                                <label>Price</label>
                                <input type="text" name="roomtype" class="form-control" value="Rp.{{ number_format($r->price,0, ".", ".") }} / Night" readonly>
                              </div>
                            </div>
                          <div class="col-md-12">
                              <div class="form-group">
                                <label>Total Payment</label>
                                <input type="text" name="roomtype" class="form-control" value="Rp.{{ number_format($v->total_payment,0, ".", ".") }}" readonly>
                          </div>
                          </div>
                          <div class="col-md-12">
                              <div class="form-group">
                                <label>Payment Method</label>
                                <input type="text" name="roomtype" class="form-control" value="{{ $v->payment_method }}" readonly>
                              </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group">
                              <label>Your Comments</label>
                              <textarea class="form-control" readonly name="comment" placeholder="Your Comments...">{{ $v->comment }}</textarea>
                            </div>
                          </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" style="background: gray" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
          @endforeach
          @foreach ($mybook as $v )
          <div class="modal fade" id="modalUF{{ $v->id }}" tabindex="-1" role="dialog" aria-labelledby="modalUF{{ $v->id }}" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Upload proof of payment</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                      <form action="{{ url('upload-proof-payment') }}" method="post" enctype="multipart/form-data">
                          @csrf
                      <div class="form-group">
                          <input type="hidden" name="myid" value="{{ $v->id }}">
                          <input type="file" name="file" id="file" class="form-control">
                          <small class="text-danger">@error('file'){{$message}}@enderror</small>
                      </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" style="background: gray" data-dismiss="modal">Close</button>
                    <button class="btn btn-default" type="submit">Upload</button>
                  </form>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
            @foreach ($mybook as $v )
            <div class="modal fade" id="modalTest{{ $v->id }}" tabindex="-1" role="dialog" aria-labelledby="modalUF{{ $v->id }}" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Rating</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ url('add-rating') }}" method="post" enctype="multipart/form-data">
                            @csrf
                        <div class="form-group">
                            <input class="form-control" placeholder="Stars" name="stars" id="stars" type="number" max="5">
                            <input class="form-control" placeholder="Stars" name="id_book" type="hidden" value="{{ $v->id }}">
                            <input class="form-control" placeholder="Stars" name="id_room" type="hidden" value="{{ $v->id_room }}">
                            <small class="text-danger">@error('stars'){{$message}}@enderror</small>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="text" id="text" cols="30" rows="10" placeholder="Your Comment"></textarea>
                            <small class="text-danger">@error('text'){{$message}}@enderror</small>
                        </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" style="background: gray" data-dismiss="modal">Close</button>
                      <button class="btn btn-default" type="submit">Rating</button>
                    </form>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach
            <script>
                function filterr(f) {
                    if (f == 'order') {
                        $('.cin').css('display','none');
                        $('.cout').css('display','none');
                        $('.wp').css('display','none');
                        $('.pv').css('display','none');
                        $('.wv').css('display','none');
                        $('.order').css('display','block');
                        $('.finish').css('display','none');
                    }else if (f == 'wp') {
                        $('.cin').css('display','none');
                        $('.cout').css('display','none');
                        $('.wp').css('display','block');
                        $('.pv').css('display','none');
                        $('.wv').css('display','none');
                        $('.order').css('display','none');
                        $('.finish').css('display','none');
                    }else if (f == 'wv') {
                        $('.cin').css('display','none');
                        $('.cout').css('display','none');
                        $('.wp').css('display','none');
                        $('.pv').css('display','none');
                        $('.wv').css('display','block');
                        $('.order').css('display','none');
                        $('.finish').css('display','none');
                    }else if (f=='pv') {
                        $('.cin').css('display','none');
                        $('.cout').css('display','none');
                        $('.wp').css('display','none');
                        $('.pv').css('display','block');
                        $('.wv').css('display','none');
                        $('.order').css('display','none');
                        $('.finish').css('display','none');
                    }else if (f=='cin') {
                        $('.cin').css('display','block');
                        $('.cout').css('display','none');
                        $('.wp').css('display','none');
                        $('.pv').css('display','none');
                        $('.wv').css('display','none');
                        $('.order').css('display','none');
                        $('.finish').css('display','none');
                    }else if (f=='cout') {
                        $('.cin').css('display','none');
                        $('.cout').css('display','block');
                        $('.wp').css('display','none');
                        $('.pv').css('display','none');
                        $('.wv').css('display','none');
                        $('.order').css('display','none');
                        $('.finish').css('display','none');
                    }else if (f=='finish') {
                        $('.cin').css('display','none');
                        $('.cout').css('display','none');
                        $('.wp').css('display','none');
                        $('.pv').css('display','none');
                        $('.wv').css('display','none');
                        $('.order').css('display','none');
                        $('.finish').css('display','block');
                    }else{
                        $('.cin').css('display','block');
                        $('.cout').css('display','block');
                        $('.wp').css('display','block');
                        $('.pv').css('display','block');
                        $('.wv').css('display','block');
                        $('.order').css('display','block');
                        $('.finish').css('display','block');

                    }
                }
                </script>
@endsection

