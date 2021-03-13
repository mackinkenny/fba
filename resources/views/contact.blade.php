@extends('layouts.app')
@section('content')
    <?php
    use Jenssegers\Agent\Agent;
    use App\Contact;

    $agent = new Agent();
    $contacts = Contact::first();
    ?>
    @push('title')
        Ассоциация семейного бизнеса Казахстана - Контакты
    @endpush
    <div class="container pt-4">
        <div class="">
            <a href="/">
                <span class="small font-weight-light">Главная</span>
            </a>
            <span class="small font-weight-light">/</span>
            <span class="small font-weight-light">Контакты</span>
        </div>
    </div>

    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-8 col-12">
                <h2 class="font-weight-medium fba-color-1 Rubik mb-lg-4 mb-0" style="{{$agent->isDesktop() ? 'font-size: 30px;' : 'font-size: 24px;'}}">
                    Контакты
                </h2>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row pb-3">
            <div class="col-lg-5 col-12 p-3" style="background-color: rgba(0, 169, 62, 0.04);">
                <div class="row">
                    <div class="col-lg-9 col-12">
                <p class="font-size-18 font-weight-medium text-black">
                    ОсОО “АСБК”
                </p>
                <div class="row mb-4">
                    <div class="col-6">
                            <p class="font-weight-medium font-size-14 text-black">
                                Адрес
                            </p>
                    </div>
                    <div class="col-6">
                        <p class="font-weight-normal font-size-14 text-black mb-1">
                            {{$contacts->address}}
                        </p>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-6">
                        <p class="font-weight-medium font-size-14 text-black">
                            Телефон
                        </p>
                    </div>
                    <div class="col-6">
                        <a href="tel:{{$contacts->phone1}}" class="text-decoration-none">
                        <p class="font-weight-normal font-size-14 text-black mb-1">
                            {{$contacts->phone1}}
                        </p>
                        </a>
                        <a href="tel:{{$contacts->phone2}}" class="text-decoration-none">
                        <p class="font-weight-normal font-size-14 text-black mb-1">
                            {{$contacts->phone2}}
                        </p>
                        </a>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-6">
                        <p class="font-weight-medium font-size-14 text-black">
                            Электронная почта
                        </p>
                    </div>
                    <div class="col-6">
                        <a href="mailto:{{$contacts->email}}">
                        <p class="font-weight-normal font-size-14 text-black mb-1">
                            {{$contacts->email}}
                        </p>
                        </a>
                    </div>
                </div>


                            <p class="font-size-20 font-weight-medium fba-color-1 Rubik mb-4">
                                Оставьте заявку и мы с Вами свяжемся
                            </p>
                            <form action="" id="form">
                                <div class="form-group">
                                    <input type="text" name="name" id="name" class="form-control bg-transparent" placeholder="Имя">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" id="email" class="form-control bg-transparent" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="phone" id="phone" class="form-control bg-transparent" placeholder="Телефон">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control bg-transparent" name="comment" id="comment" cols="30" rows="5" placeholder="Сообщение"></textarea>
                                </div>

                                <button type="submit" class="btn send-btn fba-btn text-white px-3 py-1 mt-3 {{ $agent->isDesktop() ? 'font-size-16' : 'font-size-14' }}">
                                    Оставить заявку
                                </button>
                            </form>
                        </div>
                    </div>
            </div>
            <div class="col-lg-7 col-12 px-0" style="overflow-x: hidden">
                {!! $contacts->map !!}
            </div>
        </div>
    </div>
@endsection
@push('script')
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
                        'name': $('#name').val(),
                        'email': $('#email').val(),
                        'phone': $('#phone').val(),
                        'comment': $('#comment').val(),
                    },
                    success: data => {
                        $('.send-btn').removeClass('inactive-btn');
                        $('#name').val('');
                        $('#email').val('');
                        $('#phone').val('');
                        $('#comment').val('');
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

@endpush
