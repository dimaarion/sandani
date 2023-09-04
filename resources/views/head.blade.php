    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="yandex-verification" content="942cd07c7d035d3f"/>
    <link rel="icon" href="https://sandani.ru/storage/img/favicon.ico" type="image/x-icon">


    <!-- Fonts -->

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="{{ asset('/css/bootstrap.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/slider/dist/css/slider-pro.min.css') }}" media="screen"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('/slider/libs/fancybox/jquery.fancybox.css') }}"
          media="screen"/>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jquerymobile/1.4.5/jquery.mobile.min.css">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.13.2/themes/smoothness/jquery-ui.css">
    <link href="{{ asset('/css/index.css') }}" rel="stylesheet">


    <!-- Styles -->
    @foreach ($menu as $item)
        @if (request()->routeIs($item['names']))
            <title>{{ $item['title'] }}</title>
            <meta name="keywords" content="{{ $item['keywords'] }}">
            <meta name="description" content="{{ $item['description'] }}">
            <link rel="canonical" href="https://sandani.ru/{{$item['alias']}}"/>
        @endif
        @foreach ($item['cild'] as $parent)
            @if (request()->routeIs($parent['names']))
                <title>{{ $parent['title'] }}</title>
                <meta name="keywords" content="{{ $parent['keywords'] }}">
                <meta name="description" content="{{ $parent['description'] }}">
                <link rel="canonical" href="https://sandani.ru/{{$parent['alias']}}"/>
            @endif
        @endforeach
    @endforeach
    @if (request()->routeIs('Калькулятор онлайн'))
        <title>Калькулятор расчета окон</title>
        <meta name="keywords" content="калькулятор">
        <meta name="description" content="Расчитать стоимость окон онлайн ооо Сандани - Salamander ">
        <link rel="canonical" href="https://sandani.ru/calculator.html"/>
    @elseif(request()->routeIs('Рассрочка'))
        <title>Пластиковые окна и двери в рассрочку без переплат в Приднестровье</title>
        <meta name="keywords" content="рассрочка, кредит">
        <meta name="description" content="Самые выгодные условия рассрочки в Приднестровье, все виды окон и дверей по выгодным ценам.">
        <link rel="canonical" href="https://sandani.ru/rassrochka"/>
    @endif

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"></script>
    <script type="text/javascript" src="{{ asset('/slider/libs/jquery-1.11.0.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/slider/dist/js/jquery.sliderPro.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/slider/libs/fancybox/jquery.fancybox.pack.js') }}"></script>
    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;apikey=00a3af1a-8f87-4d95-9469-6b617cfb9dbc"
            type="text/javascript"></script>
    <script src="{{ asset('/js/app.js') }}" defer></script>
    <script src="{{ asset('/js/index.js') }}" defer></script>

    @if (request()->routeIs('Главная') || request()->routeIs('Калькулятор онлайн') || request()->routeIs('Рассрочка'))
        <script defer="defer" src="/static/js/main.07e52ef1.js"></script>
        <link href="/static/css/main.0f4f5e13.css" rel="stylesheet">
    @endif
    @if ($_SERVER['HTTP_HOST'] == 'sandani.ru')
    <!-- Yandex.Metrika counter -->
        <script type="text/javascript">
            (function (m, e, t, r, i, k, a) {
                m[i] = m[i] || function () {
                    (m[i].a = m[i].a || []).push(arguments)
                };
                m[i].l = 1 * new Date();
                for (var j = 0; j < document.scripts.length; j++) {
                    if (document.scripts[j].src === r) {
                        return;
                    }
                }
                k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
            })
            (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

            ym(91390101, "init", {
                clickmap: true,
                trackLinks: true,
                accurateTrackBounce: true,
                webvisor: true
            });
        </script>

        <!-- /Yandex.Metrika counter -->
    @endif

