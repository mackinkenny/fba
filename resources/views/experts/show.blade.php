@extends('layouts.app')
@section('content')
    <?php
    use Jenssegers\Agent\Agent;

    $agent = new Agent();
    ?>
    @push('title')
        Ассоциация семейного бизнеса Казахстана - эксперт {{$expert->name}}
    @endpush
    <div class="container pt-4">
        <div class="">
            <a href="/">
                <span class="small font-weight-light">Главная</span>
            </a>
            <span class="small font-weight-light">/</span>
            <a href="{{ route('experts') }}">
                <span class="small font-weight-light">Эксперты</span>
            </a>
            <span class="small font-weight-light">/</span>
            <span class="small font-weight-light">{{ $expert->name }}</span>
        </div>
    </div>
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-lg-3 col-8 mb-lg-0 mb-4">
                <img class="w-100" src="{{ asset('storage/'.$expert->avatar) }}" alt="">
            </div>
            <div class="col-lg-9 d-flex align-items-center">
                <div>
                <h1 class="font-weight-normal text-black" style="font-size: 35px;">{{$expert->name}}</h1>
                <p class="fba-text-1 font-size-18 font-weight-normal">
                    {{$expert->desc}}
                </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        {!! $expert->content !!}
    </div>
    <div class="container my-4">
        <p class="font-weight-medium font-size-20" style="color: #00A93E;">
            Спикеры, которые могут вас заинтересовать
        </p>
        <div class="row">
            @foreach(App\Expert::all()->except($expert->id)->take(6) as $recom)
            <div class="col-lg-2 col-6 mb-lg-0 mb-3">
                <a href="{{ route('expert',['v' => $recom->id, 'name' => $recom->name]) }}" class="text-decoration-none">
                <div class="fba-expert-card h-100 p-3">
                    <div class="d-flex justify-content-center">
                        <img class="img-fluid"
                             style="width: 70px; height: 70px; object-fit: cover; border-radius: 15px;"
                             src="{{ asset('storage/'.$recom->avatar) }}" alt="">
                    </div>
                    <p class="font-size-16 font-weight-normal line-height-120 text-center mt-3 text-black">
                        {{$recom->name}}
                    </p>
                </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>

@endsection