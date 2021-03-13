@extends('layouts.app')
@section('content')<?php
use App\MainPage;use Jenssegers\Agent\Agent;

$agent = new Agent();
$content = MainPage::first();
?>
@push('title')
    Ассоциация семейного бизнеса Казахстана - эксперты
@endpush
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-6 col-12 d-flex align-items-center pr-5 mb-lg-0 mb-4">
                <div>
                <p class="font-weight-normal font-size-20 line-height-120">
                    {{$poster->date}}
                </p>
                <p class="font-weight-normal font-size-20 line-height-120 mb-4">
                    {{$poster->type}}
                </p>
                <h1 class="font-weight-medium fba-color-1 Rubik mb-4" style="{{$agent->isDesktop() ? 'font-size: 46px;' : 'font-size: 30px;'}}">
                    {{$poster->name}}
                </h1>
                <p class="font-weight-normal font-size-20 line-height-120">
                    {{$poster->short_desc}}
                </p>
                    <button class="btn fba-btn text-white px-5 py-1 {{ $agent->isDesktop() ? 'font-size-16' : 'font-size-14' }} mt-2">
                        Принять участие
                    </button>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <img class="img-fluid" src="{{ asset('storage/'.$poster->banner) }}" alt="">
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-lg-8 col-12">
                {!! $poster->desc !!}
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12">
            <h2 class="font-weight-medium fba-color-1 Rubik mb-5" style="{{$agent->isDesktop() ? 'font-size: 30px;' : 'font-size: 24px;'}}">
                {{count($poster->experts)}} ЭКСПЕРТОВ-ПРАКТИКОВ
            </h2>
            </div>
            @foreach($poster->experts as $expert)
            <div class="col-lg-4 col-12 mb-5 px-5">
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
            </div>
            @endforeach
            <div class="col-12 text-center">
                <button class="btn px-5 py-1 bg-transparent" style="border-radius:10px; border: 1px solid #00A93E;">
                    Программа конференции
                </button>
            </div>
        </div>
        <div class="mt-5">
            {!! $poster->desc2 !!}
        </div>
        <div class="mt-5">
            <h2 class="font-weight-medium fba-color-1 Rubik mb-5" style="{{$agent->isDesktop() ? 'font-size: 30px;' : 'font-size: 24px;'}}">
                Тарифы
            </h2>
        </div>
        <div class="mt-3">
            <div class="row">
                @if(isset($poster->tarif1_name) && isset($poster->tarif1_price) && isset($poster->tarif1_desc))
                <div class="col-lg-4 col-12 px-5 mb-lg-0 mb-5">
                    <div class="py-4 d-flex align-items-center justify-content-center" style="border-radius: 5px; background-color: #00A93E;">
                        <div class="text-center">
                            <p class="font-size-16 line-height-120 text-white font-weight-light">
                                {{$poster->tarif1_name}}
                            </p>
                            <p class="font-size-18 line-height-120 text-white font-weight-bold mb-0">
                                {{$poster->tarif1_price}} тенге
                            </p>
                        </div>
                    </div>
                    <div class="p-4 d-flex align-items-center justify-content-center" style="border-radius: 5px; background-color: #F2F2F2;">
                        <div>
                            {!! $poster->tarif1_desc!!}
                        </div>
                    </div>
                    <button class="btn py-3 w-100 text-white font-weight-bold" style="border-radius: 5px; background-color: #00A93E;">
                        Принять участие
                    </button>
                </div>
                @endif
                @if(isset($poster->tarif2_name) && isset($poster->tarif2_price) && isset($poster->tarif2_desc))
                <div class="col-lg-4 col-12 px-5">
                    <div class="py-4 d-flex align-items-center justify-content-center" style="border-radius: 5px; background-color: #D1AF27;">
                        <div class="text-center">
                            <p class="font-size-16 line-height-120 text-white font-weight-light">
                                {{$poster->tarif2_name}}
                            </p>
                            <p class="font-size-18 line-height-120 text-white font-weight-bold mb-0">
                                {{$poster->tarif2_price}} тенге
                            </p>
                        </div>
                    </div>
                    <div class="p-4 d-flex align-items-center justify-content-center" style="border-radius: 5px; background-color: #F2F2F2;">
                        <div>
                            {!! $poster->tarif2_desc!!}
                        </div>
                    </div>
                    <button class="btn py-3 w-100 text-white font-weight-bold" style="border-radius: 5px; background-color: #D1AF27;">
                        Принять участие
                    </button>
                </div>
                @endif
                    @if(isset($poster->tarif3_name) && isset($poster->tarif3_price) && isset($poster->tarif3_desc))
                        <div class="col-lg-4 col-12 px-5">
                            <div class="py-4 d-flex align-items-center justify-content-center" style="border-radius: 5px; background-color: #A92900;">
                                <div class="text-center">
                                    <p class="font-size-16 line-height-120 text-white font-weight-light">
                                        {{$poster->tarif3_name}}
                                    </p>
                                    <p class="font-size-18 line-height-120 text-white font-weight-bold mb-0">
                                        {{$poster->tarif3_price}} тенге
                                    </p>
                                </div>
                            </div>
                            <div class="p-4 d-flex align-items-center justify-content-center" style="border-radius: 5px; background-color: #F2F2F2;">
                                <div>
                                    {!! $poster->tarif3_desc!!}
                                </div>
                            </div>
                            <button class="btn py-3 w-100 text-white font-weight-bold" style="border-radius: 5px; background-color: #A92900;">
                                Принять участие
                            </button>
                        </div>
                    @endif

            </div>
        </div>
        <div class="mt-5">
            <h2 class="font-weight-medium fba-color-1 Rubik mb-5" style="{{$agent->isDesktop() ? 'font-size: 30px;' : 'font-size: 24px;'}}">
                Генеральные партнеры
            </h2>
        </div>
        <div class="mt-3">
            <div class="row justify-content-center">
                <div class="col-lg-3 col-6 p-4 d-flex align-items-center justify-content-center border-right border-bottom">
                    <img class="img-fluid" src="{{ asset('storage/'.$content->partner1) }}" alt="">
                </div>
                <div class="col-lg-3 col-6 p-4 d-flex align-items-center justify-content-center border-left border-bottom">
                    <img class="img-fluid" src="{{ asset('storage/'.$content->partner2) }}" alt="">
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-3 col-6 p-4 d-flex align-items-center justify-content-center border-right border-top">
                    <img class="img-fluid" src="{{ asset('storage/'.$content->partner3) }}" alt="">
                </div>
                <div class="col-lg-3 col-6 p-4 d-flex align-items-center justify-content-center border-left border-top">
                    <img class="img-fluid" src="{{ asset('storage/'.$content->partner4) }}" alt="">
                </div>
            </div>
        </div>
    </div>
@endsection