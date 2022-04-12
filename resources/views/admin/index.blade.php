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
        <?php
        $finish = DB::table('books')->where('status','Finish')->count();
        ?>
        <div class="col-md-6 col-xl-3">
            <div class="card widget-card-1">
                <div class="card-block-small">
                    <i class="icofont icofont-check bg-c-green card1-icon"></i>
                    <span class="text-c-green f-w-600">Finish</span>
                    <h4>{{ $finish }} Finish</h4>
                </div>
            </div>
        </div>
        <!-- card1 end -->
        <!-- Statestics Start -->
        <div class="col-md-12 col-xl-8">
            <div class="card">
                <div class="card-header">
                    <h5>Statestics</h5>
                    <div class="card-header-left ">
                    </div>
                    <div class="card-header-right">
                        <ul class="list-unstyled card-option">
                            <li><i class="icofont icofont-simple-left "></i></li>
                            <li><i class="icofont icofont-maximize full-card"></i></li>
                            <li><i class="icofont icofont-minus minimize-card"></i></li>
                            <li><i class="icofont icofont-refresh reload-card"></i></li>
                            <li><i class="icofont icofont-error close-card"></i></li>
                        </ul>
                    </div>
                </div>
                <div class="card-block">
                    <canvas id="myChart" width="400" height="260"></canvas>
                </div>
            </div>
        </div>



        <div class="col-md-12 col-xl-4">
                <div class="card fb-card">
                    <div class="card-header">
                        <div class="d-inline-block">
                            <h5>Message</h5>
                        </div>
                    </div>
                    <div class="card-block text-center">
                        <div class="row">
                            <div class="col-6 b-r-default">
                                <?php $mc = DB::table('messages')->count(); ?>
                                <h2>{{ $mc }}</h2>
                                <p class="text-muted">Message</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>

@endsection
@section('js')
<?php
$order = DB::table('books')->where('status','Order list')->count();
$waitingp = DB::table('books')->where('status','Waiting for payment')->count();
$pr = DB::table('books')->where('status','Proof of payment rejected')->count();
$cin = DB::table('books')->where('status','Check In')->count();
$cout = DB::table('books')->where('status','Check Out')->count();
$finish = DB::table('books')->where('status','Finish')->count();
$pv = DB::table('books')->where('status','Payment verified')->count();
$wv = DB::table('books')->where('status','Waiting for verification')->count();
?>
<div style="background: rgb(34, 137, 151)"></div>
<script>
    const ctx = document.getElementById('myChart');
    const myChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ['Order list', 'Waiting for payment','Waiting for verification', 'Proof of payment rejected', 'Check In', 'Check Out', 'Payment verified','Finish'],
            datasets: [{
                label: '# of Votes',
                data: [{{ $order }}, {{ $waitingp }},{{ $wv }}, {{ $pr }}, {{ $cin }}, {{ $cout }}, {{ $pv }},{{ $finish }}],
                backgroundColor: [
                    'rgba(153, 102, 255, 0.8)',
                    'rgba(255, 159, 64, 0.8)',
                    'rgba(255, 206, 86, 0.8)',
                    'rgba(255, 99, 132, 0.8)',
                    'rgba(54, 162, 235, 0.8)',
                    'rgba(255, 206, 86, 0.8)',
                    'rgba(34, 137, 151, 0.8)',
                    'rgba(75, 192, 192, 0.8)'

                ],
                borderWidth: 1,
            }]
        },

    });
    </script>
@endsection

