@extends('layouts.app')

@section('content')
    <main>
        <video controls width="100%">
            <source src="videos/Rotting Christ in Wacken Open Air 2022.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <hr>
        @include('layouts.page_title', ['title' => 'Latest news'])
        <ul class="newsList">
            @foreach ($newsArray as $news)
                @include('layouts.news.card', ['news' => $news])
            @endforeach
        </ul>
    </main>
@endsection
