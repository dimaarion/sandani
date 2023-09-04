<x-hom>
    <x-slot name="header">
        @include('head')
    </x-slot>
    <x-slot name="body">
        <header>
            @include('menu')
        </header>
        <article>
            @include('slider-main')
            <div class="section no-bg">
                <div class="container">
                    <h1 class="text-center">Собственное производство пластиковых окон в Приднестровье</h1>
                    <p>Фирма ООО Сандани с&nbsp;1996&nbsp;г. производит пластиковые окна в&nbsp;Приднестровье без
                        посредников,
                        что позволяет нам быстро и&nbsp;качественно изготовить для вас любые пластиковые конструкции
                        по&nbsp;самым низким ценам. Наша цель состоит в обеспечении качественной продукцией наших
                        заказчиков,
                        внедрение инновационных технологий в&nbsp;технологический процесс. Наша фирма состоит из&nbsp;команды
                        профессионалов высокого уровня, с&nbsp;большим опытом работы в&nbsp;этой сфере и&nbsp;ответственно
                        относящихся к&nbsp;своей работе.
                    </p>
                    <div class="col-1"></div>
                </div>

            </div>

            <div class="section no-bg">
                <div class="container">
                    <h2 class="text-center">Наши приемущества</h2>

                    <div class="row row-cols-1 row-cols-md-3 g-4">
                        @foreach ($advantages as $item)
                            <div class="col">
                                <div class="h-100">
                                    <div class="d-flex col-sm  justify-content-center pb-4">
                                        <div class="col-3">
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
            <div class="section section-effect">
                <div class="container">
                    <h2 class="text-center">Наши услуги</h2>

                    <div class="row row-cols-1 row-cols-md-3 g-4">

                        <div class="col ">
                            <a class="nav-link" href="/ustanovka-plasticovih-okon">
                                <div class="card">
                                    <img src="storage/img/services/ustanovkaOkon.png" class="card-img-top"
                                         alt="Установка пластиковых окон">
                                    <div class="card-body ">
                                        <div class="card-title h-card">
                                            <h4 class="text-center">Установка пластиковых окон</h4>
                                        </div>
                                        <p class="card-text"></p>
                                        <div class="col-sm d-flex justify-content-center h-card-btn">
                                            <div class="btn btn-success  ">
                                                Подробнее
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col ">
                            <a class="nav-link" href="/ustanovka-plasticovih-dverei">
                                <div class="card">
                                    <img src="storage/img/services/ust-dver.png" class="card-img-top"
                                         alt="Установка пластиковых окон">
                                    <div class="card-body ">
                                        <div class="card-title h-card">
                                            <h4 class="text-center">Установка пластиковых дверей</h4>
                                        </div>
                                        <p class="card-text"></p>
                                        <div class="col-sm d-flex justify-content-center h-card-btn">
                                            <div class="btn btn-success  ">
                                                Подробнее
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col ">
                            <a class="nav-link" href="/ustanovka-rolletnih-sistem">
                                <div class="card">
                                    <img src="storage/img/services/roleti.png" class="card-img-top"
                                         alt="Установка пластиковых окон">
                                    <div class="card-body ">
                                        <div class="card-title h-card">
                                            <h4 class="text-center">Установка роллетных систем</h4>
                                        </div>
                                        <p class="card-text"></p>
                                        <div class="col-sm d-flex justify-content-center h-card-btn">
                                            <div class="btn btn-success  ">
                                                Подробнее
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col ">
                            <a class="nav-link" href="/osteklenie_balkonov.html">
                                <div class="card">
                                    <img src="storage/img/services/osteclenie_balconov.png" class="card-img-top"
                                         alt="Установка пластиковых окон">
                                    <div class="card-body" data-link="/osteklenie_balkonov">
                                        <div class="card-title h-card">
                                            <h4 class="text-center">Остекление балконов</h4>
                                        </div>
                                        <p class="card-text"></p>
                                        <div class="col-sm d-flex justify-content-center h-card-btn">
                                            <div class="btn btn-success  ">
                                                Подробнее
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col ">
                            <a class="nav-link" href="#">
                                <div class="card">
                                    <img src="storage/img/services/pavilion.png" class="card-img-top"
                                         alt="Установка пластиковых окон">
                                    <div class="card-body ">
                                        <div class="card-title h-card">
                                            <h4 class="text-center">Установка торговых павильонов</h4>
                                        </div>
                                        <p class="card-text"></p>
                                        <div class="col-sm d-flex justify-content-center h-card-btn">
                                            <div class="btn btn-success  ">
                                                Подробнее
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col ">
                            <a class="nav-link" href="/remont_metalloplastikovi_okon.html">
                                <div class="card">
                                    <img src="storage/img/services/remont_okon.png" class="card-img-top"
                                         alt="Установка пластиковых окон">
                                    <div class="card-body ">
                                        <div class="card-title h-card">
                                            <h4 class="text-center">Ремонт пластиковых окон </h4>
                                        </div>
                                        <p class="card-text"></p>
                                        <div class="col-sm d-flex justify-content-center h-card-btn">
                                            <div class="btn btn-success  ">
                                                Подробнее
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>


                    </div>
                </div>
            </div>

            <div class="section no-bg">
                <h2 class="text-center">Калькулятор расчета стоимости окон</h2>
                <div id="container"></div>
            </div>
            <div class="section no-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm text-center">
                            <img class="w-100" src="/storage/img/icon/meashure.png">
                            <h5 class="fw-bold">Бесплатный замер</h5>
                            <p>Сотрудник фирмы ООО Сандани произведет точный замер и
                                расчет стоимости заказа в удобное для Вас время.</p>
                        </div>
                        <div class="col-sm text-center">
                            <img class="w-100" src="/storage/img/icon/card2.png">
                            <h5 class="fw-bold">Рассрочка 0%</h5>
                            <p>Воспользуйтесь беспроцентной рассрочкой сроком от 6 месяцев</p>
                        </div>

                    </div>
                </div>
            </div>
            <div class="section ">
                <div class="container">
                    <h2 class="text-center">Сертификаты</h2>

                    <h4 class="text-center">
                        ООО «Сандани» дает гарантию на свою продукцию и предоставляет все необходимые лицензии и
                        сертификаты.
                    </h4>

                    <div id="sertifikati" class="slider-pro">
                        <div class="sp-slides">
                            @foreach ($sertifikati as $key => $value)
                                <div class="sp-slide shadow p-1 mb-5 bg-body rounded">
                                    <a href="{{ $value['src'] }}">
                                        <img class="sp-image" src="{{ $value['src'] }}" data-src="{{ $value['src'] }}"
                                             data-small="{{ $value['src'] }}" data-medium="{{ $value['src'] }}"
                                             data-large="{{ $value['src'] }}" data-retina="{{ $value['src'] }}"/>
                                    </a>
                                    <p class=""></p>
                                </div>
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>

            <div class="section no-bg">
                <div class="container">
                    <h2 class="text-center">Отзывы наших клиентов</h2>

                    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
                        <div class="carousel-inner">
                            @foreach ($reviews as $key => $value)
                                @if($value->display == 1)

                                    <div class="carousel-item reviews-bl @if ( $loop->iteration == $loop->count) active @endif">
                                        <div class="carousel-caption h-100">
                                            <div class="card border-secondary mb-3 h-100">
                                                <div class="card-header text-dark">
                                                    <div class="row">
                                                        <div class="col-sm text-left">

                                                            <b>{{ $value->name }}</b>
                                                        </div>
                                                        <div class="col-sm">
                                                            <b>{{ $value->date }}</b>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-body  text-secondary text-left">
                                                    <p>{{ $value->text }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach

                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                                data-bs-slide="prev">
                    <span class="bi bi-arrow-left-square" aria-hidden="true">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#333333"
                             class="bi bi-arrow-left-square" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                  d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm11.5 5.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z">
                            </path>
                        </svg>
                    </span>
                            <span class="visually-hidden">Предыдущий</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                                data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#333333"
                             class="bi bi-arrow-right-square" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                  d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm4.5 5.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z">
                            </path>
                        </svg>
                    </span>
                            <span class="visually-hidden">Следующий</span>
                        </button>
                    </div>
                    <div class="text-center"><a class="mt-3 btn btn-success" href="{{ route('Отзывы') }}">Посмотреть все
                            отзывы</a>
                    </div>
                </div>
            </div>
        </article>

    </x-slot>
</x-hom>
