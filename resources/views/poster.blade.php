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
                    <button class="btn fba-btn text-white px-5 py-1 {{ $agent->isDesktop() ? 'font-size-16' : 'font-size-14' }} mt-2" data-toggle="modal" data-target="#report">
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
            {!! $poster->content !!}
        </div>
        <div class="mt-5">
            <h2 class="font-weight-medium fba-color-1 Rubik mb-5" style="{{$agent->isDesktop() ? 'font-size: 30px;' : 'font-size: 24px;'}}">
                Тарифы
            </h2>
        </div>
        <div class="mt-3">
            <div class="row">
                @if(isset($poster->tarif1_name) && isset($poster->tarif1_price) && isset($poster->tarif1_desc))
                <div class="col-lg-4 col-12 px-lg-5 px-3 mb-lg-0 mb-5">
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
                    <button class="btn py-3 w-100 text-white font-weight-bold" style="border-radius: 5px; background-color: #00A93E;" data-toggle="modal" data-target="#report">
                        Принять участие
                    </button>
                </div>
                @endif
                @if(isset($poster->tarif2_name) && isset($poster->tarif2_price) && isset($poster->tarif2_desc))
                <div class="col-lg-4 col-12 px-lg-5 px-3 mb-lg-0 mb-5">
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
                    <button class="btn py-3 w-100 text-white font-weight-bold" style="border-radius: 5px; background-color: #D1AF27;" data-toggle="modal" data-target="#report">
                        Принять участие
                    </button>
                </div>
                @endif
                    @if(isset($poster->tarif3_name) && isset($poster->tarif3_price) && isset($poster->tarif3_desc))
                        <div class="col-lg-4 col-12 px-lg-5 px-3">
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
                            <button class="btn py-3 w-100 text-white font-weight-bold" style="border-radius: 5px; background-color: #A92900;" data-toggle="modal" data-target="#report">
                                Принять участие
                            </button>
                        </div>
                    @endif

            </div>
        </div>
        <div class="mt-5">
            <div class="row">
                <div class="col-lg-6 col-12 order-lg-1 order-last d-flex align-items-center">
                    <div>
                    <p class="font-weight-normal font-size-16 line-height-120 text-lowercase" style="color: #878678;">
                        {{$poster->block2_info}}
                    </p>
                    <button class="btn fba-btn text-white px-5 py-1 {{ $agent->isDesktop() ? 'font-size-16' : 'font-size-14' }} mt-2" data-toggle="modal" data-target="#report">
                        Принять участие
                    </button>
                    </div>
                </div>
                <div class="col-lg-6 col-12 order-lg-last order-1 mb-lg-0 mb-3">
                    <img class="img-fluid" src="{{ asset('storage/'.$poster->block2_img) }}" alt="">
                </div>
            </div>
        </div>
        <div class="mt-5">
            <div class="row">
                <div class="col-lg-6 col-12 order-lg-1 order-last d-flex align-items-center">
                    <div>
                        <p class="font-weight-normal font-size-16 line-height-120 text-lowercase" style="color: #878678;">
                            {{$poster->block3_info}}
                        </p>
                        <button class="btn fba-btn text-white px-5 py-1 {{ $agent->isDesktop() ? 'font-size-16' : 'font-size-14' }} mt-2" data-toggle="modal" data-target="#report">
                            Принять участие
                        </button>
                    </div>
                </div>
                <div class="col-lg-6 col-12 order-lg-last order-1 mb-lg-0 mb-3">
                    <img class="img-fluid" src="{{ asset('storage/'.$poster->block3_img) }}" alt="">
                </div>
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




<div class="modal fade" id="report" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content border-0" style="border-radius: 0px;">
            <div class="modal-header">
                <h5 class="modal-title font-weight-medium fba-color-1 Rubik" id="exampleModalLongTitle">Отправить заявку</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="row justify-content-center" id="form">
                    <div class="col-10">
                        <div class="form-group mt-4">
                            <input class="form-control" type="text" id="name" name="name" placeholder="Имя" required>
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="text" id="phone" name="phone" onkeypress='return event.charCode >= 48 && event.charCode <= 57 || event.charCode === 43'  placeholder="Номер телефона" required>
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="email" id="email" name="email" placeholder="Email" required>
                        </div>
                        <button type="submit" class="btn send-btn fba-btn text-white px-5 py-2 mt-4 {{ $agent->isDesktop() ? 'font-size-14' : 'font-size-12' }}">Отправить</button>
                    </div>
                </form>

            </div>

        </div>
    </div>
</div>
@endsection
@push('script')
    <script>
        $("#form").on( "submit", function( event ) {
            event.preventDefault();
            $('.send-btn').addClass('inactive-btn');
            $.ajax({
                url: '{{route('send_report')}}',
                method: 'POST',
                data: {
                    "_token": "{{ csrf_token() }}",
                    'event': "{{$poster->id}}",
                    'name': $('#name').val(),
                    'email': $('#email').val(),
                    'phone': $('#phone').val(),
                },
                success: data => {
                    $('.send-btn').removeClass('inactive-btn');
                    $('#name').val('');
                    $('#email').val('');
                    $('#phone').val('');
                    toastr.success('Мы с вами свяжемся!', 'Заявка отправлена');
                },
                error: () => {
                    $('.send-btn').removeClass('inactive-btn');
                    toastr.error('Что-то пошло не так!', 'Ошибка');
                }
            });
        });
    </script>
@endpush