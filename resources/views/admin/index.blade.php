@extends('global.admin')
@section('title','Home')
@section('content')
<div class="page-body">
    <div class="row">
        <!-- card1 start -->
        <div class="col-md-6 col-xl-3">
            <div class="card widget-card-1">
                <div class="card-block-small">
                    <i class="icofont icofont-user bg-c-blue card1-icon"></i>
                    <span class="text-c-blue f-w-600">User</span>
                    <h4>{{ $user }} User</h4>
                </div>
            </div>
        </div>
        <!-- card1 end -->
        <!-- card1 start -->
        <div class="col-md-6 col-xl-3">
            <div class="card widget-card-1">
                <div class="card-block-small">
                    <i class="icofont icofont-image bg-c-pink card1-icon"></i>
                    <span class="text-c-pink f-w-600">Gallery</span>
                    <h4>{{ $gallery }} Images</h4>
                </div>
            </div>
        </div>
        <!-- card1 end -->
        <!-- card1 start -->
        <div class="col-md-6 col-xl-3">
            <div class="card widget-card-1">
                <div class="card-block-small">
                    <i class="icofont icofont-pay bg-c-yellow card1-icon"></i>
                    <span class="text-c-yellow f-w-600">Harga</span>
                    <h4>{{ $harga }} Paket Harga</h4>

                </div>
            </div>
        </div>
        <!-- card1 end -->
        <!-- card1 start -->

        <div class="col-md-6 col-xl-3">
            <div class="card widget-card-1">
                <div class="card-block-small">
                    <i class="icofont icofont-ui-image bg-c-green card1-icon"></i>
                    <span class="text-c-green f-w-600">Slider</span>
                    <h4>{{ $slider }} Slider</h4>
                </div>
            </div>
        </div>
        <!-- card1 end -->

</div>

@endsection

