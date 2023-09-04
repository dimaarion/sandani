<x-hom>
    <x-slot name="header">
        @include('head')
    </x-slot>
    <x-slot name="body">
        <header>
            @include('menu')
        </header>
        <article>
            <div class="section no-bg imagesContainer">
                <div class="container">
                    <h1 class="text-center">Сертификаты</h1>
                    <h4 class="text-center">ООО «Сандани» дает гарантию на свою продукцию и предоставляет все
                        необходимые лицензии и сертификаты.</h4>
                    <div class="row col-sm d-flex  justify-content-center">
                        @foreach ($sertifikati as $key => $value)
                            <div class="col-sm-3 m-2 shadow p-3 mb-5 bg-body rounded">
                                <img class="w-100 " src="{{ $value['src'] }}" alt="{{ $value['alt'] }}">
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </article>
    </x-slot>
</x-hom>
