<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Меню') }}
    </h2>
  </x-slot>
  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
          <form method="POST" action="{{ route('menu') }}">
            @csrf
            <button type="submit" name = "menu_create" value="menu_create" class="btn border-gray-300 btn-light">
              Добавить пункт меню
            </button>
            <div class="accordion accordion-flush" id="accordionMenu">
            @foreach ($menu as $item)
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-heading{{$item->id}}">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse{{$item->id}}" aria-expanded="false" aria-controls="flush-collapse{{$item->id}}">
                  {{$item->names}}
                </button>
              </h2>
              <div id="flush-collapse{{$item->id}}" class="accordion-collapse collapse" aria-labelledby="flush-heading{{$item->id}}" data-bs-parent="#accordionMenu">
                <div class="accordion-body">
                  <div class="container border border-secondary mb-3 p-2">
                    <div class="row">
                      <div class="col-sm"></div>
                      <div class="col-sm">
                        <label class="form-select-label" for = "menu_select{{ $item->id }}">Родительский пункт</label>
                        <select class="form-select-sm" name="menu_select{{ $item->id }}"  aria-label="Пример выбора по умолчанию">
                            @if($item->parent == 0)
                            <option selected value="0">Нет</option>
                            @endif
                            @foreach ($menu as $select)
                            @if($select->id == $item->parent)
                            <option selected value="{{ $select->id }}">{{ $select->names }}</option>
                            <option  value="0">Нет</option>
                            @else
                            @endif
                            <option value="{{ $select->id }}">{{ $select->names }}</option>
                            @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm">
                        <label for="menu_names{{ $item->id }}" class="form-label">Название</label>
                        <input type="text" name="menu_names{{ $item->id }}" class="form-control"
                        value="{{ $item->names}}" id="menu_names{{ $item->id }}"/>
                        <label for="menu_title{{ $item->id }}" class="form-label">Заголовок страницы</label>
                        <input type="text" name="menu_title{{ $item->id }}" class="form-control"
                        value="{{ $item->title}}" id="menu_title{{ $item->id }}"/>
                      </div>
                      <div class="col-sm">
                        <label for="menu_alias{{ $item->id }}" class="form-label">Адрес</label>
                        <input type="text" name="menu_alias{{ $item->id }}" class="form-control"  value="{{ $item->alias }}" id="menu_alias{{ $item->id }}">
                        <label for="menu_keywords{{ $item->id }}" class="form-label">Ключевые слова</label>
                        <input value="{{$item->keywords}}" type="text" name="menu_keywords{{ $item->id }}" class="form-control"  id="menu_keywords{{ $item->id }}">
                      </div>
                    </div>
                    <div class="col-sm">
                      <label for="menu_description{{ $item->id }}" class="form-label">Краткое описание</label>
                      <textarea type="text" name="menu_description{{ $item->id }}" class="form-control" id="menu_description{{ $item->id }}">{{ $item->description }}</textarea>
                    </div>
                    <button type="submit" name = "menu_save" value="{{ $item->id }}" class="btn border-gray-300 btn-light">
                      Сохранить
                    </button>
                    <button type="submit" name = "menu_delete" value="{{ $item->id }}" class="btn border-gray-300 btn-light">
                      Удалить
                    </button>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

</x-app-layout>
