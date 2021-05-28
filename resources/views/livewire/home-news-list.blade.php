<div class="article">
    <div class="custom-section-title mb-3">
        <img src="{{url('images/icons/News.png')}}" alt="News" class="heading-image" />
        POTTORFF NEWS
    </div>
    @forelse($articles as $article)
        <div class="d-flex mb-3">
            <img src="{{$article->imageUrl}}" class="article-image" alt="image" height="75" />
            <div class="article-text">
                <a href="{{route('news.show', $article)}}" class="custom-title">{{$article->title}}</a>
                <div class="summary mt-3">{!! $article->summary !!}</div>
            </div>
        </div>
    @empty
        No news today
    @endforelse
</div>
