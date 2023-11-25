@extends("global.admin")
@section("title","Edit Room")
@section('content')

        <!-- Page-header start -->
        <div class="page-header card">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <div class="d-inline">
                            <h4>Edit Room</h4>
                            <span>Nata Hotel Edit Room Data</span>
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
                            <li class="breadcrumb-item"><a href="{{ url('admin-room') }}">Room</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#!">Edit Room</a>
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
                                        <div class="card-block table-border-style" style="padding: 15px">
                                            <form action="{{ url('edit-room') }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <input type="hidden" name="id" value="{{ $myroom->id}}" class="form-control">
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Title</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" name="title" value="{{ $myroom->title}}" class="form-control">
                                                        <small class="text-danger">@error('title'){{$message}}@enderror</small>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Price (Rp)</label>
                                                    <div class="col-sm-10">
                                                        <input type="number" name="price" value="{{ $myroom->price }}" class="form-control">
                                                        <small class="text-danger">@error('price'){{$message}}@enderror</small>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Description</label>
                                                    <div class="col-sm-10">
                                                        <textarea name="description" id="description" class="form-control" cols="30" rows="10">{{ $myroom->description}}</textarea>
                                                        <small class="text-danger">@error('description'){{$message}}@enderror</small>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Description 2</label>
                                                    <div class="col-sm-10">
                                                        <textarea name="description2" id="description2" class="form-control" cols="30" rows="10">{{ $myroom->description2}}</textarea>
                                                        <small class="text-danger">@error('description2'){{$message}}@enderror</small>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <?php $s = explode(';',$myroom->service); ?>
                                                    <label class="col-sm-2 col-form-label">Service</label>
                                                    <div class="col-sm-10">
                                                        <input type="checkbox" name="service[]" {{ in_array('DOUBLE BED',$s) ? "checked" :""}} value="DOUBLE BED">&nbsp; DOUBLE BED <br><br>
                                                        <input type="checkbox" name="service[]" {{ in_array('3 PERSONS',$s) ? "checked" :""}} value="3 PERSONS">&nbsp;3 PERSONS <br><br>
                                                        <input type="checkbox" name="service[]" {{ in_array('FREE INTERNET',$s) ? "checked" :""}} value="FREE INTERNET">&nbsp;FREE INTERNET <br><br>
                                                        <input type="checkbox" name="service[]" {{ in_array('FREE WI-FI',$s) ? "checked" :""}} value="FREE WI-FI">&nbsp;FREE WI-FI <br><br>
                                                        <input type="checkbox" name="service[]" {{ in_array('BREAKFAST INCLUDE',$s) ? "checked" :""}} value="BREAKFAST INCLUDE">&nbsp;BREAKFAST INCLUDE <br><br>
                                                        <input type="checkbox" name="service[]" {{ in_array('PRIVATE BALCONY',$s) ? "checked" :""}} value="PRIVATE BALCONY">&nbsp;PRIVATE BALCONY <br><br>
                                                        <input type="checkbox" name="service[]" {{ in_array('FREE NEWSPAPER',$s) ? "checked" :""}} value="FREE NEWSPAPER">&nbsp;FREE NEWSPAPER <br><br>
                                                        <input type="checkbox" name="service[]" {{ in_array('FLAT SCREEN TV',$s) ? "checked" :""}} value="FLAT SCREEN TV">&nbsp;FLAT SCREEN TV <br><br>
                                                        <input type="checkbox" name="service[]" {{ in_array('BEACH VIEW',$s) ? "checked" :""}} value="BEACH VIEW">&nbsp;BEACH VIEW <br><br>
                                                        <input type="checkbox" name="service[]" {{ in_array('FULL AC',$s) ? "checked" :""}} value="FULL AC">&nbsp;FULL AC <br><br>
                                                        <input type="checkbox" name="service[]" {{ in_array('ROOM SERVICE',$s) ? "checked" :""}} value="ROOM SERVICE">&nbsp;ROOM SERVICE <br><br>
                                                        <input type="checkbox" name="service[]" {{ in_array('BATHROOM',$s) ? "checked" :""}} value="BATHROOM">&nbsp;BATHROOM <br><br>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-12 text-right">
                                                        <button class="btn btn-primary">Edit Room</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <br>
                                    </div>
                                    <!-- Basic table card end -->

                                </div>
@endsection
