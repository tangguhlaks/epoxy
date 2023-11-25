@extends("global.admin")
@section("title","Payment")
@section('content')

        <!-- Page-header start -->
        <div class="page-header card">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <div class="d-inline">
                            <h4>Payment</h4>
                            <span>Payment Data Hotel Nata</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="page-header-breadcrumb">
                        <ul class="breadcrumb-title">
                            <li class="breadcrumb-item">
                                <a href="{{ url('dashboard') }}">
                                    <i class="icofont icofont-home"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item"><a href="#!">Data</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#!">Payment</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page-header end -->
                                <!-- Page-body start -->
                                <div class="page-body">
                                    <!-- Basic table card start -->
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="col-md-12">
                                                @if(session()->has('message'))
                                                <div class="alert alert-success">
                                                   {{ session('message') }}
                                                </div>
                                                @endif
                                            </div>
                                            <div class="card-header-right">    <ul class="list-unstyled card-option">        <li><i class="icofont icofont-simple-left "></i></li>        <li><i class="icofont icofont-maximize full-card"></i></li>        <li><i class="icofont icofont-minus minimize-card"></i></li>        <li><i class="icofont icofont-refresh reload-card"></i></li>        <li><i class="icofont icofont-error close-card"></i></li>    </ul></div>
                                        </div>
                                        <div class="card-block table-border-style" style="padding: 15px">
                                            <div class="table-responsive">
                                                <table class="table" id="paymenttable">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Payment Number</th>
                                                            <th>Name</th>
                                                            <th>Email</th>
                                                            <th>Phone</th>
                                                            <th>Country</th>
                                                            <th>Guest</th>
                                                            <th>Payment Method</th>
                                                            <th>Total Payment</th>
                                                            <th>Proof of Payment</th>
                                                            <th>Status</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $no =1;?>
                                                        @foreach ($mybook as $v)
                                                        <tr>
                                                            <th scope="row">{{ $no++ }}</th>
                                                            <th>{{ $v->payment_number }}</th>
                                                            <th>{{ $v->name }}</th>
                                                            <th>{{ $v->email }}</th>
                                                            <th>{{ $v->phone }}</th>
                                                            <th>{{ $v->country }}</th>
                                                            <th>{{ $v->booking_adults + $v->booking_children }} Person</th>
                                                            <th>{{ $v->payment_method }}</th>
                                                            <th>Rp.{{ number_format($v->total_payment,0,'.','.') }}</th>

                                                            <th>
                                                                @if ($v->payment_method == "Transfer")
                                                                    <a download href="{{ url('images/proofs/'.$v->proof_of_payment) }}">{{ $v->proof_of_payment }}</a>
                                                                @else
                                                                    -
                                                                @endif
                                                            </th>
                                                            <th>{{ $v->status }}</th>
                                                            <td>
                                                                <button class="btn btn-primary" data-toggle="modal" data-target="#modalCS{{ $v->id }}">Change Status</button>
                                                                <button class="btn btn-danger" data-toggle="modal" data-target="#modalDel{{ $v->id }}">Delete</button>
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <br>

                                    </div>
                                    <!-- Basic table card end -->

                                </div>

<!-- Modal -->
<div class="modal fade" id="modalAdd" tabindex="-1" role="dialog" aria-labelledby="modalAdd" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Slider</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{ url('add-slider') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="modal-body">
            <div class="form-group">
                <textarea placeholder="Text Slider" name="text" id="text" class="form-control" cols="30" rows="10"></textarea>
                <small class="text-danger">@error('text'){{$message}}@enderror</small>
            </div>
            <div class="form-group">
                <input type="text" name="text2" placeholder="Text 2 Slider (Small Text)" id="text2" class="form-control">
                <small class="text-danger">@error('text2'){{$message}}@enderror</small>
            </div>
            <div class="form-group">
              <input type="file" name="file" id="file" class="form-control">
              <small class="text-danger">@error('file'){{$message}}@enderror</small>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Add</button>
        </div>
        </form>
      </div>
    </div>
  </div>

@foreach ($mybook as $v )
<div class="modal fade" id="modalDel{{ $v->id }}" tabindex="-1" role="dialog" aria-labelledby="modalDel{{ $v->id }}" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Delete Payment {{ $v->payment_number }}</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Delete this data?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <a href="{{ url('delete-payment/'.$v->id) }}" class="btn btn-primary">Delete</a>
        </div>
      </div>
    </div>
  </div>
  @endforeach
@foreach ($mybook as $v )
<div class="modal fade" id="modalCS{{ $v->id }}" tabindex="-1" role="dialog" aria-labelledby="modalCS{{ $v->id }}" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Change Status {{ $v->payment_number }}</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{ url('change-status-payment') }}" method="POST" enctype="multipart/form-data">
        <div class="modal-body">
            @csrf
            <div class="form-group">
                <input type="hidden" value="{{ $v->id }}" name="myid" id="myid">
                <select name="status" id="status" class="form-control">
                    <option value="">--- Choose Status ---</option>
                    <option value="Finish">Finish</option>
                    <option value="Check In">Check In</option>
                    <option value="Check Out">Check Out</option>
                    <option value="Payment verified">Payment verified</option>
                    <option value="Proof of payment rejected">Proof of payment rejected</option>
                </select>
                <small class="text-danger">@error('status'){{$message}}@enderror</small>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button class="btn btn-primary" type="submit">Change</button>
        </form>
        </div>
      </div>
    </div>
  </div>
  @endforeach
@endsection
