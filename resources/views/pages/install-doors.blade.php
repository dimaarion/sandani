<x-hom>
    <x-slot name="header">
        @include('head')
    </x-slot>
    <x-slot name="body">
        <header>
            @include('menu')
        </header>
        <article>
            <x-block-header img="/storage/img/door/headerImg.png" h1="Установка пластиковых дверей"
                            text="Выбирая пластиковые двери для дома, офиса или квартиры, вы получаете возможность оптимизировать пространство и эффектно дополнить стиль интерьера."/>
            <x-block-service :advantages=$advantages/>
                <x-block-profile h2="Дверные системы" :profile="$profile"/>
                <div class="section no-bg">
                    <div class=" container">
                        <h2 class="text-center">Этапы монтажа пластиковых дверей по госту</h2>
                        @foreach($stagesWork as $item)
                            <div class="row mb-5">
                                <div class="row col-sm">
                                    <div class="col-1 text-center" style="width: 70px">
                                        <div class="circle border  mt-1">
                                            <div>{{$loop->iteration}}</div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <h5 class="card-title text-left">{!! $item['title'] !!}</h5>
                                        <p class="card-text">{!! $item['txt'] !!}</p>
                                    </div>
                                </div>

                            </div>

                        @endforeach
                    </div>
                </div>
        </article>
    </x-slot>
</x-hom>




