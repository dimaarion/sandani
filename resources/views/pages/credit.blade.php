<x-hom>
    <x-slot name="header">
        @include('head')
    </x-slot>
    <x-slot name="body">
        <header>
            @include('menu')
        </header>
        <article>

            <div class="credit-percent col-3 bg-danger  position-absolute z-1 shadow p-3 mb-5 rounded">
                <div class="text-center text-white mt-lg-5">Рассрочка</div>
                <div class="text-center text-white">0%</div>
            </div>
            <x-block-header img="/storage/img/credit.png" h1="Рассрочка и кредит"
                            text="Фирма ооо Сандани предоставляет пластиковые окна, двери, ролетные системы, закаленные стекла, офисные перегородки в рассрочку без процентов и предоплаты."/>

            <div class="section no-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-2">
                            <img class="w-100" src="/storage/img/icon/APB_logo.png" alt="Агропромбанк рассрочка">
                        </div>
                        <div class="col">
                            <p>
                                Агропромбанк предоставляет услугу рассрочки по карте на покупку пластиковых окон и
                                дверей, которая позволяет клиентам приобрести товары в рассрочку без переплаты
                                процентов.
                            </p>
                            <p>
                                Услуга рассрочки по карте позволяет клиентам сэкономить на процентах, так как они
                                оплачивают только стоимость товара в течение определённого периода времени. Кроме&nbsp;того,
                                это удобный способ покупки, который позволяет планировать свои расходы и не
                                переплачивать за кредит.
                            </p>
                            <p>
                                Чтобы воспользоваться этой услугой, необходимо оформить:
                            </p>
                            <p>
                                &nbsp;— Карту «Клевер», на которую поступает заработная плата или пенсия.<br>&nbsp;—
                                Кредитную карту Агропромбанка «Клевер».
                            </p>
                            <p>
                                Узнать свой лимит по рассрочке можно:
                            </p>
                            <p>
                                &nbsp;— в Мобильном приложении или Интернет-Банке.<br>&nbsp;— по телефону контакт центра
                                Агропромбанка 16–61, назвав Кодовое слово.<br>&nbsp;— обратившись с паспортом к
                                специалисту Банка.
                            </p>
                            <p>
                                <b>
                                    Рассрочка предоставляется без дополнительных выплат и предоплат.
                                </b>
                            </p>
                        </div>
                    </div>

                </div>
            </div>

            <div class="section">
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
            <div class="section no-bg">
                <h2 class="text-center">Калькулятор расчета стоимости окон</h2>
                <div id="container"></div>
            </div>
        </article>
    </x-slot>
</x-hom>
