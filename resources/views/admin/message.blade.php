@extends("global.admin")
@section("title","Gallery")
@section('content')

        <!-- Page-header start -->
        <div class="page-header card">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <div class="d-inline">
                            <h4>Message</h4>
                            <span>Data Message</span>
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
                            <li class="breadcrumb-item"><a href="#!">Message</a>
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
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th width="100px">#</th>
                                                            <th>Name</th>
                                                            <th>Email</th>
                                                            <th width="400px">Message</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $no =1;?>
                                                        @foreach ($messages as $v)
                                                        <tr>
                                                            <th scope="row">{{ $no++ }}</th>
                                                            <th>{{ $v->name }}</th>
                                                            <th>{{ $v->email }}</th>
                                                            <th>{{ $v->text }}</th>
                                                            <td>
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

@foreach ($messages as $v )
<div class="modal fade" id="modalDel{{ $v->id }}" tabindex="-1" role="dialog" aria-labelledby="modalDel{{ $v->id }}" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Delete Message</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Delete this message?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <a href="{{ url('delete-message/'.$v->id) }}" class="btn btn-primary">Delete</a>
        </div>
      </div>
    </div>
  </div>
  @endforeach
@endsection
