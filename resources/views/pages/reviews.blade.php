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
                    <h1 class="text-center">Отзывы наших клиентов</h1>
                    <button type="button" data-type="main" data-name="Отправить отзыв" class="btn btn-success"
                            data-bs-toggle="modal" data-bs-target="#reviewsModal">
                        Отправить отзыв
                    </button>
                    <div class="row mt-3 ">
                        @foreach ($reviews as $item)
                            @if ($item->display != 0)
                                <div class="col-sm-6 mb-4">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="row">
                                                <div class="col-sm">
                                                    <h5 class="card-title">{{ $item->name }}</h5>
                                                </div>
                                                <div class="col-sm text-end">
                                                    <b>{{ $item->date }}</b>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="card-body">
                                            {{ $item->text }}
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>

                <div class="modal fade" id="reviewsModal" tabindex="-1" aria-labelledby="reviewsModalLabel"
                     aria-hidden="true">
                    <form method="POST" action="/reviews.php">
                        @csrf
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="reviewsModalLabel">Отправить отзыв</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Закрыть"></button>
                                </div>
                                <div id="reviews_form">
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label for="reviews_name" class="form-label">Ваше имя</label>
                                            <input type="text" class="form-control" name="reviews_name"
                                                   id="reviews_name"
                                                   aria-describedby="helpId" placeholder="Ваше имя">
                                            <div id="reviews_name" class="invalid-feedback">
                                                Пожалуйста, напишите ваше имя.
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="reviews_text" class="form-label">Отзыв</label>
                                            <textarea class="form-control" name="reviews_text" id="reviews_text"
                                                      rows="8"></textarea>
                                            <div id="reviews_text" class="invalid-feedback">
                                                Пожалуйста, напишите отзыв.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" name="reviews_save" id="reviews_save" value="save"
                                                class="btn btn-success">Отправить
                                        </button>
                                    </div>
                                </div>
                                <div id="reviews_shipped" class="text-center">
                                    <h3>Спасибо !</h3>
                                    <p>После проверки модератором Ваш отзыв будет опубликован.</p>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </article>
    </x-slot>
</x-hom>
