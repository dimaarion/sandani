<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Главная') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div id="tabs">
                        <ul class="tabs-nav nav nav-tabs">
                            <li class="nav-item"><a class="nav-link tabs-target active" href="/#tab-1"><b>Отзывы</b></a></li>
                            <li class="nav-item"><a class="nav-link tabs-target" href="/#tab-2"><b>Заявки</b></a></li>
                        </ul>
                        <div class="tabs-items">
                            <div class="tabs-item" id="tab-1">
                                <h2>Отзывы</h2>
                                <div class=" mt-5">
                                   @foreach ($reviews as $item)                                 
                                
                                        <div class="card mb-3">
                                            <form method="POST" action="/admin">
                                                @csrf
                                                <div class="card-header">
                                                    <div class="row">
                                                        <div class="col-sm">
                                                            <h5 class="card-title"> <input class="form-control" type="text" value="{{$item->name}}" name="reviews_name"></h5>
                                                        </div>
                                                        <div class="col-sm text-end">
                                                            <b><input class="form-control" type="text" value="{{$item->date}}" name="reviews_data"></b>
                                                        </div>
                                                        <div class="col-sm text-end  text-green  text-red ">
                                                            @if ($item->display == 0)
                                                            <b class="text-danger">Не опубликовано</b>
                                                            @else 
                                                                 <b class="text-success">Опубликовано</b>
                                                            
                                                            @endif
                                                           
                                                        </div>
                                                    </div>
                    
                                                </div>
                                                <div class="card-body">
                                                    <textarea class="form-control" name="reviews_text" id="" cols="30" rows="10">{{$item->text}}</textarea>
                                                  
                    
                                                </div>
                    
                    
                    
                    
                                               
                                                <input type="hidden" name="reviews_display" value="@if ($item->display == 0) 1  @else 0  @endif">
                                                <input type="hidden" name="reviews_display_save" value="{{$item->display}}">
                                               
                                               
                                               
                                                <div class="card-footer text-right">
                                                    <div class="d-grid gap-2 d-md-block">
                                                        <button class="btn btn-light border" name="reviews_display_id" value="{{$item->id}}"  type="submit">
                                                            @if ($item->display == 0)
                                                            Публиковать
                                                            @else 
                                                            Не публиковать
                                                            @endif
                                                             </button>
                                                        <button class="btn btn-light border" name="reviews_save" value="{{$item->id}}"  type="submit">Сохранить</button>
                                                        <button class="btn btn-light border" name="reviews_delete" value="{{$item->id}}"  type="submit">Удалить</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        @endforeach
                                </div>
                            </div>
                            <div class="tabs-item" id="tab-2">
                                <h2>Заявки</h2>
                                <div class=" mt-5">
                                    
                                 
                                   @foreach ($application as $item)
                                       
                              
                                        <div class="card mb-3" id = "application_{{$item->id}}">
                                            <div class="card-header">
                                               
                                                    <div class="col-sm">
                                                        <h5 class="card-title">{{$item->date}} / {{$item->time}}</h5>
                                                       
                                                    </div>
                                             
                                                </div>
                                            <div class="card-body">
                                                <p class="card-text"><b>Имя</b>: {{$item->name}}</p>
                                                <p class="card-text"><b>Телефон</b>: {{$item->tel}}</p>
                                            </div>
                                            <form id = "application" method="POST">
                                                @csrf
                                                <div class="card-footer text-right">
                                                    <div class="d-grid gap-2 d-md-block">
                                                        <button class="btn btn-light border" id = "application_delete" name="application_delete" value="{{$item->id}}" type="button">Удалить</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        @endforeach
                                </div>
                            </div>
                    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
