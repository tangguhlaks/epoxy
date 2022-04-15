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
                    <i class="icofont icofont-bed bg-c-pink card1-icon"></i>
                    <span class="text-c-pink f-w-600">Room</span>
                    <h4>{{ $room }} Room</h4>
                </div>
            </div>
        </div>
        <!-- card1 end -->
        <!-- card1 start -->
        <div class="col-md-6 col-xl-3">
            <div class="card widget-card-1">
                <div class="card-block-small">
                    <i class="icofont icofont-book-mark bg-c-yellow card1-icon"></i>
                    <span class="text-c-yellow f-w-600">Books</span>
                    <h4>{{ $book }} Books</h4>

                </div>
            </div>
        </div>
        <!-- card1 end -->
        <!-- card1 start -->

        <div class="col-md-6 col-xl-3">
            <div class="card widget-card-1">
                <div class="card-block-small">
                    <i class="icofont icofont-check bg-c-green card1-icon"></i>
                    <span class="text-c-green f-w-600">Finish</span>
                    <h4>2 Finish</h4>
                </div>
            </div>
        </div>
        <!-- card1 end -->

</div>

@endsection

