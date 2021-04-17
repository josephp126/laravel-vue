<div class="article">
    <h3 class="heading">
        <img src="{{url('images/Icon graphics/News.jpg')}}" alt="News" class="heading-image" />
        POTTORFF NEWS
    </h3>
    @forelse($articles as $article)
        <div class="d-flex">
            <img src="{{$article->imageUrl}}" class="article-image" alt="image" height="75" />
            <div class="article-text">
                <a href="{{$article->link}}" class="title">{{$article->title}}</a>
                <div class="summary">{!! $article->summary !!}</div>
            </div>
        </div>
    @empty
        No news today
    @endforelse
</div>
