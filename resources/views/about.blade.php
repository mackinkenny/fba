@extends('layouts.app')
@section('content')
    <?php
    use Jenssegers\Agent\Agent;

    $agent = new Agent();
    $page = App\Page::first();
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
            <span class="small font-weight-light">об АСБК</span>
        </div>
    </div>

    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-8 col-12">
                <p class="fba-text-1 font-size-18 font-weight-normal mb-4">
                    {{$page->title1}}
                </p>

                <h2 class="font-weight-medium fba-color-1 Rubik mb-4" style="{{$agent->isDesktop() ? 'font-size: 46px;' : 'font-size: 30px;'}}">
                    Проекты
                </h2>
            </div>
        </div>
    </div>

    <div class="container mb-5">
        <div class="row justify-content-lg-start justify-content-center">
            @foreach($projects as $project)
                    <div class="col-lg-4 col-10 mb-4">
                        <div class="fba-project-card h-100">
                            <img class="w-100" src="{{ asset('storage/'.$project->image) }}" style="max-height: 190px; object-fit: cover; border-radius: 10px;" alt="">
                            <div class="p-3">
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
            @endforeach
        </div>
    </div>

    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-8 col-12">
                <h2 class="font-weight-medium fba-color-1 Rubik mb-4" style="{{$agent->isDesktop() ? 'font-size: 46px;' : 'font-size: 30px;'}}">
                    Услуги
                </h2>
            </div>
        </div>
    </div>

    <div class="container my-4">
        <div class="row">
            @foreach(App\Service::all()->reverse() as $service)
                <div class="col-lg-4 col-6 px-lg-5 px-2 mb-lg-0 mb-3">
                        <div class="fba-expert-card h-100 p-3">
                            <div class="d-flex justify-content-center">
                                <img class="img-fluid"
                                     style="width: 140px; height: 140px; object-fit: cover; border-radius: 15px;"
                                     src="{{ asset('storage/'.$service->image) }}" alt="">
                            </div>
                            <p class="font-size-18 font-weight-normal line-height-120 text-center mt-3 text-black">
                                {{$service->title}}
                            </p>
                        </div>
                </div>
            @endforeach
        </div>
        <div class="text-center my-5">
            <button class="btn fba-btn text-white px-3 py-2 {{ $agent->isDesktop() ? 'font-size-18' : 'font-size-14' }}"  data-toggle="modal" data-target="#report">
                Отправить запрос
            </button>
        </div>
    </div>

    <div class="modal fade" id="report" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content border-0" style="border-radius: 0px;">
                <div class="modal-header">
                    <h5 class="modal-title font-weight-medium fba-color-1 Rubik" id="exampleModalLongTitle">Закажите обратный звонок</h5>
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
                            <div class="form-group">
                                <textarea class="form-control" name="comment" id="comment" cols="30" rows="5" placeholder="Сообщение"></textarea>
                            </div>
                            <button type="submit" class="btn send-btn fba-btn text-white px-5 py-2 mt-4 {{ $agent->isDesktop() ? 'font-size-14' : 'font-size-12' }}">Заказать</button>
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
                    'name': $('#name').val(),
                    'email': $('#email').val(),
                    'phone': $('#phone').val(),
                    'comment': $('#comment').val(),
                },
                success: data => {
                    $('.send-btn').removeClass('inactive-btn');
                    $('#report').modal('hide');
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