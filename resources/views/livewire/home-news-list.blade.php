<div class="article">
    <h3 class="text-primary">POTTORFF NEWS</h3>
    @forelse($articles as $article)
        <img src="{{$article->imageUrl}}" alt="image" height="75" />
        <a href="{{$article->link}}" class="title">{{$article->title}}</a>
        <div class="summary">{!! $article->summary !!}</div>
    @empty
        No news today
    @endforelse
</div>
