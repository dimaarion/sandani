@props(['h2'=>'В услугу входят','advantages'=>[['alt' => 'txt','h5'=>'h5','img' => '/storage/img/advantages/demontag.png',
'txt' => ['txt']]]])
<div class="section no-bg">
    <div class="container">
        <h2 class="text-center">{{$h2}}</h2>
        <div class="row row-cols-1 row-cols-md-4 g-4">
            @foreach ($advantages as $item)
                <div class="col">
                    <div class="h-100">
                        <div class="d-flex col-sm  justify-content-center pb-4">
                            <div class="col-4">
                                <img src="{{ $item['img'] }}" class="w-100" alt="{{ $item['alt'] }}">
                            </div>
                        </div>
                        <div class="card-body">
                            @isset($item['h5'])
                                <h5 class="text-center">{{ $item['h5'] }}</h5>
                            @endisset
                            @isset($item['txt'])
                                @foreach ($item['txt'] as $txt)
                                    <div class="col-sm">
                                        <p class="text-left">{{$txt}}</p>
                                    </div>
                                @endforeach
                            @endisset

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
