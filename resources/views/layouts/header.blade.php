<nav class="navbar navbar-expand-md navbar-light shadow-sm fixed-top menuse shadow-none pt-3">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img id="header_logo" src="{{ asset('img/svg/logo.svg') }}" alt="">
        </a>
        <button class="navbar-toggler border-0" style="outline: none;" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <img class="img-fluid" src="{{ asset('img/svg/menu.svg') }}" alt="">
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto d-flex align-items-center">
                <!-- Authentication Links -->
                <a href="/" style="text-decoration: none;">
                    <p class="mb-0 menu-point font-size-14 font-weight-normal mx-4 my-lg-0 my-2">
                        Главная
                    </p>
                </a>
                <a href="{{ route('about') }}" style="text-decoration: none;">
                    <p class="mb-0 menu-point font-size-14 font-weight-normal mx-4 my-lg-0 my-2">
                        Об АСБК
                    </p>
                </a>
                <a href="{{ route('projects') }}" style="text-decoration: none;">
                    <p class="mb-0 menu-point font-size-14 font-weight-normal mx-4 my-lg-0 my-2">
                        Семейное дело
                    </p>
                </a>
                <a href="{{ route('experts') }}" style="text-decoration: none;">
                    <p class="mb-0 menu-point font-size-14 font-weight-normal mx-4 my-lg-0 my-2">
                        Эксперты
                    </p>
                </a>
                <a href="{{ route('articles') }}" style="text-decoration: none;">
                    <p class="mb-0 menu-point font-size-14 font-weight-normal mx-4 my-lg-0 my-2">
                        Новости и события
                    </p>
                </a>
                <a href="{{ route('contacts') }}" style="text-decoration: none;">
                    <p class="mb-0 menu-point font-size-14 font-weight-normal mx-4 my-lg-0 my-2">
                        Контакты
                    </p>
                </a>
            </ul>
        </div>
    </div>
</nav>
