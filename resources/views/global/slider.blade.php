<div class="container-fluid">
    <div class="row mt-4 p-3 progrup">
        <div class="col-md-12">
            <a class="company">Mari Mendekat</a>
            <h2 class="jasa">Mudah Terhubung Dengan Kami</h2>
        </div>
        <div id="carouselExampleCaptions" class="carousel slide rounded-3" data-bs-ride="carousel">
            <div class="carousel-indicators">
            <?php $c=0; ?>
            @foreach ($slider as $s)
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="{{ $c }}" class="{{ $c==0?'active':''}}" aria-label="Slide {{ $c+1 }}"></button>
            <?php $c++ ?>
            @endforeach
            </div>
            <div class="carousel-inner">
            <?php $c=0; ?>
            @foreach ($slider as $s)
            <div class="carousel-item {{ $c==0?'active':''  }}">
                <img src="{{ url('images/slider/'.$s->image) }}" class="d-block w-100 rounded-3" alt="...">
                <div class="carousel-caption d-none d-md-block">
                <h5>{{ $s->title }}</h5>
                <p>{{ $s->text }}</p>
                </div>
            </div>
            <?php $c++ ?>
            @endforeach
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
    </div>
