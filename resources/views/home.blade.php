@extends('layouts.app')

@section('content')
    <main>
        <hr>
        @include('layouts.page_title', ['title' => 'Latest news'])
        <ul class="newsList">
            @foreach ($newsArray as $news)
                @include('layouts.news.card', ['news' => $news])
            @endforeach
        </ul>
    </main>
@endsection
