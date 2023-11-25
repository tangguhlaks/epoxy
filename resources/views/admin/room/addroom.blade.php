@extends("global.admin")
@section("title","Add Room")
@section('content')

        <!-- Page-header start -->
        <div class="page-header card">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <div class="d-inline">
                            <h4>Add Room</h4>
                            <span>Nata Hotel Add Room Data</span>
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
                            <li class="breadcrumb-item"><a href="#!">Add Room</a>
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
                                            <form action="{{ url('add-room') }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Title</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" name="title" value="{{ old('title') }}" class="form-control">
                                                        <small class="text-danger">@error('title'){{$message}}@enderror</small>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Price (Rp)</label>
                                                    <div class="col-sm-10">
                                                        <input type="number" name="price" value="{{ old('price') }}" class="form-control">
                                                        <small class="text-danger">@error('price'){{$message}}@enderror</small>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Description</label>
                                                    <div class="col-sm-10">
                                                        <textarea name="description" id="description" class="form-control" cols="30" rows="10">{{ old('description') }}</textarea>
                                                        <small class="text-danger">@error('description'){{$message}}@enderror</small>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Description 2</label>
                                                    <div class="col-sm-10">
                                                        <textarea name="description2" id="description2" class="form-control" cols="30" rows="10">{{ old('description2') }}</textarea>
                                                        <small class="text-danger">@error('description2'){{$message}}@enderror</small>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Service</label>
                                                    <div class="col-sm-10">
                                                        <input type="checkbox" name="service[]" value="DOUBLE BED">&nbsp; DOUBLE BED <br><br>
                                                        <input type="checkbox" name="service[]" value="3 PERSONS">&nbsp;3 PERSONS <br><br>
                                                        <input type="checkbox" name="service[]" value="FREE INTERNET">&nbsp;FREE INTERNET <br><br>
                                                        <input type="checkbox" name="service[]" value="FREE WI-FI">&nbsp;FREE WI-FI <br><br>
                                                        <input type="checkbox" name="service[]" value="BREAKFAST INCLUDE">&nbsp;BREAKFAST INCLUDE <br><br>
                                                        <input type="checkbox" name="service[]" value="PRIVATE BALCONY">&nbsp;PRIVATE BALCONY <br><br>
                                                        <input type="checkbox" name="service[]" value="FREE NEWSPAPER">&nbsp;FREE NEWSPAPER <br><br>
                                                        <input type="checkbox" name="service[]" value="FLAT SCREEN TV">&nbsp;FLAT SCREEN TV <br><br>
                                                        <input type="checkbox" name="service[]" value="BEACH VIEW">&nbsp;BEACH VIEW <br><br>
                                                        <input type="checkbox" name="service[]" value="FULL AC">&nbsp;FULL AC <br><br>
                                                        <input type="checkbox" name="service[]" value="ROOM SERVICE">&nbsp;ROOM SERVICE <br><br>
                                                        <input type="checkbox" name="service[]" value="BATHROOM">&nbsp;BATHROOM <br><br>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-12 text-right">
                                                        <button class="btn btn-primary">Add Room</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <br>
                                    </div>
                                    <!-- Basic table card end -->

                                </div>
@endsection
