
<header>
    <div class="top-bar f14 uppercase">
        <button id="sign-in">
            <span class="material-symbols-outlined f16">
                login
            </span>
            Sign in
        </button>
        <select>
            <option>en</option>
            <option>ru</option>
        </select>
    </div>
    <div id="nav-bar" class="nav-bar f32 uppercase">
        <a href="{{ route('home') }}">
            <img class="logo" src="{{ asset('img/Logo.png') }}">
        </a>
        <nav class="fancy">
            <a href="{{ route('news') }}">News</a>
            <a>Tours</a>
            <a>The Band</a>
            <a>Discography</a>
            <a href="store.html">Store</a>
        </nav>
    </div>
</header>
