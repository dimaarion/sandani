@include('modal')
<footer>
    @if (!request()->routeIs('Контакты'))
        <div class="section">
            <div class="container">
                <h2 class="text-center">Контакты</h2>
                <div class="row mt-5">
                    <div class="col-sm">

                        <p>ООО "Сандани" — это лучшие профили ПВХ в Приднестровье по доступным ценам !<br>
                            <br>
                            Звоните в любое удобное время. Наши квалифицированные консультанты знают все о пластиковых
                            окнах. Любая информация: оперативно и бесплатно!
                        </p>
                        <h3 class="h3">Наш офис:</h3>
                        <p>Приднестровье, г.Бендеры, ул. Тираспольская, 14</p>
                        <p>
                            <strong>Бендеры</strong> 0 (552) 2-46-49, 0 (777) 2-94-10<br>
                            <strong>Тирасполь, Днестровск</strong> 0 (777) 4-06-10<br>
                            <strong>Рыбница, Дубоссары</strong> 0 (778) 5-58-40; 079-638-900
                        </p>
                        <p>Время работы</p>
                        <p>Понедельник - Суббота, с 9.00 до 15.00</p>
                        <p>&nbsp;</p>
                        <h3 class="h3">Производство:</h3>
                        <p>Приднестровье, г.Бендеры, ул. Ленинградская, 21</p>

                    </div>
                    <div class="col-sm map-main">
                        <div id="tabs">
                            <ul class="tabs-nav nav nav-tabs">
                                <li class=""><a class="nav-link active" href="#tab-1"><b>Офис</b></a></li>
                                <li class=""><a class="nav-link" href="#tab-2"><b>Производство</b></a></li>
                            </ul>
                            <div class="tabs-items">
                                <div class="tabs-item" id="tab-1">
                                    <div class="tabs-item">Приднестровье, г.Бендеры, ул. Тираспольская, 14</div>
                                    <div class="col-sm h-100 mt-2">
                                        <div id="map"></div>
                                    </div>
                                </div>
                                <div class="tabs-item" id="tab-2">
                                    <div class="tabs-item">Приднестровье, г.Бендеры, ул. Ленинградская, 21</div>
                                    <div class="col-sm h-100 mt-2">
                                        <div id="map2"></div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    @endif
    <div id="scroll-top" class="noVid"><i class="bi bi-arrow-up-square-fill text-secondary "></i></div>
    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container">
            <div class="navbar-brand ">
                <a class="nav-link" href="/">
                    <img src="/storage/img/logo-footer.png" class="logo-f"
                         alt="ооо Сандани Окна и двери - Salamander">
                </a>
                <div class="col-sm  pt-3 text-color-f">
                    <div class="row">
                        <div class="col-2 p-0">
                            <a href="https://wa.me/37377729410" target="_blanck">
                                <img class="icon-s rounded " src="/storage/img/icon/icon-whatsapp.png">
                            </a>
                        </div>
                        <div class="col-2 p-0">
                            <a href="https://msng.link/o/?37377729410=vi" target="_blanck">
                                <img class="icon-s rounded " src="/storage/img/icon/icon-viber.png"/>
                            </a>
                        </div>
                    </div>

                </div>


            </div>
            <div class="col-sm-5 navbar-nav">
                <ul class="nav fs-6 ">
                    <li class="nav-item ">
                        <a class="nav-link active " href="{{ route('Услуги') }}">Услуги</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link " href="{{ route('Контакты') }}">Контакты</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{ route('Производство') }}">Производство</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link " href="{{ route('Сертификаты') }}">Сертификаты</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link " href="{{ route('Дилерам') }}">Дилерам</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link " href="{{ route('Отзывы') }}">Отзывы</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link " href="{{ route('Калькулятор онлайн') }}">
                            Калькулятор расчета окон
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link " href="{{ route('Рассрочка') }}">
                            Рассрочка и кредит
                        </a>
                    </li>
                </ul>


            </div>

            <div class="navbar-text text-success">
                <div class="row">
                    <div class="col-sm-1"><i class="bi bi-geo-alt-fill"></i></div>
                    <div class="col-sm  p-0 text-color-f">
                        <p>Приднестровье, г.Бендеры, ул. Тираспольская, 14 <br>
                            Приднестровье, г.Бендеры, ул. Ленинградская, 21</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-1"><i class="bi bi-phone"></i></div>
                    <div class="col-sm  p-0 text-color-f">
                        <p>0 (373) 77-729-410<br>
                            0 (552) 2-46-49<br>
                            0 (373) 69-005-442
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-1"><i class="bi bi-envelope-fill"></i></div>
                    <div class="col-sm  p-0 text-color-f">
                        <p>19197908an@mail.ru</p>
                    </div>
                </div>

                <button type="button" data-type="main" data-name=" Отправить заявку" class="btn btn-success"
                        data-bs-toggle="modal" data-bs-target="#mainModal">
                    Перезвоните мне
                </button>
            </div>

        </div>


    </nav>
    <div class="text-center bg-dark p-3 fs-5 text-color-f"> @ OOO Сандани 1996 - 2022 г.</div>
</footer>

