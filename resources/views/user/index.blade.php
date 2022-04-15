@extends('global.user')
@section('content')

<div class="container-fluid">
<div class="row workingspace">
    <div class="col-md-6 marginerror1">
        <img src="default/asset/svg/Epoxy Worker.svg" width="500" class="img-fluid" alt="">
    </div>
    <div class="col-md-6 marginerror2">
        <button class="btn label btn-sm btn-outline-info" type="button">Jasa Epoxy Lantai</button>
        <h1 class="">Aplikator Cat Epoxy Terpercaya</h1>
        <p class="">Dipercaya dalam pekerjaan pengaplikasian cat epoxy untuk lantai rumah dan perusahaan.</p>
        <a class="btn hub btn-outline-info me-2" href="#about">Tentang Kami</a>
        <button class="btn hub btn-outline-info" type="button">Cek Harga</button>
    </div>
</div>
</div>
    <div class="container"id="about">
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
        <img src="default/asset/img/infocomp.png" width="500" class="img-fluid" alt="">
        </div>
    </div>
    </div>
    <div class="container-fluid">
    <div class="row mt-4 p-3 cardgrup">
    <div class="col-md-3" align="center">
        <div class="card" style="width: 20rem;">
        <img src="default/asset/img/fast.png" class="card-img-top" alt="Illustrasi Cepat">
        <div class="card-body">
            <h1 class="card-title">Pengerjaan Cepat</h1>
            <h2 class="karyawan"><span style="color: var(--blue);">+30 </span>Karyawan</h2>
            <p class="card-text">Kami siap memberikan pelayanan prima dalam melakukan pengecatan epoxy lantai.</p>
            <a href="#" class="btn btn-primary">Lihat Portofolio</a>
        </div>
        </div>
    </div>
    <div class="col-md-3" align="center">
        <div class="card" style="width: 20rem;">
        <img src="default/asset/img/cheap.png" class="card-img-top" alt="Illustrasi Murah">
        <div class="card-body">
            <h1 class="card-title">Harga Juara</h1>
            <h2 class="karyawan"><span style="color: var(--blue);">Rp. 60.000 </span>per Meter</h2>
            <p class="card-text">Kami memberikan kualitas yang terjamin dengan ketebalan 300 Micron</p>
            <a href="#" class="btn btn-primary">Lihat Katalog Harga</a>
        </div>
        </div>
    </div>
    <div class="col-md-3" align="center">
        <div class="col-md-12">
            <br><br>
        <h1 class="moto">Moto Kami</h1>
        <h2 class="titleside">Kami Memberikan Layanan Terbaik</h2>
        <p class="sidepar">Terjangkau bukan berarti tidak berkualitas, kami memiliki tenaga yang andal, alat yang memadai serta kualitas bahan yang sesuai dengan standar.</p>
        <a href="#" class="btn btn-primary">Lebih Jauh</a>
        </div>
        </div>
    </div>
    </div>
    <div class="container-fluid">
    <div class="row mt-4 p-3 progrup justify-content-center">
        <div class="col-md-12">
        <a class="company">Perusahaan Kami</a>
        <h2 class="jasa">Jasa yang Kami Tawarkan</h2>
        <p class="rightman">The Right Man on The Right Job</p>
        </div>
        <div class="card rounded-3 border-0" style="width: 18rem;">
        <img src="default/asset/img/paint.png" class="card-img-top mt-3" alt="...">
        <div class="card-body">
            <h5 class="card-title">Epoxy Lantai</h5>
            <p class="card-text">Sudah termasuk Jasa, Peralatan, Man Power, dan Bahan.</p>
        </div>
        </div>
    </div>
    </div>

    <div class="container">
    <div class="row mt-4 p-3 terhubung">
        <div class="col-md-6">
        <a class="company">Mari Mendekat</a>
        <h2 class="jasa">Mudah Terhubung Dengan Kami</h2>
        <p class="rightman">Untuk detail lebih lanjut anda bisa hubungi kami untuk mendapatkan kalkulasi yang cocok dengan kebutuhan anda.</p>
        <a class="btn hab me-2" href="https://wa.me/085283152547" type="button"><i class="lab la-whatsapp la-2x me-2"></i>Whatsapp</a>
        <a class="btn hab me-2" href="mailto:tangguhlaksana0@gmail.com" type="button"><i class="las la-envelope la-2x me-2"></i>Email</a>
        </div>
        <div class="col-md-6">
        <img src="default/asset/svg/comtac.svg" alt="">
        </div>
    </div>
    </div>
    @include('global.slider')
@endsection
