@extends('global.user')
@section('title','Epoxy')
@section('content')

@include('global.nav-user')
@include('global.slider-user')

<div class="container">
    <div class="row mt-4 p-3 infocomp bg-light">
        <div class="col-md-6">
        <h5 class="LPT">Kya Epoxy Prima</h4>
        <h1 class="">Apa Itu Lantai Epoxy ?</h1>
        <p class="">Epoksi merupakan material pelapis lantai yang terbuat dari bahan campuran resin dan bahan pengeras (poliamina) dengan kelebihan sebagai berikut.</p>
        <ul class="">
            <li>Tahan lama dan durabilitas bagus</li>
            <li>Cocok untuk industri</li>
            <li>Anti Air</li>
        </ul>
        </div>
        <div class="col-md-6">
        <img src="{{url('asset/img/infocomp.png')}}" width="500" class="img-fluid" alt="">
        </div>
    </div>
    </div>
  
    <div class="row mt-4 p-3 cardgrup">
    <div class="col-md-3">
        <div class="card" style="width: 18rem;">
        <img src="{{url('asset/img/fast.png')}}" class="card-img-top" alt="Illustrasi Cepat">
        <div class="card-body">
            <h1 class="card-title">Pengerjaan Cepat</h1>
            <h2 class="karyawan"><span style="color: var(--blue);">+30 </span>Karyawan</h2>
            <p class="card-text">Kami siap memberikan pelayanan prima dalam melakukan pengecatan epoxy lantai.</p>
            <a href="#" class="btn btn-primary">Lihat Portofolio</a>
        </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card" style="width: 18rem;">
        <img src="{{url('asset/img/cheap.png')}}" class="card-img-top" alt="Illustrasi Murah">
        <div class="card-body">
            <h1 class="card-title">Harga Juara</h1>
            <h2 class="karyawan"><span style="color: var(--blue);">Rp. 60.000 </span>per Meter</h2>
            <p class="card-text">Kami memberikan kualitas yang terjamin dengan ketebalan 300 Micron</p>
            <a href="#" class="btn btn-primary">Lihat Katalog Harga</a>
        </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="col-md-6">
        <h1 class="moto">Moto Kami</h1>
        <h2 class="titleside">Kami Memberikan Layanan Terbaik</h2>
        <p class="sidepar">Terjangkau bukan berarti tidak berkualitas, kami memiliki tenaga yang andal, alat yang memadai serta kualitas bahan yang sesuai dengan standar.</p>
        <a href="#" class="btn btn-primary">Lebih Jauh</a>
        </div> 
        </div>
    </div>
  
    <div class="row mt-4 p-3 progrup justify-content-center">
        <div class="col-md-12">
        <a class="company">Perusahaan Kami</a>
        <h2 class="jasa">Jasa yang Kami Tawarkan</h2>
        <p class="rightman">The Right Man on The Right Job</p>
        </div>
        <div class="card rounded-3 border-0" style="width: 18rem;">
        <img src="{{url('asset/img/paint.png')}}" class="card-img-top mt-3" alt="...">
        <div class="card-body">
            <h5 class="card-title">Epoxy Lantai</h5>
            <p class="card-text">Sudah termasuk Jasa, Peralatan, Man Power, dan Bahan.</p>
        </div>
        </div>
    </div>
    
    <div class="container">
    <div class="row mt-4 p-3 terhubung">
        <div class="col-md-6">
        <a class="company">Mari Mendekat</a>
        <h2 class="jasa">Mudah Terhubung Dengan Kami</h2>
        <p class="rightman">Untuk detail lebih lanjut anda bisa hubungi kami untuk mendapatkan kalkulasi yang cocok dengan kebutuhan anda.</p>
        <button class="btn hab me-2" type="button"><i class="lab la-whatsapp la-2x me-2"></i>Whatsapp</button>
        <button class="btn hab me-2" type="button"><i class="las la-envelope la-2x me-2"></i>Email</button>
        </div>
        <div class="col-md-6">
        <img src="{{url('asset/svg/comtac.svg')}}" alt="">
        </div>
    </div>
    </div>
  
    <div class="row mt-4 p-3 progrup">
    <div class="col-md-12">
        <a class="company">Mari Mendekat</a>
        <h2 class="jasa">Mudah Terhubung Dengan Kami</h2>
    </div>
    <div id="carouselExampleCaptions" class="carousel slide rounded-3" data-bs-ride="carousel">
        <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{url('asset/img/carousel/1.jfif')}}" class="d-block w-100 rounded-3" alt="...">
            <div class="carousel-caption d-none d-md-block">
            <h5>First slide label</h5>
            <p>Some representative placeholder content for the first slide.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{url('asset/img/carousel/2.jfif')}}" class="d-block w-100 rounded-3" alt="...">
            <div class="carousel-caption d-none d-md-block">
            <h5>Second slide label</h5>
            <p>Some representative placeholder content for the second slide.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{url('asset/img/carousel/3.jfif')}}" class="d-block w-100 rounded-3" alt="...">
            <div class="carousel-caption d-none d-md-block">
            <h5>Third slide label</h5>
            <p>Some representative placeholder content for the third slide.</p>
            </div>
        </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
        </button>
    </div>
    </div>
  

@endsection