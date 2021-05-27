<div class="article">
    <h3 class="heading section-heading-text">
        <img src="{{url('images/icons/News.jpg')}}" alt="News" class="heading-image" />
        POTTORFF NEWS
    </h3>
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
