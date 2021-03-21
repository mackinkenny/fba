@extends('layouts.app')
@section('content')
    <?php
    use Jenssegers\Agent\Agent;

    $agent = new Agent();
    ?>
    @push('title')
        Ассоциация семейного бизнеса Казахстана - {{$project->name}}
    @endpush
    <div class="container pt-4">
        <div class="">
            <a href="/">
                <span class="small font-weight-light">Главная</span>
            </a>
            <span class="small font-weight-light">/</span>
            <a href="{{ route('projects') }}">
                <span class="small font-weight-light">Семейное дело</span>
            </a>
            <span class="small font-weight-light">/</span>
            <span class="small font-weight-light">{{ $project->name }}</span>
        </div>
    </div>
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-lg-3 col-8 mb-lg-0 mb-4">
                <img class="w-100" src="{{ asset('storage/'.$project->image) }}" alt="">
            </div>
            <div class="col-lg-9 d-flex align-items-center">
                <div>
                    <h1 class="font-weight-normal text-black" style="font-size: 35px;">{{$project->name}}</h1>
                    <p class="fba-text-1 font-size-18 font-weight-normal">
                        {{$project->desc}}
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5 pb-5">
        {!! $project->content !!}
    </div>
    {{--<div class="container my-4">--}}
        {{--<p class="font-weight-medium font-size-20" style="color: #00A93E;">--}}
            {{--Проекты, которые могут вас заинтересовать--}}
        {{--</p>--}}
        {{--<div class="row">--}}
            {{--@foreach(App\Project::all()->except($project->id)->take(3) as $recom)--}}
                {{--<div class="col-lg-4 px-4 col-12 mb-lg-0 mb-4">--}}
                    {{--<a href="{{ route('project',['v' => $recom->id, 'name' => $recom->name]) }}" class="text-decoration-none">--}}
                        {{--<div class="fba-expert-card h-100">--}}
                            {{--<div class="d-flex justify-content-center">--}}
                                {{--<img class="w-100"--}}
                                     {{--style="height: 200px; object-fit: cover; border-radius: 15px;"--}}
                                     {{--src="{{ asset('storage/'.$recom->image) }}" alt="">--}}
                            {{--</div>--}}
                            {{--<div class="p-3">--}}
                                {{--<p class="Rubik font-weight-medium font-size-20 text-black">--}}
                                    {{--{{$recom->name}}--}}
                                {{--</p>--}}
                                {{--<p class="fba-text-1 font-size-14 font-weight-normal">--}}
                                    {{--@if(strlen($recom->desc) > 90)--}}
                                        {{--{{mb_strimwidth($recom->desc, 0, 91,'...')}}--}}
                                    {{--@else--}}
                                        {{--{{ $recom->desc }}--}}
                                    {{--@endif--}}
                                {{--</p>--}}
                                {{--<a href="{{ route('project',['v' => $recom->id, 'name' => $recom->name]) }}">--}}
                                    {{--<span class="font-size-16 font-weight-normal">Читать дальше>></span>--}}
                                {{--</a>--}}
                            {{--</div>--}}

                        {{--</div>--}}
                    {{--</a>--}}
                {{--</div>--}}
            {{--@endforeach--}}
        {{--</div>--}}
    {{--</div>--}}

@endsection