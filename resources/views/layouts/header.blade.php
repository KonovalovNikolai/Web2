<header>
    <div class="top-bar f14 uppercase">
        @guest
            <a href="{{ route('register') }}" class="top-bar-b">Register</a>
            <a href="{{ route('login') }}" class="top-bar-b">
                <span class="material-symbols-outlined f16">
                    login
                </span>
                Sign in
            </a>
        @else
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
                <button type="submit" class="top-bar-b">
                    <span class="material-symbols-outlined f16">
                        logout
                    </span>
                    Logout
                </button>
            </form>
        @endguest
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
            <a href="{{ route('newsListPage') }}">News</a>
            <a>Tours</a>
            <a>The Band</a>
            <a>Discography</a>
            <a href="{{ route('store') }}">Store</a>
        </nav>
    </div>
</header>
