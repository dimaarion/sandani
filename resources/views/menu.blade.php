<nav id="navbar" class="navbar navbar-expand-lg bg-light ">

    <div id="navbar-container-menu" class="container">
        <nav id="navbar-mob-top" class="navbar navbar-light bg-light">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent"
                    aria-expanded="false" aria-label="Переключатель навигации">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>
        <a class="navbar-brand" href="/">
            <img src="{{ asset('/storage/img/logo-sandani.png') }}" class="logo" alt="ооо sandani Окна и двери">
        </a>
        <div id="menu" class="menu-top">
            <ul class="navbar-nav">
                @if (isset($menu))
                @foreach ($menu as $item)
                @if($item['names'] != "")
                    <li class="nav-item  @if (request()->routeIs($item['names'])) active @endif">

                        <a class="nav-link "   href="/@if($item['alias'] != '/'){{$item['alias'] }}@endif">{{ $item['names'] }}</a>

                        <div></div>
                        <ul class="nav-item">
                            @foreach ($item['cild'] as $cild)
                                <li class="pod nav  @if (request()->routeIs($cild['names'])) active @endif">
                                    <a class="nav-link pb-0 pl-0 ml-0 "
                                    href="/{{$cild['alias'] }}">{{ $cild['names'] }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    @endif
                @endforeach
                @endif
            </ul>
        </div>
        <div class="navbar-text" id="navbar-btn">
            <x-button-modal data-type="main" data-name="Отправить заявку на бесплатный замер">
                {{ __(' Вызов замерщика') }}
            </x-button-modal>
            <ul class="navbar-nav justify-content-center">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle fs-5 link-danger text-danger" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        0 (777) 2-94-10
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="tel:055224649">0 (552) 2-46-49</a></li>
                        <li><a class="dropdown-item" href="tel:037377729410">0 (373) 77-729-410</a></li>
                        <li><a class="dropdown-item" href="tel:037369005442">0 (373) 69-005-442</a></li>
                    </ul>
                </li>
            </ul>
        </div>

    </div>
</nav>
<div class="fixed-top collapse" id="navbarToggleExternalContent" style="">
    <div id="collapse-mob" class="bg-light p-4">
        <nav id="navbar-mob" class="navbar navbar-light bg-light">
            <div class="justify-content-end">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent"
                    aria-expanded="true" aria-label="Закрыть мобильное меню">
                    <i class="bi bi-x-lg"></i>
                </button>
            </div>
        </nav>
        <div id="menu-mob" class="menu-mob">
            <ul class="navbar-nav">
                @if (isset($menu))
                    @foreach ($menu as $item)
                        <li class="nav-item  @if (request()->routeIs($item['names'])) active @endif">

                            <a class="nav-link "
                                href="/@if($item['alias'] != '/'){{$item['alias'] }}@endif">{{ $item['names'] }}</a>

                            <div></div>
                            <ul class="nav-item">
                                @foreach ($item['cild'] as $cild)
                                    <li class="pod nav  @if (request()->routeIs($cild['names'])) active @endif">
                                        <a class="nav-link pb-0 pl-0 ml-0 "
                                            href="/{{$cild['alias'] }}">{{ $cild['names'] }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                    @endforeach
                @endif
            </ul>
        </div>
    </div>
</div>
