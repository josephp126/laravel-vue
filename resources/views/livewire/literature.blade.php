<div class="article">
    <h3 class="text-primary">LITERATURE</h3>
    @forelse($articles as $article)
        <a href="{{$article->link}}" class="title">{{$article->title}}</a>
        <div class="summary">{!! $article->summary !!}</div>
    @empty
        Sorry no literature today
    @endforelse

</div>
