@extends('layouts.app')

@section('content')
    <main>
        <video controls width="100%">
            <source src="videos/Rotting Christ in Wacken Open Air 2022.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <hr>
        @include('layouts.page_title', ['title' => 'Latest news'])
        <hr>
        <ul class="newsList">
            <li>
                @include('layouts.news.card', [
                    'img_url' => asset('img/news/tv.jpg'),
                    'title' => 'Rotting Christ TV',
                    'tag' => 'media',
                    'date' => '15/01/2022',
                    'body' =>
                        'Today we celebrate the 15 years of our official ROTTING CHRIST TV channel in Youtube!A channel that updates you with all the audio and video official releases of the band and provide you everything free of charge.',
                    'news_url' => '',
                ])
            </li>
            <li>
                @include('layouts.news.card', [
                    'img_url' => asset('img/news/angel.jpg'),
                    'title' => 'Sleep of the Angels 23 years ago',
                    'tag' => 'album',
                    'date' => '04/01/2022',
                    'body' => '23 years today since the release of our "Sleep of the Angels"!',
                    'news_url' => '',
                ])
            </li>
            <li>
                @include('layouts.news.card', [
                    'img_url' => asset('img/news/tour.jpg'),
                    'title' => 'Rotting Christ on Tour',
                    'tag' => 'tour',
                    'date' => '06/12/2021',
                    'body' => 'Thank you Finlandia for a great response to our show.',
                    'news_url' => '',
                ])
            </li>
        </ul>
    </main>
@endsection
