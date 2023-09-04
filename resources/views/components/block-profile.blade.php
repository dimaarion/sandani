@props(['h2'=>'h2', 'profile'=>[
[['name'=>'name','img'=>'/storage/img/profile/wds300.png','imgBrand'=>'/storage/img/profile/wds.png','description'=>['description']],['name'=>'name','img'=>'/storage/img/profile/wds300.png','description'=>['description']],['name'=>'name','img'=>'/storage/img/profile/wds300.png','description'=>['description']]],
[['name'=>'name','img'=>'/storage/img/profile/wds300.png','imgBrand'=>'/storage/img/profile/wds.png','description'=>['description']],['name'=>'name','img'=>'/storage/img/profile/wds300.png','description'=>['description']],['name'=>'name','img'=>'/storage/img/profile/wds300.png','description'=>['description']]],
]])
<div class="section">
    <div class="container">
        <h2 class="text-center">{{$h2}}</h2>
        <div id="carouselExampleIndicators" class="carousel slide"   data-bs-ride="false">
            <div class="carousel-indicators">

                @foreach($profile as $item)
                    @if($loop->index == 0)
                        <button type="button" data-bs-target="#carouselExampleIndicators"
                                data-bs-slide-to="{{$loop->index}}" class="active"
                                aria-current="true" aria-label="Slide {{$loop->iteration}}">
                        </button>
                    @else
                        <button type="button" data-bs-target="#carouselExampleIndicators"
                                data-bs-slide-to="{{$loop->index}}"
                                aria-label="Slide {{$loop->iteration}}">
                        </button>
                    @endif
                @endforeach
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="30000" data-bs-touch="true" >
                    <div class="row  justify-content-center ">
                        @foreach($profile as $item)
                            @if($loop->index == 0)
                                @foreach($item as $val)
                                    <div class="row p-3 col-sm">
                                        <div class="col-sm"></div>
                                        <div class="col-sm-9 overflow-hidden p-0  block-profile">
                                            <div class="bg-profile mt-4">
                                                <div class="position-relative">
                                                    <img class="position-absolute top-0 end-0 " width="100px"
                                                         src="{{$val['imgBrand']}}" alt="{{$val['name']}}"/>
                                                </div>
                                                <img class="w-100" src="{{$val['img']}}" alt="{{$val['name'].'/'.$val['description'][0]}}">
                                            </div>
                                            <div class="footer-profile p-3">
                                                <h5>{{$val['name']}}</h5>
                                                @foreach($val['description'] as $description)
                                                    <div>{{$description}}</div>
                                                @endforeach
                                            </div>
                                        </div>
                                        <div class="col-sm"></div>
                                    </div>
                                @endforeach
                            @endif
                        @endforeach
                    </div>
                </div>
                @foreach($profile as $item)
                    @if($loop->index != 0)
                        <div class="carousel-item" data-bs-interval="30000" data-bs-touch="true" >
                            <div class="row  justify-content-center ">
                                @foreach($item as $val)
                                    <div class="row p-3 col-sm">
                                        <div class="col-sm"></div>
                                        <div class="col-sm-9 overflow-hidden p-0  block-profile">
                                            <div class="bg-profile mt-4">
                                                <div class="position-relative">
                                                    <img class="position-absolute top-0 end-0 " width="100px"
                                                         src="{{$val['imgBrand']}}" alt="{{$val['name']}}"/>
                                                </div>
                                                <img class="w-100" src="{{$val['img']}}" alt="{{$val['name'].'/'.$val['description'][0]}}">
                                            </div>
                                            <div class="footer-profile p-3">
                                                <h5>{{$val['name']}}</h5>
                                                @foreach($val['description'] as $description)
                                                    <div>{{$description}}</div>
                                                @endforeach
                                            </div>
                                        </div>
                                        <div class="col-sm"></div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                <span class="carousel-control-prev-icon bg-arrow" aria-hidden="true"></span>
                <span class="visually-hidden">Предыдущий</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                <span class="carousel-control-next-icon bg-arrow" aria-hidden="true"></span>
                <span class="visually-hidden">Следующий</span>
            </button>
        </div>

    </div>
</div>
