@extends('global.user')
@section('content')

<div class="container-fluid">
<div class="row workingspace">
    <div class="col-md-6 marginerror1">
        <img src="default/asset/svg/Epoxy Worker.svg" width="500" class="img-fluid" alt="">
    </div>
    <div class="col-md-6 marginerror2">
        <button class="btn label btn-sm btn-outline-info" type="button">Jasa Epoxy Lantai</button>
        <h1 class="">{{ $about->title }}</h1>
        <p class="">{{ $about->text }}</p>
        <a class="btn hub btn-outline-info me-2" href="#about">Tentang Kami</a>
        <button class="btn hub btn-outline-info" type="button">Cek Harga</button>
    </div>
</div>
</div>
    <div class="container"id="about">
    <div class="row mt-4 p-3 infocomp bg-light">
        <div class="col-md-6">
        <h5 class="LPT">Kya Epoxy Prima</h4>
        <h1 class="">{{ $about->title2 }}</h1>
        <p class="">{{ $about->text2 }}</p>
        @if($about->list != "")
        <ul class="">
            <?php $ls = explode('~',$about->list); ?>
            @for($i = 0; $i < count($ls); $i++)
                <li>{{ $ls[$i] }}</li>
            @endfor
        </ul>
        @endif
        </div>
        <div class="col-md-6">
        <img src="{{ url('images/about/'.$about->image) }}" width="500" class="img-fluid" alt="">
        </div>
    </div>
    </div>
    <div class="container-fluid">
    <div class="row mt-12 p-3 cardgrup">
        <div class="col-md-12" align="center">
            <div class="col-md-12">
                <br><br>
            <h1 class="moto">Moto Kami</h1>
            <h2 class="titleside">Kami Memberikan Layanan Terbaik</h2>
            <p class="sidepar">Terjangkau bukan berarti tidak berkualitas, kami memiliki tenaga yang andal, alat yang memadai serta kualitas bahan yang sesuai dengan standar.</p>
            </div>
        </div>

    </div>
    </div>
    <div class="container-fluid">
        <div class="row mt-12 p-3 bg-light cardgrup" align="center" id="harga">
            <h1 class="moto">Harga</h1>
            <h2 class="titleside">Harga Terjangkau</h2>
            {{-- <div class="col-md-3 p-3" >
                <div class="card" style="width: 20rem;">
                <img src="default/asset/img/cheap.png" class="card-img-top" alt="Illustrasi Murah">
                <div class="card-body">
                    <h2 class="karyawan"><span style="color: var(--blue);">Rp. 60.000 </span>per Meter</h2>
                </div>
                </div>
            </div> --}}
            <div class="owl-carousel owl-theme" align="center">
                @foreach ($harga as $h)
                <div class="item">
                    <div class="card" style="width: 15rem;">
                    <img style="height:20rem;" src="{{ url('images/harga/'.$h->image) }}" class="card-img-top" alt="Illustrasi Murah">
                    <div class="card-body" style="height:3rem;">
                        <h2 class="karyawan"><span style="color: var(--blue);">Rp. {{ number_format($h->harga,'0','.','.') }} </span>per Meter</h2>
                    </div>
                    </div>
                </div>
                @endforeach

            </div>

        </div>
    </div>
    <div class="container-fluid">
        <div class="row mt-12 p-3 cardgrup" id="galeri">

            <div class="col-md-12" align="center">

                    <h1 class="moto">Galeri</h1>
                    <h2 class="titleside">Galeri Pengerjaan Kami</h2>
                    <p class="sidepar">Kami siap memberikan pelayanan prima dalam melakukan pengecatan epoxy lantai.</p>
                    <br>
                    <div class="owl-carousel owl-theme" align="center">
                        @foreach ($galeri as $g )
                        <div class="item">
                            <div class="card" style="width: 15rem;height:20rem;">
                            <img src="{{ url('images/gallery/'.$g->image) }}" >
                                </div>
                        </div>
                        @endforeach

                    </div>

            </div>

        </div>
    </div>

    <div class="container-fluid">
    <div class="row mt-4 p-3 bg-light progrup justify-content-center">
        <div class="col-md-12" id="jasa" align="center">
        <a class="company">Perusahaan Kami</a>
        <h2 class="jasa">Jasa yang Kami Tawarkan</h2>
        <p class="rightman">The Right Man on The Right Job</p>
        <div class="card rounded-3 border-0"  style="width: 18rem;">
            <img src="assets/default/asset/img/paint.png" class="card-img-top mt-3" alt="...">
            <div class="card-body">
                <h5 class="card-title">Epoxy Lantai</h5>
                <p class="card-text">Sudah termasuk Jasa, Peralatan, Man Power, dan Bahan.</p>
            </div>
        </div>
        <br><br>
    </div>
    </div>

    <div class="container">
    <div class="row mt-4 p-3 terhubung" id="hubungi">
        <div class="col-md-6">
        <a class="company">Mari Mendekat</a>
        <h2 class="jasa">Mudah Terhubung Dengan Kami</h2>
        <p class="rightman">Untuk detail lebih lanjut anda bisa hubungi kami untuk mendapatkan kalkulasi yang cocok dengan kebutuhan anda.</p>
        <a target="_blank" class="btn hab me-2" href="https://wa.me/{{ $whatsapp }}" type="button"><i class="lab la-whatsapp la-2x me-2"></i>Whatsapp</a>
        <a target="_blank" class="btn hab me-2" href="mailto:{{ $email }}" type="button"><i class="las la-envelope la-2x me-2"></i>Email</a>
        </div>
        <div class="col-md-6">
        <img src="default/asset/svg/comtac.svg" alt="">
        </div>
    </div>
    </div>
    @include('global.slider')
@endsection
