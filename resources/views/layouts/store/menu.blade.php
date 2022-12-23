<div class="store-menu f20 uppercase">
    <button id="store-menu-button" type="menu">
        <span class="material-symbols-outlined f30">
            menu
        </span>
    </button>

    <div class="menuWrap" id="menu">
        <div class="menu">
            <a href="#" class="menuLink">
                <p>Edit Profile</p>
                <span>></span>
            </a>
            <a href="#" class="menuLink">
                <p>Settings & Privacy</p>
                <span>></span>
            </a>

            <a href="#" class="menuLink">
                <p>Help & Support</p>
                <span>></span>
            </a>

            <a href="#" class="menuLink">
                <p>Logout</p>
                <span>></span>
            </a>
        </div>
    </div>

    <div class="links">
    <a>Apparel</a>
    <a>VISUALS & SOUNDS</a>
    <a>SOUVENIRS</a>
    </div>

    <div class="search">
        <input id="search" type="text">
        <label for="search">
            <span class="material-symbols-outlined">
                search
            </span>
        </label>
    </div>

    <div class="cart tooltip">
        <a href="#">
            <span class="material-symbols-outlined f20">
                shopping_cart
            </span>
        </a>
        <span class="tooltiptext">Cart</span>
    </div>
</div>
<hr>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        let Menu = document.getElementById("menu");
        let menuButton = document.getElementById("store-menu-button");
        window.initMenu(Menu, menuButton);
    });
</script>
