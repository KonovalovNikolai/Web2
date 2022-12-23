@extends('layouts.app')

@section('content')
    <main>
        @include('layouts.page_title', ['title' => 'Store'])
        @include('layouts.store.menu')

        @include('layouts.store.slider')

        <hr>

        <p class="uppercase f32 mt20">Popular</p>

        <ul class="itemList mt20">
            @foreach ($itemList as $item)
                @include('layouts.store.item_card', ['item' => $item])
            @endforeach
        </ul>
    </main>
@endsection
