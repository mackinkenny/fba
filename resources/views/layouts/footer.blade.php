<?php

use App\Contact;

$contacts = Contact::first();
?>
<div class="container-fluid py-5" style="background-color: #073417;">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-12 order-1 mb-lg-0 mb-3 d-lg-block d-flex align-items-center">
                <img class="img-fluid" src="{{ asset('img/svg/logowhite.svg') }}" alt="">
                <a class="d-lg-none d-block ml-lg-0 ml-4" href="https://benevent.kz/">
                    <img class="img-fluid" style="width:140px;" src="{{ asset('img/ben.svg') }}" alt="">
                </a>
                <div class="d-lg-none d-block ml-4">
                    <a href="https://apps.apple.com/kz/app/ben/id1121260535?mt=8">
                        <img class="img-fluid mt-3" src="{{ asset('img/appstore.png') }}" alt="">
                    </a>
                    <a href="https://play.google.com/store/apps/details?id=acelight.kz.ben">
                        <img class="img-fluid mt-3" src="{{ asset('img/gplay.png') }}" alt="">
                    </a>
                </div>
            </div>
            <div class="col-lg-2 col-12 order-lg-2 order-3 mb-lg-0 mb-3">
                <p class="font-size-18 font-weight-medium text-white line-height-110 mb-lg-2 mb-0" style="{{$agent->isDesktop() ? 'height: 50px;' : 'height: 25px;'}}">
                    Адрес
                </p>

                <p class="font-size-16 font-weight-light text-white">
                    {{$contacts->address}}
                </p>
            </div>
            <div class="col-lg-2 col-12 order-lg-3 order-4 mb-lg-0 mb-3">
                <p class="font-size-18 font-weight-medium text-white line-height-110 mb-lg-2 mb-0" style="{{$agent->isDesktop() ? 'height: 50px;' : 'height: 25px;'}}">
                    Email
                </p>
                <a href="mailto:{{$contacts->email}}" class="text-decoration-none">
                <p class="font-size-16 font-weight-light text-white">
                    {{$contacts->email}}
                </p>
                </a>
            </div>
            <div class="col-lg-2 col-12 order-lg-4 order-5 mb-lg-0 mb-3">
                <p class="font-size-18 font-weight-medium text-white line-height-110 mb-lg-2 mb-0" style="{{$agent->isDesktop() ? 'height: 50px;' : 'height: 25px;'}}">
                    Телефоны
                </p>
                <a href="tel:{{$contacts->phone1}}" class="text-decoration-none">
                <p class="font-size-16 font-weight-light text-white mb-1">
                    {{$contacts->phone1}}
                </p>
                </a>
                <a href="tel:{{$contacts->phone2}}" class="text-decoration-none">
                <p class="font-size-16 font-weight-light text-white">
                    {{$contacts->phone2}}
                </p>
                </a>
            </div>
            <div class="col-lg-2 col-10 order-lg-5 order-2 mb-lg-0 mb-3">
                <p class="font-size-18 font-weight-medium text-white line-height-110 mb-lg-2 mb-3" style="height: 50px;">
                    Подписывайтесь в соц сетях
                </p>

                <div class="d-flex justify-content-lg-between py-1">
                    <a class="mr-lg-0 mr-4" href="{{$contacts->facebook}}">
                        <i class="fab fa-facebook-square text-white fa-lg"></i>
                    </a>
                    <a class="mr-lg-0 mr-4" href="{{$contacts->whatsapp}}">
                        <i class="fab fa-whatsapp text-white fa-lg"></i>
                    </a>
                    <a class="mr-lg-0 mr-4" href="{{$contacts->telegram}}">
                        <i class="fab fa-telegram-plane text-white fa-lg"></i>
                    </a>
                    <a class="mr-lg-0 mr-4" href="{{$contacts->instagram}}">
                        <i class="fab fa-instagram text-white fa-lg"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-2 col-10 order-lg-6 mb-lg-0 mb-3 pl-lg-4 pl-0 d-lg-block d-none">
                <a href="https://benevent.kz/">
                    <img class="img-fluid" src="{{ asset('img/ben.svg') }}" alt="">
                </a>
                <a href="https://apps.apple.com/kz/app/ben/id1121260535?mt=8">
                    <img class="img-fluid mt-3" src="{{ asset('img/appstore.png') }}" alt="">
                </a>
                <a href="https://play.google.com/store/apps/details?id=acelight.kz.ben">
                    <img class="img-fluid mt-3" src="{{ asset('img/gplay.png') }}" alt="">
                </a>
            </div>
            <div class="col-12 order-6 mt-lg-5">
                <div class="row">
                    <div class="col-lg-4 col-12">
                        <p class="font-weight-light font-size-14 line-height-120 text-white">
                            Подпишитесь на рассылку, чтобы быть в курсе всех новых событий!
                        </p>
                    </div>
                    <div class="col-lg-4 col-12">
                        <input type="email" name="sender" id="sender" class="form-control bg-transparent text-white" style="border-radius: 10px;" placeholder="Введите свой e-mail">
                    </div>
                    <div class="col-lg-3 col-12 mt-lg-0 mt-3">
                        <button class="btn px-5 py-1 text-white add_email" style="border: 2px solid #FFFFFF; border-radius: 10px">
                            Подписаться
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-12 text-center order-last mt-4">
                <p class="mt-lg-0 mt-3 mb-lg-0 d-lg-none d-block">
                    <a class="text-decoration-none" href="https://welumicool.com"><span class="font-size-14 font-weight-normal text-white">Made in <img
                                    src="{{ asset('img/wlc.png') }}" alt=""></span></a>
                </p>
                <p class="mb-0 font-size-14 text-white line-height-120">
                    © Copyright 2012 - 2021 | Все права защищены <a class="text-decoration-none d-lg-block d-none" href="https://welumicool.com"><span class="font-size-14 font-weight-normal text-white ml-5">Made in <img
                                src="{{ asset('img/wlc.png') }}" alt=""></span></a>
                </p>

            </div>
        </div>
    </div>
</div>