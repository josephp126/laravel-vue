@extends('layouts.main')

@section('breadcrumbs')
    <li class="breadcrumb-item active" aria-current="page">News</li>
@endsection

@section('content')
    <div class="wrapsemibox d-flex flex-wrap flex-row">
        @forelse($data as $article)
            <div class="card flex-grow-1">
                <div class="card-body d-flex flex-row">
                    <div class="article-image mr-3">
                        <img src="{{$article->imageUrl}}" alt="{{$article->title}}" />
                    </div>
                    <div class="article d-flex flex-column flex-grow-1">
                        <h5 class="card-title">{{$article->title}}</h5>
                        <p class="card-text">{{$article->summary}}</p>
                        <div class="mt-auto">
                            <a href="{{route('news.show', $article)}}" class="btn btn-outline-primary">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <p>No news at this time. Please check back later</p>
        @endforelse
    </div>
@endsection
