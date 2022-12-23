<!DOCTYPE html>
<html>

<head>
    <title>{{ $page_title ?? 'Rotting Christ' }}</title>

    <!-- Шрифты -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IM+Fell+DW+Pica+SC&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Gentium+Book+Basic&family=IM+Fell+DW+Pica+SC&display=swap"
        rel="stylesheet">

    <!-- Иконки -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,-25" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <script src="{{ asset('js/app.js') }}"></script>
</head>

<body>
    @include('layouts/header')

    @yield('content')

    @include('layouts/footer')

    {{-- <div id="sign-in-modal" class="modal hidden">
        <div class="modal-content">
            <p class="f32 center">Sign in</p>
            <hr>
            <form action="" class="singin-form">
                <div class="field f20">
                    <label for="signin-email">Email</label>
                    <input type="email" id="signin-email" name="email-field" placeholder="email" required>
                </div>
                <div class="field f20">
                    <label for="signin-password">Password</label>
                    <input type="password" id="signin-password" name="email-field" placeholder="password" required>
                    <a class="secondary f14 end">Forgot your password?</a>
                </div>
                <div class="remember-box">
                    <input type="checkbox" id="remember-me">
                    <label for="remember-me">Remember me</label>
                </div>
                <input class="f24 uppercase" type="submit" value="Sign In">
            </form>
        </div>
    </div> --}}

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // let singInButton = document.getElementById("sign-in");
            // let modal = document.getElementById("sign-in-modal");

            // window.initModal(modal, singInButton);

            let navBar = document.getElementById("nav-bar");
            window.initHeaderFolder(navBar);
        });
    </script>
</body>

</html>
