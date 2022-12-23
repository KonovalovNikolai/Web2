@extends('layouts.app')

@section('content')
    <main>
        @include('layouts.page_title', ['title' => 'Store'])
        @include('layouts.store.menu')

        <div class="itemShopContent">
            @include('layouts.store_item.gallery', [
                'imgList' => [asset('img/store/666_T-Shirt_front.webp'), asset('img/store/666_T_Shirt_back.webp')],
            ])
            <div class="shopElements">
                <h2 class="uppercase primary f32">ROTTING CHRIST - 666 - T-Shirt</h2>
                <p class="shopPrice f24 uppercase primary">3999 RUB</p>
                <button class="shopBuyButton uppercase f30">Add to cart</button>
            </div>
        </div>

        <p class="secondary f32 mt20">Description</p>
        <p class="secondary f24">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sed massa neque. In tristique felis eget
            odio eleifend
            iaculis. Fusce in mi fermentum, finibus metus sed, dictum diam. Duis facilisis magna justo, id consequat
            velit interdum
            et. Aenean in posuere elit. Sed vitae euismod nisl. Fusce efficitur lectus vitae nisi malesuada facilisis.
            Sed quis nunc
            molestie, semper magna sit amet, finibus nisl.

        </p>
    </main>
@endsection
