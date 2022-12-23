@extends('layouts.app')

@section('content')
    <main>
        @include('layouts.page_title', ['title' => 'News'])

        <ul class="newsList">
            @foreach ($newsArray as $news)
                @include('layouts.news.card', ['news' => $news])
            @endforeach
        </ul>

        <div class="pagButtons f16 uppercase primary">
            <button class="currentPageButton">1</button>
            <button>2</button>
            <button>3</button>
            <button>4</button>
            <button>></button>
            <button class="textButton">Last page</button>
        </div>
    </main>
@endsection
