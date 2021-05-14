@extends('layouts.main')

{{--@section('pageTitle', $news->title)--}}

{{--@section('breadcrumbs')--}}
{{--    <a href="{{route('news.index')}}" class="text-dark">News</a> / {{$news->title}}--}}
{{--@endsection--}}

@section('content')

    <div class="wrapsemibox">
        <div class="content p-3">

            <img src="{{$news->imageUrl}}" alt="{{$news->title}}" class="rounded mx-auto d-block">

            {!! $news->content !!}
        </div>
    </div>
@endsection
