@extends("global.admin")
@section("title","Room")
@section('content')

        <!-- Page-header start -->
        <div class="page-header card">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <div class="d-inline">
                            <h4>Room</h4>
                            <span>Nata Hotel Room Data</span>
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
                            <li class="breadcrumb-item"><a href="#!">Room</a>
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
                                            <div class="col-md-6">
                                                <a href="{{ url('add-room') }}" class="btn btn-primary">Add Room</a>
                                            </div>
                                            <div class="card-header-right">    <ul class="list-unstyled card-option">        <li><i class="icofont icofont-simple-left "></i></li>        <li><i class="icofont icofont-maximize full-card"></i></li>        <li><i class="icofont icofont-minus minimize-card"></i></li>        <li><i class="icofont icofont-refresh reload-card"></i></li>        <li><i class="icofont icofont-error close-card"></i></li>    </ul></div>
                                        </div>
                                        <div class="card-block table-border-style" style="padding: 15px">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th width="100px">#</th>
                                                            <th>Title</th>
                                                            <th>Price</th>
                                                            <th>Description</th>
                                                            <th>Description 2</th>
                                                            <th>Service</th>
                                                            <th>Image</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $no =1;?>
                                                        @foreach ($rooms as $v)
                                                        <tr>
                                                            <th scope="row">{{ $no++ }}</th>
                                                            <th>{{ $v->title }}</th>
                                                            <th>Rp.{{ number_format($v->price,0, ".", ".") }}</th>
                                                            <th>{{ $v->description }}</th>
                                                            <th>{{ $v->description2 }}</th>
                                                            <th>
                                                                <?php $s = explode(';',$v->service) ?>
                                                                @for ($i =0;$i<count($s);$i++)
                                                                    - {{ $s[$i] }} <br>
                                                                @endfor
                                                            </th>
                                                            <td>
                                                                <button class="btn btn-default" data-toggle="modal" data-target="#modalImg{{ $v->id }}">Detail Image</button>
                                                            </td>
                                                            <td>

                                                                <button class="btn btn-primary" data-toggle="modal" data-target="#modalAdd{{ $v->id }}">Add Image</button>
                                                                <a href="{{ url('edit-room/'.$v->id) }}" class="btn btn-info">Edit Room</a>
                                                                @if ($v->favorite == 1)
                                                                <a class="btn btn-danger" href="{{ url('select-fav-room/'.$v->id) }}">Remove From Favorite</a>
                                                                @else
                                                                <a class="btn btn-primary" href="{{ url('select-fav-room/'.$v->id) }}">Set As Favorite</a>
                                                                @endif
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

@foreach ($rooms as $v )
<!-- Modal -->
<div class="modal fade" id="modalAdd{{ $v->id }}" tabindex="-1" role="dialog" aria-labelledby="modalAdd" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Image To {{ $v->title }}</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{ url('add-image-room') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="modal-body">
            <div class="form-group">
              <input type="file" name="file" id="file" class="form-control">
              <input type="hidden" name="id" value="{{ $v->id }}">
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
@endforeach
@foreach ($rooms as $v )
<!-- Modal -->
<div class="modal fade" id="modalImg{{ $v->id }}" tabindex="-1" role="dialog" aria-labelledby="modalAdd" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Image of {{ $v->title }}</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <?php
            $myi = DB::table('room_images')->where('id_room',$v->id)->get();
            ?>
            @foreach ($myi as $i )
            <div class="text-center">
            <img src="images/rooms/{{ $i->image }}" width="200px">
            </div>
            <br>
            <div class="text-right">
            <a href="{{ url('delete-image-room/'.$i->id) }}" class="btn btn-danger">Delete</a>
            @if($i->selected == 1)
            <a class="btn btn-default">Default</a>
            @else
            <a href="{{ url('select-image-room/'.$i->id.'/'.$v->id) }}" class="btn btn-primary">Set As Default</a>
            @endif
            </div>
            <hr>
            @endforeach
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
@endforeach
@foreach ($rooms as $v )
<div class="modal fade" id="modalDel{{ $v->id }}" tabindex="-1" role="dialog" aria-labelledby="modalDel{{ $v->id }}" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Delete Slider</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Delete this data?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <a href="{{ url('delete-slider/'.$v->id) }}" class="btn btn-primary">Delete</a>
        </div>
      </div>
    </div>
  </div>
  @endforeach
@endsection
