<x-hom>
    <x-slot name="header">
        @include('head')
    </x-slot>
    <x-slot name="body">
        <header>
            @include('menu')
        </header>
        <article>
            <x-block-header img="\storage\img\rolle\roleti2.png" h1="Установка роллетных систем"
                            text="Рольставни делают жизнь комфортной, ограждают своих владельцев от: жары, холода, ветра, дождя, солнечных лучей и любопытных взглядов прохожих. "/>
            <div class="section no-bg">
                <div class="container">
                    <h2 class="text-center">Преимущества использования рольставней &laquo;АЛЮТЕХ&raquo;</h2>
                    <div class="row row-cols-1 row-cols-md-4 g-4">
                        @foreach ($advantages as $item)
                            <div class="col">
                                <div class="h-100">
                                    <div class="d-flex col-sm  justify-content-center pb-4">
                                        <div class="col-4">
                                            <img src="{{ $item['img'] }}" class="w-100" alt="{{ $item['alt'] }}">
                                        </div>
                                    </div>
                                    @foreach ($item['txt'] as $txt)
                                        <div class="card-body">
                                            <div class="col-sm">
                                                <p>{{$txt}}</p>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="section ">
                <div class=" container">
                    <p>
                        Роллетная система (рольставни англ roll&nbsp;&mdash; рулон, рус. ставни)&nbsp;&mdash; это
                        элементы экстерьера, которые устанавливаются в&nbsp;дверные и&nbsp;оконные проемы для снижения
                        уровня шума, и&nbsp;защиты от&nbsp;яркого солнечного света, а&nbsp;также для задержания дорожной
                        пыли и&nbsp;мусора, создания комфортных условий внутри помещения.
                    </p>
                    <p>
                        Установка рольставней на&nbsp;оконные и&nbsp;дверные проемы обеспечивает надежную защиту вашего
                        дома или квартиры. Современные роллетные системы не&nbsp;только прочны и&nbsp;надежны, но&nbsp;также
                        долговечны и&nbsp;устойчивы к&nbsp;различным климатическим условиям. <br>
                        Для их&nbsp;производства используются лучшие материалы 21&nbsp;века, а&nbsp;оборудование и&nbsp;технология
                        их&nbsp;изготовления
                        проверены временем и&nbsp;сертифицированы знаком качества.
                    </p>

                </div>
            </div>
            <div class="section no-bg">
                <div class=" container">
                    <h2 class="text-center">Рольставни «АЛЮТЕХ» Prestige</h2>
                    <div class="col-sm">
                        <h5>Рольставни Prestige предлагают ряд дизайнерских решений, которые создадут в вашем доме
                            уютную и
                            комфортную атмосферу для отдыха или работы.</h5>
                        <div class="row row-cols-1 row-cols-md-4 g-4">
                            @foreach ($alytex as $item)
                                <div class="col">
                                    <div class="h-100">
                                        <div class="d-flex col-sm  justify-content-center pb-4">
                                            <div class="col-4">
                                                <img src="{{ $item['img'] }}" class="w-100" alt="{{ $item['alt'] }}">
                                            </div>
                                        </div>
                                        @foreach ($item['txt'] as $txt)
                                            <div class="card-body">
                                                <div class="col-sm">
                                                    <p>{{$txt}}</p>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <div class="row row-cols-1 row-cols-md-2 g-3">
                            <div class="col">
                                <div class="card h-100">
                                    <div class="overflow-hidden h-300">
                                        <img class="card-img-top"
                                             src="{{asset('/storage/img/rolle/rolle-pogoda.jpg')}}">
                                    </div>
                                    <div class="card-body ">
                                        <h4 class="card-title">Защита от холода и жары</h4>
                                        <p class="card-text">Комфортная среда в&nbsp;помещении круглый год, снижение
                                            затрат на&nbsp;электроэнергию и&nbsp;отопление.</p>

                                    </div>
                                </div>
                            </div>
                            <div class="col ">
                                <div class="card h-100">
                                    <div class="overflow-hidden h-300">
                                        <img class="card-img-top"
                                             src="{{asset('/storage/img/rolle/rolle-bezopasnost.jpg')}}">
                                    </div>
                                    <div class="card-body ">
                                        <h4 class="card-title">Высокая прочность и ветроустойчивость</h4>
                                        <p class="card-text">Роллеты устойчивы к&nbsp;различным погодным условиям,
                                            порывам ветра скоростью до&nbsp;37&nbsp;м/с.</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <h3 class="text-center mt-3">Технические характеристики
                        Роллеты Prestige могут быть изготовлены из профиля AR/40 либо AR/555</h3>
                    <div class="row row-cols-1 row-cols-md-2 g-3">
                        <div class="d-flex col-sm  justify-content-center">
                            <div class="col-sm-4 ">
                                <img class="card-img-top" src="{{asset('/storage/img/rolle/ar40.jpg')}}">
                            </div>
                        </div>
                        <div class="col">
                            <div class="d-flex col-sm  justify-content-center">
                                <div class="col-sm-4 ">
                                    <img class="card-img-top" src="{{asset('/storage/img/rolle/ar555.jpg')}}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row row-cols-1 row-cols-md-2 g-3">
                        <div class="col-sm">
                            <h4>Роллеты из профиля AR/40</h4>
                            @foreach($profile['ar40'] as $item)
                                <div class="row mt-3">
                                    <div class="col-sm">
                                        {{$item['title']}}
                                    </div>
                                    <div class="col-sm">
                                        {{$item['descriptor']}}
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="col">
                            <h4>Роллеты из профиля AR/555</h4>
                            @foreach($profile['ar555'] as $item)
                                <div class="row mt-3">
                                    <div class="col-sm">
                                        {{$item['title']}}
                                    </div>
                                    <div class="col-sm">
                                        {{$item['descriptor']}}
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </article>
    </x-slot>
</x-hom>




