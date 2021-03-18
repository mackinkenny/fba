@extends('layouts.app')
@section('content')
    <?php
    use Jenssegers\Agent\Agent;

    $agent = new Agent();
    ?>
    @push('title')
        Ассоциация семейного бизнеса Казахстана - Новости - {{$article->name}}
    @endpush
    <div class="container pt-4">
        <div class="">
            <a href="/">
                <span class="small font-weight-light">Главная</span>
            </a>
            <span class="small font-weight-light">/</span>
            <a href="{{ route('articles') }}">
                <span class="small font-weight-light">Новости</span>
            </a>
            <span class="small font-weight-light">/</span>
            <span class="small font-weight-light">{{ $article->title }}</span>
        </div>
    </div>

    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-9 col-12">
                <h2 class="font-weight-medium fba-color-1 Rubik mb-4" style="{{$agent->isDesktop() ? 'font-size: 46px;' : 'font-size: 30px;'}}">
                    {{$article->title}}
                </h2>
                <p class="fba-text-1 font-size-18 font-weight-normal">
                    {{$article->desc}}
                </p>
            </div>
        </div>
        <img class="img-fluid my-2" src="{{ asset('storage/'.$article->banner) }}" alt="">
    </div>
    <div class="container mt-5">
        {!! $article->content !!}
    </div>
    <div class="container my-4">
        <p class="font-weight-medium font-size-20" style="color: #00A93E;">
            Статьи, которые могут вас заинтересовать
        </p>
        <div class="row">
            @foreach(App\News::all()->except($article->id)->take(3) as $recom)
                <div class="col-lg-4 px-4 col-12 mb-lg-0 mb-4">
                    <a href="{{ route('article',['v' => $recom->id, 'name' => $recom->title]) }}" class="text-decoration-none">
                        <div class="fba-expert-card h-100">
                            <div class="d-flex justify-content-center">
                                <img class="w-100"
                                     style="height: 200px; object-fit: cover; border-radius: 15px;"
                                     src="{{ asset('storage/'.$recom->banner) }}" alt="">
                            </div>
                            <div class="p-3">
                                <p class="Rubik font-weight-medium font-size-20 text-black">
                                    {{$recom->title}}
                                </p>
                                <p class="fba-text-1 font-size-14 font-weight-normal">
                                    @if(strlen($recom->desc) > 90)
                                        {{mb_strimwidth($recom->desc, 0, 91,'...')}}
                                    @else
                                        {{ $recom->desc }}
                                    @endif
                                </p>
                                <a href="{{ route('article',['v' => $recom->id, 'name' => $recom->title]) }}">
                                    <span class="font-size-16 font-weight-normal">Читать дальше>></span>
                                </a>
                            </div>

                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>

@endsection