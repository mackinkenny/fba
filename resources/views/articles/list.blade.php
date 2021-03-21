@extends('layouts.app')
@section('content')
    <?php
    use Jenssegers\Agent\Agent;

    $agent = new Agent();
    ?>
    @push('title')
        Ассоциация семейного бизнеса Казахстана - Новости
    @endpush
    <div class="container pt-4">
        <div class="">
            <a href="/">
                <span class="small font-weight-light">Главная</span>
            </a>
            <span class="small font-weight-light">/</span>
            <span class="small font-weight-light">Новости</span>
        </div>
    </div>
    <div class="container mt-4">
        <div class="row">
            @foreach($articles as $article)
            <div class="col-lg-4 col-12 mb-5 px-4">
                <div class="fba-article-card h-100">
                    <img class="w-100" src="{{ asset('storage/'.$article->banner) }}" style="height: 170px;  object-fit: cover; border-radius: 3px;" alt="">
                    <div class="p-3">
                        <p class="Rubik font-weight-medium font-size-20">
                            {{$article->title}}
                        </p>
                        <p class="fba-text-1 font-size-14 font-weight-normal">
                            @if(strlen($article->desc) > 150)
                                {{mb_strimwidth($article->desc, 0, 151,'...')}}
                            @else
                                {{ $article->desc }}
                            @endif
                        </p>
                        <a href="{{ route('article',['v' => $article->id, 'name' => $article->title]) }}">
                        <button class="btn fba-btn text-white px-3 py-1 font-size-14 mb-3">
                            Читать далее>>
                        </button>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>


@endsection