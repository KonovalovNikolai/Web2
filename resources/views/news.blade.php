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
            @if ($currentPage != 1)
                @include('layouts.paggination.text_paggination_button', [
                    'text' => 'First page',
                    'url' => route('newsListPage', ['page' => 1]),
                ])
                @include('layouts.paggination.paggination_button', [
                    'i' => '<',
                    'url' => route('newsListPage', ['page' => $currentPage - 1]),
                ])
            @endif

            @for ($i = 1; $i <= $limit; $i++)
                @if ($i == $currentPage)
                    @include('layouts.paggination.current_paggination_button', [
                        'i' => $i,
                        'url' => route('newsListPage', ['page' => $i]),
                    ])
                @else
                    @include('layouts.paggination.paggination_button', [
                        'i' => $i,
                        'url' => route('newsListPage', ['page' => $i]),
                    ])
                @endif
            @endfor

            @if ($currentPage != $limit)
                @include('layouts.paggination.paggination_button', [
                    'i' => '>',
                    'url' => route('newsListPage', ['page' => $currentPage + 1]),
                ])
                @include('layouts.paggination.text_paggination_button', [
                    'text' => 'Last page',
                    'url' => route('newsListPage', ['page' => $limit]),
                ])
            @endif
        </div>
    </main>
@endsection
