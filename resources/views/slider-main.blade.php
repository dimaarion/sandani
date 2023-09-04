<div id="carouselExampleInterval" class="carousel slide gallery" data-bs-ride="carousel">

    <div class="carousel-inner">
        @foreach ($gallery as $item => $value)
        <div class="carousel-item @if($loop->iteration == 1) active @endif" data-bs-interval="10000">
            <img src="{{$value['src']}}" class="d-block w-100" alt="{{$value['alt']}}">
        </div>
        @endforeach
    </div>
    <button class="btn carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon bg-arrow" aria-hidden="true"></span>
        <span class="visually-hidden">Предыдущий</span>
    </button>
    <button class="btn  carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
        data-bs-slide="next">
        <span class="carousel-control-next-icon bg-arrow" aria-hidden="true"></span>
        <span class="visually-hidden">Следующий</span>
    </button>
</div>
