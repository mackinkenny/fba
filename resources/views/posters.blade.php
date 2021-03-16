@extends('layouts.app')
@section('content')<?php
use App\MainPage;use Jenssegers\Agent\Agent;

$agent = new Agent();
$content = MainPage::first();
?>
@push('title')
    Ассоциация семейного бизнеса Казахстана - эксперты
@endpush
<div class="container pt-5">
    <a href="{{route('upload_excel_emails')}}">
        <button class="btn text-white bg-success py-1 px-5 my-3">
            Выгрузить все email
        </button>
    </a>
    <div class="row py-3" style="background-color: #98dfb6;">
        <div class="col-6">
            Название Афиши
        </div>
        <div class="col-6">
            Действие
        </div>
    </div>
    @foreach(App\Poster::all() as $poster)
        <div class="row py-3 border-bottom">
            <div class="col-6">
                {{$poster->name}}
            </div>
            <div class="col-6">
                <a href="{{ route('poster',['id' => $poster->id, 'name' => $poster->name, 'event' => $poster->type]) }}">
                    Перейти
                </a>
            </div>
        </div>
    @endforeach
</div>
@endsection