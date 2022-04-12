@extends("global.admin")
@section("title","Gallery")
@section('content')

        <!-- Page-header start -->
        <div class="page-header card">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <div class="d-inline">
                            <h4>Gallery</h4>
                            <span>Setting Images Gallery</span>
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
                            <li class="breadcrumb-item"><a href="#!">Setting Layout</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#!">Gallery</a>
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
                                                <button class="btn btn-primary" data-toggle="modal" data-target="#modalAdd">Add Gallery</button>
                                            </div>
                                            <div class="card-header-right">    <ul class="list-unstyled card-option">        <li><i class="icofont icofont-simple-left "></i></li>        <li><i class="icofont icofont-maximize full-card"></i></li>        <li><i class="icofont icofont-minus minimize-card"></i></li>        <li><i class="icofont icofont-refresh reload-card"></i></li>        <li><i class="icofont icofont-error close-card"></i></li>    </ul></div>
                                        </div>
                                        <div class="card-block table-border-style" style="padding: 15px">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th width="100px">#</th>
                                                            <th width="150px">Title</th>
                                                            <th width="150px">Category</th>
                                                            <th width="300px">Image</th>
                                                            <th width="200px">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $no =1;?>
                                                        @foreach ($gallerys as $v)
                                                        <tr>
                                                            <th scope="row">{{ $no++ }}</th>
                                                            <th>{{ $v->title }}</th>
                                                            <th>{{ $v->category }}</th>
                                                            <td><img width="300px" src="images/gallery/{{$v->image}}" alt=""></td>
                                                            <td>
                                                                @if($v->selected == 0)
                                                                <a class="btn btn-primary" href="{{ url('select-gallery/'.$v->id) }}">Select</a>
                                                                @else
                                                                <a class="btn btn-default" href="{{ url('select-gallery/'.$v->id) }}">Selected</a>
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

<!-- Modal -->
<div class="modal fade" id="modalAdd" tabindex="-1" role="dialog" aria-labelledby="modalAdd" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Gallery</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{ url('add-gallery') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="modal-body">
            <div class="form-group">
                <input type="text" placeholder="Title" class="form-control" name="title" id="title">
                <small class="text-danger">@error('title'){{$message}}@enderror</small>
            </div>
            <div class="form-group">
                <select name="category" id="category" class="form-control">
                    <option value="">--- Select Category ---</option>
                    <option value="restaurant">Restaurant</option>
                    <option value="swimming pool">Swimming Pool</option>
                    <option value="spa">Spa</option>
                    <option value="room view">Room View</option>
                </select>
                <small class="text-danger">@error('category'){{$message}}@enderror</small>
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

@foreach ($gallerys as $v )
<div class="modal fade" id="modalDel{{ $v->id }}" tabindex="-1" role="dialog" aria-labelledby="modalDel{{ $v->id }}" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Delete Gallery</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Delete this data?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <a href="{{ url('delete-gallery/'.$v->id) }}" class="btn btn-primary">Delete</a>
        </div>
      </div>
    </div>
  </div>
  @endforeach
@endsection
