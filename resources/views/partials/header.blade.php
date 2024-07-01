<header>
    <div class="head">
        <div class="logo">
            <a href=" {{route('home')}} ">
                <img id="logo-img" src="https://upload.wikimedia.org/wikipedia/commons/9/9a/Laravel.svg" />
            </a>
            <span id="logo-text">Laravel Scaffold</span>
            <span>Attualmente sei in: {{ Route::currentRouteName() }}</span>
        </div>
        <div class="links">
            <a href=" {{ route('home') }} ">HOME</a>
            <a href=" {{route('about')}} ">ABOUT</a>
            <a href=" {{route('login')}} ">LOGIN</a>
        </div>
    </div>
</header>
