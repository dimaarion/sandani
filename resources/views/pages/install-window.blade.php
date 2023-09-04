<x-hom>
    <x-slot name="header">
        @include('head')
    </x-slot>
    <x-slot name="body">
        <header>
            @include('menu')
        </header>
        <article>
            <x-block-header img="\storage\img\window\headerImg.png" h1="Установка пластиковых окон"
                            text="Монтажная бригада фирмы ООО Сандани быстро и качественно установит пластиковые окна и двери."/>
            <x-block-service :advantages=$advantages/>
                <div class="section">
                    <div class="container">
                        <h2 class="text-center">Фурнитура</h2>
                        <div class="row">
                            <div class="col-sm">
                                <div class="text-center">
                                    <img class="col-7" src="/storage/img/furnitura/maco.png">
                                </div>
                                <p>МАСО – производитель фурнитуры с огромным опытом на рынке комплектующих для окон и
                                    дверей.</p>
                                <p> При эксплуатации окон вся нагрузка ложится на фурнитуру которая должна обеспечивать
                                    их высокую
                                    функциональность и долговечность.</p>
                                <p> Сегодня на мировом рынке существует множество разных производителей фурнитуры среди
                                    которых
                                    особой популярностью пользуется компания Maco.</p>
                            </div>
                            <div class="col-sm">
                                <div class="text-center">
                                    <img class="col-7" src="/storage/img/furnitura/gu.png">
                                </div>
                                <p>Фурнитура G-U обладает высокой функциональностью, удобная регулировка способствует
                                    сохранению
                                    комфортному климату в помещении, а также различные степени защиты от взлома
                                    обеспечат
                                    надежностью, скрытые петли позволяют створкам максимально плотно прижиматься к раме.
                                </p>
                                <p>
                                    Немецкий производитель Gretsch Unitas изготавливает фурнитуру для
                                    пластиковых окон и используется во всех видах зданий, в домах, коттеджах, квартирах,
                                    офисах,
                                    общественных зданий, торговых павильонах.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section no-bg">
                    <div class=" container">
                        <h2 class="text-center">Этапы монтажа пластиковых окон по госту</h2>

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





