<div id="gallery">
    <img src="{{ $imgList[0] }}">
    <div class="galleryImgs">
        @foreach ($imgList as $img)
            <img src="{{ $img }}" alt="">
        @endforeach
    </div>
</div>

<div id="popupImg" class="popupImg" style="display: none;">
    <span>&times;</span>
    <img src="{{ $imgList[0] }}" alt="">
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        let gallery = document.getElementById("gallery");
        let galleryMainImg = gallery.querySelector('img');
        let popUp = document.getElementById("popupImg");
        let popUpImg = document.getElementById("popupImg").querySelector('img');

        galleryMainImg.onclick = () => {
            popUp.style.display = 'block';
            popUpImg.src = galleryMainImg.getAttribute('src');
        };

        document.querySelector('.popupImg span').onclick = () => {
            document.querySelector('.popupImg').style.display = 'none';
        };

        gallery.querySelectorAll('.galleryImgs img').forEach(image => {
            image.onclick = () => {
                document.querySelector('.itemShopContent img').src = image.getAttribute('src');
            };
        });
    });
</script>
