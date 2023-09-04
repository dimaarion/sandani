<x-hom>
    <x-slot name="header">
        @include('head')
    </x-slot>
    <x-slot name="body">
<header>
     @include('menu')
</header>
<article>
<div class="section no-bg">
        <div class="container">
            <h1 class="text-center">Контакты</h1>
            <div class="row mt-5">
                <div class="col-sm">
                    <div class="text-sm-left"  id="content">
                    <p>ООО "Сандани" — это лучшие профили ПВХ в Приднестровье по доступным ценам !<br>
                        <br>
                        Звоните в любое удобное время. Наши квалифицированные консультанты знают все о пластиковых окнах. Любая информация: оперативно и бесплатно!
                    </p>
                    <h3>Наш офис:</h3>
                    <p>Приднестровье, г.Бендеры, ул. Тираспольская, 14</p>
                    <p>
                        <strong>Бендеры</strong> 0 (552) 2-46-49, 0 (777) 2-94-10<br>
                        <strong>Тирасполь, Днестровск</strong> 0 (777) 4-06-10<br>
                        <strong>Рыбница, Дубоссары</strong> 0 (778) 5-58-40; 079-638-900
                    </p>
                    <p>Время работы</p>
                    <p>Понедельник - Суббота, с 9.00 до 15.00</p>
                    <p>&nbsp;</p>
                    <h3>Производство:</h3>
                    <p>Приднестровье, г.Бендеры, ул. Ленинградская, 21</p>
                </div>
            </div>
            <div class="col-sm map-main">
                <div id="tabs">
                    <ul class="tabs-nav nav nav-tabs">
                        <li class="nav-item"><a class="nav-link active" href="#tab-1"><b>Офис</b></a></li>
                        <li class="nav-item"><a class="nav-link" href="#tab-2"><b>Производство</b></a></li>
                    </ul>
                    <div class="tabs-items">
                        <div class="tabs-item" id="tab-1">
                            <div class="tabs-item">Приднестровье, г.Бендеры, ул. Тираспольская, 14</div>
                            <div class="col-sm h-100 mt-2"><div id="map"></div></div>
                        </div>
                        <div class="tabs-item" id="tab-2">
                            <div class="tabs-item">Приднестровье, г.Бендеры, ул. Ленинградская, 21</div>
                            <div class="col-sm h-100 mt-2"><div id="map2"></div></div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
</article>
    </x-slot>
</x-hom>
