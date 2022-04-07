<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
    <a class="navbar-brand" href="#">
        <img src="{{url('asset/img/logo.png')}}" alt="" width="40" height="40" class="d-inline-block me-2">
        Kya Epoxy Prima
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <div class="navbar-nav mx-auto">
        <a class="nav-link {{  Request::segment(1) == '' ? 'active':'' }}" aria-current="page" href="{{url('/')}}">Home</a>
        <a class="nav-link {{  Request::segment(1) == 'harga' ? 'active':'' }}" href="{{url('harga')}}">Harga</a>
        <a class="nav-link" href="#">Portofolio</a>
        <a class="nav-link" href="#">Kontak</a>
        </div>
        <button class="btn hub btn-outline-info me-2" type="button">Hubungi Kami</button>
    </div>
    </div>
</nav>