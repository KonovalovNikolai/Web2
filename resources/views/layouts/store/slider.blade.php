<div id="slider" class="slideshow-container">
    <div class="slide fade">
        <div class="bannerContent">
            <i class="arrow left" onclick="window.plusSlides(-1)"></i>
            <img src="{{ asset('img/store/666_T-Shirt_front.webp') }}" alt="" width="350px">
            <div class="bannerContentDescr">
                <p class="uppercase">ROTTING CHRIST - 666 - T-Shirt</p>
                <a href="{{ route('storeItem') }}" class="uppercase">BUY NOW</a>
            </div>
            <i class="arrow right" onclick="window.plusSlides(1)"></i>
        </div>
    </div>
    <div class="slide fade hidden">
        <div class="bannerContent">
            <i class="arrow left" onclick="window.plusSlides(-1)"></i>
            <div class="bannerContentDescr">
                <p class="uppercase">CHRIST ROTTING - 666 - T-Shirt</p>
                <a href="{{ route('storeItem') }}" class="uppercase">BUY NOW</a>
            </div>
            <img src="{{ asset('img/store/666_T-Shirt_front.webp') }}" alt="" width="350px">
            <i class="arrow right" onclick="window.plusSlides(1)"></i>
        </div>
    </div>
    <div class="slide fade hidden">
        <div class="bannerContent">
            <i class="arrow left" onclick="window.plusSlides(-1)"></i>
            <img src="{{ asset('img/store/666_T-Shirt_front.webp') }}" alt="" width="350px">
            <div class="bannerContentDescr">
                <p class="uppercase">T-Shirt</p>
                <a href="{{ route('storeItem') }}" class="uppercase">BUY NOW</a>
            </div>
            <i class="arrow right" onclick="window.plusSlides(1)"></i>
        </div>
    </div>
    <div class="dotContainer" style="text-align: center;">
        <span class="dot active"></span>
        <span class="dot"></span>
        <span class="dot"></span>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        window.showSlides(1);
    });
</script>
