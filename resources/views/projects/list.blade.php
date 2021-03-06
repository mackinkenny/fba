@extends('layouts.app')
@section('content')
    <?php
    use Jenssegers\Agent\Agent;

    $agent = new Agent();
    ?>
    @push('title')
        Ассоциация семейного бизнеса Казахстана - Семейное дело
    @endpush
    <div class="container pt-4">
        <div class="">
            <a href="/">
                <span class="small font-weight-light">Главная</span>
            </a>
            <span class="small font-weight-light">/</span>
            <span class="small font-weight-light">Семейное дело</span>
        </div>
    </div>
    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-9 col-12">
                <h2 class="font-weight-medium fba-color-1 Rubik mb-4" style="{{$agent->isDesktop() ? 'font-size: 46px;' : 'font-size: 30px;'}}">
                    Семейное дело
                </h2>
            </div>
        </div>
    </div>
    <div class="container mb-5">
        <div class="row justify-content-lg-start justify-content-center">
            @foreach($projects as $project)
{{--                @if($loop->index == 0 && $agent->isDesktop())--}}
            <div class="col-lg-12 col-12 px-lg-2 px-1 mb-4 ml-4">
                <div class="row justify-content-center">
                    <div class="col-lg-3 col-10" style="height: 240px; border-radius: 10px; background-image: url({{asset('storage/'.str_replace('\\', '/', $project->image))}}); background-size: cover; background-position: center;"></div>
                    {{--<img class="w-100" src="{{ asset('storage/'.$project->image) }}" style="max-height: 190px; object-fit: cover; border-radius: 10px;" alt="">--}}
                    <div class="col-lg-9 col-10 px-lg-5 px-2">
                        <div class="mt-lg-0 mt-3">
                            <p class="{{ $agent->isDesktop() ? 'font-size-22' : 'font-size-16' }} text-black font-weight-medium">
                                {{$project->name}}
                            </p>
                            <p class="fba-text-1 {{$agent->isDesktop() ? 'font-size-16' : 'font-size-14'}} font-weight-normal line-height-140">
                                @if($agent->isDesktop())
                                    @if(strlen($project->desc) > 240)
                                        {{mb_strimwidth($project->desc, 0, 241,'...')}}
                                    @else
                                        {{ $project->desc }}
                                    @endif
                                @else
                                    @if(strlen($project->desc) > 120)
                                        {{mb_strimwidth($project->desc, 0, 121,'...')}}
                                    @else
                                        {{$project->desc}}
                                    @endif
                                @endif
                            </p>
                            <a href="{{ route('family_project',['v' => $project->id, 'name' => $project->name]) }}">
                                <button class="btn fba-btn text-white px-5 py-1 {{ $agent->isDesktop() ? 'font-size-18' : 'font-size-14' }}">
                                    Читать далее >>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
                    {{--<div class="col-12 my-3"></div>--}}
                {{--@else--}}
                    {{--<div class="col-lg-4 col-10 mb-4">--}}
                        {{--<div class="fba-project-card">--}}
                            {{--<img class="w-100" src="{{ asset('storage/'.$project->image) }}" style="max-height: 190px; object-fit: cover; border-radius: 10px;" alt="">--}}
                            {{--<div class="p-3">--}}
                                {{--<p class="{{ $agent->isDesktop() ? 'font-size-22' : 'font-size-16' }} text-black font-weight-medium">--}}
                                    {{--{{$project->name}}--}}
                                {{--</p>--}}
                                {{--<p class="fba-text-1 {{$agent->isDesktop() ? 'font-size-16' : 'font-size-14'}} font-weight-normal line-height-140">--}}
                                    {{--@if($agent->isDesktop())--}}
                                        {{--@if(strlen($project->desc) > 150)--}}
                                            {{--{{mb_strimwidth($project->desc, 0, 151,'...')}}--}}
                                        {{--@else--}}
                                            {{--{{ $project->desc }}--}}
                                        {{--@endif--}}
                                    {{--@else--}}
                                        {{--@if(strlen($project->desc) > 70)--}}
                                            {{--{{mb_strimwidth($project->desc, 0, 71,'...')}}--}}
                                        {{--@else--}}
                                            {{--{{$project->desc}}--}}
                                        {{--@endif--}}
                                    {{--@endif--}}
                                {{--</p>--}}
                                {{--<a href="{{ route('project',['v' => $project->id, 'name' => $project->name]) }}">--}}
                                    {{--<span class="font-size-16 font-weight-normal">Читать дальше>></span>--}}
                                {{--</a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--@endif--}}
                @endforeach
        </div>
    </div>
@endsection