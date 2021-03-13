<?php

use App\Contact;

$contacts = Contact::first();
?>
<div class="container-fluid py-5" style="background-color: #073417;">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-12 order-1 mb-lg-0 mb-3">
                <img class="img-fluid" src="{{ asset('img/svg/logowhite.svg') }}" alt="">
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
        </div>
    </div>
</div>