@props(['img'=>'\storage\img\rolle\roleti2.png','h1'=>'h1','text'=>'text'])
<div class="card overflow-hidden">
    <img src="{{$img}}" class="card-img" alt="{{$h1}}">
    <div class="card-img-overlay">
        <div class="container">
            <div class="row">
                <div class="col-sm d-block-header">
                    <h1 class="card-title">{{$h1}}</h1>
                    <p>
                        {{$text}}
                    </p>
                </div>
                <div class="col-sm-8"></div>
            </div>

        </div>

    </div>
</div>
