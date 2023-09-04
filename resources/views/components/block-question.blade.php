@props(['questions'=>[
[
'question'=>'question',
'answer'=>['answer']
]
]])
<div class="section">
    <div class="container">
        <h2 class="text-center">Вопросы и ответы</h2>
        <div class="col-sm d-flex justify-content-center">
            <div class="accordion accordion-flush col-sm-8" id="accordionFlushExample">
                @foreach($questions as $key => $item)
                    <div class="accordion-item mb-3">
                        <h5 class="accordion-header" id="flush-heading{{$key}}">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapse{{$key}}" aria-expanded="false"
                                    aria-controls="flush-collapse{{$key}}">
                                {{$item['question']}}
                            </button>
                        </h5>
                        <div id="flush-collapse{{$key}}" class="accordion-collapse collapse"
                             aria-labelledby="flush-heading{{$key}}" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                @foreach($item['answer'] as $answer)
                                    <p>{{$answer}}</p>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
