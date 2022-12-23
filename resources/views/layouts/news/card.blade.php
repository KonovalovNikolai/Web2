<div class="newsCard secondary">
    <img src="{{ $news->img }}" alt="" class="cardImg">
    <span class="cardTitle f24 primary uppercase">{{ $news->title }}</span>
    <span class="tag">#{{ $news->tag }}</span>
    <span class="cardData f14 italic">{{ $news->date }}</span>
    <span class="cardDescription f20">
        {{ $news->body }}
    </span>
    <a href="{{ route("newsPage") }}" class="cardButton f16 primary uppercase underline">More...</a>
</div>
