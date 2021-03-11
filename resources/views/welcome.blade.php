@extends('layouts.app')
@section('content')
    <?php
    use App\MainPage;use Jenssegers\Agent\Agent;

    $agent = new Agent();
    $content = MainPage::first();
    ?>
    @push('title')
        Ассоциация семейного бизнеса Казахстана
    @endpush
    <div class="container-fluid overflow-hidden">
        <div class="row">
            <div class="col-lg-6 col-12 d-flex align-items-center justify-content-center">
                <div class="container col-lg-9 col-12 pl-lg-5 pl-0 pr-lg-2 pr-0">
                    @if($content->title1)
                        <h1 class="font-weight-medium pl-lg-5 pl-0 text-lg-left text-center" style="{{ $agent->isDesktop() ? 'font-size: 40px;' : 'font-size: 25px;' }} color: #252525;">
                            {{$content->title1}}
                        </h1>
                    @endif
                    <div class="d-flex justify-content-between px-lg-5 px-0 pt-4">
                        <button class="btn fba-btn text-white px-3 py-2 {{ $agent->isDesktop() ? 'font-size-18' : 'font-size-14' }} w-50 mr-3">
                            Позвонить
                        </button>
                        <a href="{{route('contacts')}}" class="btn fba-btn text-white px-3 py-2 {{ $agent->isDesktop() ? 'font-size-18' : 'font-size-14' }} w-50 ml-3">
                            Контакты
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-12 pr-0 pl-lg-5 pl-3">
                <div class="position-relative" style="margin-bottom: 100px; margin-top: 100px;">
                    @if($content->image1)
                        <img class="w-100" style="position: relative; z-index: 10" src="{{ asset('storage/'.$content->image1) }}" alt="">
                        <div class="position-absolute" style="top:-20%; left: -10%; width: 110%; height: 140%; z-index: 0; background-image: url({{ asset('img/shadow.webp') }}); background-size: 100% 100%; background-position: center;"></div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="container p-lg-5 p-2 my-5" style="background-image: url({{ $agent->isDesktop() ? asset('storage/'.str_replace('\\', '/', $content->bg2)) : asset('storage/'.str_replace('\\', '/', $content->bg2_mobile)) }}); background-position: center; background-size: cover;">
        <div class="row p-lg-3 p-1">
            <div class="col-lg-6 col-10 pt-lg-0 pt-5">
                @if($content->title2)
                <p class="Rubik font-weight-normal text-white line-height-130 mb-3 pt-lg-0 pt-5" style="{{$agent->isDesktop() ? 'font-size: 36px;' : 'font-size: 18px;'}}">
                    {{$content->title2}}
                </p>
                @endif
                @if($content->desc2)
                    <p class="fba-text-1 {{$agent->isDesktop() ? 'font-size-18' : 'font-size-14'}} font-weight-normal line-height-130" style="color: #9f9f9f;">
                        {{ $content->desc2 }}
                    </p>
                @endif
            </div>

        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                @if($content->title3)
                <h2 class="font-weight-medium fba-color-1 Rubik mb-4" style="{{$agent->isDesktop() ? 'font-size: 46px;' : 'font-size: 30px;'}}">
                    {{$content->title3}}
                </h2>
                @endif
            </div>
            <div class="col-lg-6 col-12">
                @if($content->desc3)
                    <p class="{{$agent->isDesktop() ? 'font-size-18' : 'font-size-14'}} font-weight-normal line-height-140 fba-text-1 mb-4 pr-lg-5 pr-0">
                        {{$content->desc3}}
                    </p>
                @endif
                    <a href="{{ route('about') }}" class="text-decoration-none">
                        <button class="btn fba-btn px-5 py-2 text-white {{$agent->isDesktop() ? 'font-size-18' : 'font-size-16'}}">
                            Подробнее
                        </button>
                    </a>
            </div>
            <div class="col-lg-6 col-12 mt-lg-0 mt-4">
                <div class="row">
                    <div class="col-6 pb-3">
                        <p class="font-weight-medium fba-color-1 Rubik mb-0 line-height-100" style="font-size: 53px;">
                            {{$content->adv1numb}}
                        </p>
                        <p class="font-size-16 font-weight-normal line-height-140 fba-text-1">
                            {{$content->adv1text}}
                        </p>
                    </div>
                    <div class="col-6 pb-3">
                        <p class="font-weight-medium fba-color-1 Rubik mb-0 line-height-100" style="font-size: 53px;">
                            {{$content->adv2numb}}
                        </p>
                        <p class="font-size-16 font-weight-normal line-height-140 fba-text-1">
                            {{$content->adv2text}}
                        </p>
                    </div>
                    <div class="col-6 pb-3">
                        <p class="font-weight-medium fba-color-1 Rubik mb-0 line-height-100" style="font-size: 53px;">
                            {{$content->adv3numb}}
                        </p>
                        <p class="font-size-16 font-weight-normal line-height-140 fba-text-1">
                            {{$content->adv3text}}
                        </p>
                    </div>
                    <div class="col-6 pb-3">
                        <p class="font-weight-medium fba-color-1 Rubik mb-0 line-height-100" style="font-size: 53px;">
                            {{$content->adv4numb}}
                        </p>
                        <p class="font-size-16 font-weight-normal line-height-140 fba-text-1">
                            {{$content->adv4text}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@if(count(App\Project::all()))
    <div class="container mt-5">
        <div class="container pt-4">
        <div class="row justify-content-end">
        <div class="col-12">
            @if($content->title4)
            <h2 class="font-weight-medium fba-color-1 Rubik mb-4" style="{{$agent->isDesktop() ? 'font-size: 46px;' : 'font-size: 30px;'}}">
                {{$content->title4}}
            </h2>
            @endif
            @if($content->desc4)
            <p class="fba-text-1 {{$agent->isDesktop() ? 'font-size-18' : 'font-size-14'}} font-weight-normal line-height-130" style="color: #9f9f9f;">
                {{$content->desc4}}
            </p>
            @endif
        </div>
        </div>
        </div>
        <div class="owl-carousel owl-projects">
            @foreach(App\Project::all() as $project)
            <div class="item p-4 row">
                    <div class="col-lg-10 col-11 px-lg-2 px-1 fba-project-card">
                        <div class="row">
                    <div class="col-5" style="border-radius: 10px; background-image: url({{asset('storage/'.str_replace('\\', '/', $project->image))}}); background-size: cover; background-position: center;"></div>
                    <div class="col-7 p-lg-5 p-2 d-flex align-items-center">
                        <div class="">
                            <p class="{{ $agent->isDesktop() ? 'font-size-22' : 'font-size-16' }} text-black font-weight-medium">
                                {{$project->name}}
                            </p>
                            <p class="fba-text-1 {{$agent->isDesktop() ? 'font-size-16' : 'font-size-14'}} font-weight-normal line-height-140">
                                @if($agent->isDesktop())
                                @if(strlen($project->desc) > 150)
                                    {{mb_strimwidth($project->desc, 0, 151,'...')}}
                                @else
                                    {{ $project->desc }}
                                @endif
                                @else
                                    @if(strlen($project->desc) > 70)
                                        {{mb_strimwidth($project->desc, 0, 71,'...')}}
                                    @else
                                        {{$project->desc}}
                                    @endif
                                @endif
                            </p>
                            <a href="{{ route('project',['v' => $project->id, 'name' => $project->name]) }}">
                                <span class="font-size-16 font-weight-normal">Читать дальше>></span>
                            </a>
                        </div>
                    </div>
                        </div>
                    </div>
            </div>
            @endforeach
            {{--<div class="item p-4 row">--}}
                {{--<div class="col-lg-10 col-11 px-lg-2 px-1 fba-project-card">--}}
                    {{--<div class="row">--}}
                        {{--<div class="col-5" style="border-radius: 10px; background-image: url({{asset('img/project.webp')}}); background-size: cover; background-position: center;"></div>--}}
                        {{--<div class="col-7 p-lg-5 p-2 d-flex align-items-center">--}}
                            {{--<div class="">--}}
                                {{--<p class="{{ $agent->isDesktop() ? 'font-size-22' : 'font-size-16' }} text-black font-weight-medium">--}}
                                    {{--Бизнес с козами--}}
                                {{--</p>--}}
                                {{--<p class="fba-text-1 {{$agent->isDesktop() ? 'font-size-16' : 'font-size-14'}} font-weight-normal line-height-140">--}}
                                    {{--@if($agent->isDesktop())--}}
                                        {{--@if(strlen('Дмитрий Беспалько, 48 лет, родной город — Костанай, козовод Полина Назарова, 35 лет, родной город — Костанай, козовод О том, как все начиналось Полина.') > 150)--}}
                                            {{--{{mb_strimwidth('Дмитрий Беспалько, 48 лет, родной город — Костанай, козовод Полина Назарова, 35 лет, родной город — Костанай, козовод О том, как все начиналось Полина.', 0, 151,'...')}}--}}
                                        {{--@else--}}
                                            {{--Дмитрий Беспалько, 48 лет, родной город — Костанай, козовод Полина Назарова, 35 лет, родной город — Костанай, козовод О том, как все начиналось Полина.--}}
                                        {{--@endif--}}
                                    {{--@else--}}
                                        {{--@if(strlen('Дмитрий Беспалько, 48 лет, родной город — Костанай, козовод Полина Назарова, 35 лет, родной город — Костанай, козовод О том, как все начиналось Полина.') > 70)--}}
                                            {{--{{mb_strimwidth('Дмитрий Беспалько, 48 лет, родной город — Костанай, козовод Полина Назарова, 35 лет, родной город — Костанай, козовод О том, как все начиналось Полина.', 0, 71,'...')}}--}}
                                        {{--@else--}}
                                            {{--Дмитрий Беспалько, 48 лет, родной город — Костанай, козовод Полина Назарова, 35 лет, родной город — Костанай, козовод О том, как все начиналось Полина.--}}
                                        {{--@endif--}}
                                    {{--@endif--}}
                                {{--</p>--}}
                                {{--<a href="">--}}
                                    {{--<span class="font-size-16 font-weight-normal">Читать дальше>></span>--}}
                                {{--</a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        </div>
    </div>
@endif
    <div class="container mt-5">
        @if($content->title5)
        <h2 class="font-weight-medium fba-color-1 Rubik mb-3 pt-4" style="{{$agent->isDesktop() ? 'font-size: 46px;' : 'font-size: 30px;'}}">
            {{$content->title5}}
        </h2>
        @endif
        <?php
            $articles = App\News::latest('created_at')->get();
        ?>
        <div class="row">
            @if(isset($articles[0]))
            <div class="col-lg-4 col-12">
                <img class="w-100" src="{{ asset('storage/'.str_replace('\\', '/', $articles[0]->banner)) }}" style="max-height: 190px; object-fit: cover; border-radius: 10px;" alt="">
                <p class="Rubik font-weight-medium font-size-20 my-3">
                    {{$articles[0]->title}}
                </p>
                <p class="fba-text-1 font-size-14 font-weight-normal">
                    @if(strlen($articles[0]->desc) > 150)
                        {{mb_strimwidth($articles[0]->desc, 0, 151,'...')}}
                    @else
                        {{ $articles[0]->desc }}
                    @endif
                </p>
            </div>
            @endif
            <div class="col-lg-4 col-12">
                @if(isset($articles[1]))
                <div class="row mb-4">
                <div class="col-6">
                    <img class="w-100" src="{{ asset('storage/'.str_replace('\\', '/', $articles[1]->banner)) }}" style="height: 160px; object-fit: cover; border-radius: 10px;" alt="">
                </div>
                <div class="col-6">
                    <p class="Rubik font-weight-medium font-size-16 line-height-110 mb-3">
                        {{$articles[1]->title}}
                    </p>
                    <p class="fba-text-1 font-size-14 font-weight-normal line-height-110">
                        @if(strlen($articles[1]->desc) > 90)
                            {{mb_strimwidth($articles[1]->desc, 0, 91,'...')}}
                        @else
                            {{ $articles[1]->desc }}
                        @endif
                    </p>
                </div>
                </div>
                @endif
                @if(isset($articles[2]))
                <div class="row">
                    <div class="col-6">
                        <img class="w-100" src="{{ asset('storage/'.str_replace('\\', '/', $articles[2]->banner)) }}" style="height: 160px; object-fit: cover; border-radius: 10px;" alt="">
                    </div>
                    <div class="col-6">
                        <p class="Rubik font-weight-medium font-size-16 line-height-110 mb-3">
                            {{$articles[2]->title}}
                        </p>
                        <p class="fba-text-1 font-size-14 font-weight-normal line-height-110">
                            @if(strlen($articles[2]->desc) > 90)
                                {{mb_strimwidth($articles[2]->desc, 0, 91,'...')}}
                            @else
                                {{ $articles[2]->desc }}
                            @endif
                        </p>
                    </div>
                </div>
                @endif
            </div>
            <div class="col-lg-4 col-12 mt-lg-0 mt-4">
                @if(isset($articles[3]))
                <div class="row mb-4">
                    <div class="col-4">
                        <img class="w-100" src="{{ asset('storage/'.str_replace('\\', '/', $articles[3]->banner)) }}" style="height: 97px; object-fit: cover; border-radius: 10px;" alt="">
                    </div>
                    <div class="col-8">
                        <p class="Rubik font-weight-medium font-size-16 line-height-110 mb-3">
                            {{$articles[3]->title}}
                        </p>
                        <p class="fba-text-1 font-size-14 font-weight-normal line-height-110">
                            @if(strlen($articles[3]->desc) > 70)
                                {{mb_strimwidth($articles[3]->desc, 0, 71,'...')}}
                            @else
                                {{ $articles[3]->desc }}
                            @endif
                        </p>
                    </div>
                </div>
                @endif
                @if(isset($articles[4]))
                <div class="row mb-4">
                    <div class="col-4">
                        <img class="w-100" src="{{ asset('storage/'.str_replace('\\', '/', $articles[4]->banner)) }}" style="height: 97px; object-fit: cover; border-radius: 10px;" alt="">
                    </div>
                    <div class="col-8">
                        <p class="Rubik font-weight-medium font-size-16 line-height-110 mb-3">
                            {{$articles[4]->title}}
                        </p>
                        <p class="fba-text-1 font-size-14 font-weight-normal line-height-110">
                            @if(strlen($articles[4]->desc) > 70)
                                {{mb_strimwidth($articles[4]->desc, 0, 71,'...')}}
                            @else
                                {{ $articles[4]->desc }}
                            @endif
                        </p>
                    </div>
                </div>
                @endif
                @if(isset($articles[5]))
                <div class="row mb-4">
                    <div class="col-4">
                        <img class="w-100" src="{{ asset('storage/'.str_replace('\\', '/', $articles[5]->banner)) }}" style="height: 97px; object-fit: cover; border-radius: 10px;" alt="">
                    </div>
                    <div class="col-8">
                        <p class="Rubik font-weight-medium font-size-16  line-height-110 mb-3">
                            {{$articles[5]->title}}
                        </p>
                        <p class="fba-text-1 font-size-14 font-weight-normal line-height-110">
                            @if(strlen($articles[5]->desc) > 70)
                                {{mb_strimwidth($articles[5]->desc, 0, 71,'...')}}
                            @else
                                {{ $articles[5]->desc }}
                            @endif
                        </p>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>

    <div class="container-fluid mt-5" style="background-color: #F8F8F8;">
        <div class="container">
            @if($content->title6)
            <h2 class="font-weight-medium fba-color-1 Rubik mb-0 pt-4" style="{{$agent->isDesktop() ? 'font-size: 46px;' : 'font-size: 30px;'}}">
                {{$content->title6}}
            </h2>
            @endif
            <div class="row" style=" {{ $agent->isDesktop() ? 'padding-bottom: 100px; padding-top: 80px;' : 'padding-bottom: 50px; padding-top: 40px;'}}">
                <div class="col-lg-3 col-6 mb-lg-0 mb-4 d-flex align-items-center justify-content-center">
                    <img class="img-fluid" src="{{ asset('storage/'.$content->partner1) }}" alt="">
                </div>
                <div class="col-lg-3 col-6 mb-lg-0 mb-4 d-flex align-items-center justify-content-center">
                    <img class="img-fluid" src="{{ asset('storage/'.$content->partner2) }}" alt="">
                </div>
                <div class="col-lg-3 col-6 mb-lg-0 mb-4 d-flex align-items-center justify-content-center">
                    <img class="img-fluid" src="{{ asset('storage/'.$content->partner3) }}" alt="">
                </div>
                <div class="col-lg-3 col-6 mb-lg-0 mb-4 d-flex align-items-center justify-content-center">
                    <img class="img-fluid" src="{{ asset('storage/'.$content->partner4) }}" alt="">
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script>
        var owl = $('.owl-projects');
        owl.owlCarousel({
            margin: 10,
            loop: true,
            autoplay:true,
            autoplayTimeout:5000,
            autoplaySpeed: 500,
            autoplayHoverPause:true,
            nav: true,
            navText: ["<i class='fas fa-long-arrow-alt-left fa-2x'></i>","<i class='fas fa-long-arrow-alt-right fa-2x'></i>"],
            responsive: {
                768: {
                    items: 1.2
                },
                0: {
                    items: 1
                }
            }
        })
    </script>
@endpush
