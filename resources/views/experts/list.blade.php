@extends('layouts.app')
@section('content')
    <?php
    use Jenssegers\Agent\Agent;

    $agent = new Agent();
    ?>
    @push('title')
        Ассоциация семейного бизнеса Казахстана - эксперты
    @endpush
    <div class="container pt-4">
        <div class="">
            <a href="/">
                <span class="small font-weight-light">Главная</span>
            </a>
            <span class="small font-weight-light">/</span>
            <span class="small font-weight-light">Эксперты</span>
        </div>
    </div>
    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-9 col-12">
                <h2 class="font-weight-medium fba-color-1 Rubik mb-4" style="{{$agent->isDesktop() ? 'font-size: 46px;' : 'font-size: 30px;'}}">
                    Наши эксперты
                </h2>
                <p class="fba-text-1 font-size-18 font-weight-normal">
                    В этом разделе вы сможете познакомиться с экспертами, которые готовы ответить на ваши вопросы и подсказать решения для ваших бизнес-задач. А, если вы являетесь специалистом в той или иной сфере и готовы присоединиться к нашему сообществу профессионалов, то отправьте нам заявку!
                </p>
            </div>
        </div>
    </div>

    <div class="container mt-4">
        <div class="row">
            @foreach($experts as $expert)
                <div class="col-lg-4 col-12 mb-5 px-5">
                    <a href="{{ route('expert',['v' => $expert->id, 'name' => $expert->name]) }}" class="text-decoration-none">
                    <div class="fba-expert-card h-100 p-4">
                        <div class="d-flex justify-content-center">
                            <img class="img-fluid"
                                 style="width: 130px; height: 130px; object-fit: cover; border-radius: 15px;"
                                 src="{{ asset('storage/'.$expert->avatar) }}" alt="">
                        </div>
                        <p class="font-size-20 font-weight-normal line-height-120 text-center mt-3 text-black"
                           style="height: 48px; overflow-y: hidden">
                            {{$expert->name}}
                        </p>
                        <p class="font-size-16 font-weight-normal line-height-120 text-center fba-text-1">
                            {{$expert->desc}}
                        </p>
                    </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection