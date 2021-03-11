<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
        @stack('title')
    </title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    {{--<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">--}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">


</head>
<body>
<div class="" id="app">
    @include('layouts.header')
    <main style="margin-top: 100px; min-height: 90vh">
    @yield('content')
    </main>
    @include('layouts.footer')
    {{--@include('footer')--}}
</div>
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/owl.carousel.js') }}"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>
    var check = 0;
    $(document).ready(function() {
        $(window).scroll(function() {
            var scrollTop = $(window).scrollTop();
            if (scrollTop >= 50) {
                $('.menuse').removeClass('shadow-none');
                $('.menuse').addClass('solid-nav');
                $('.menuse').addClass('py-0');
                $('.menuse').removeClass('pt-3');
                $('#header_logo').addClass('small_logo');
            }
            else if (scrollTop < 50 && $('.navbar-toggler').hasClass('collapsed') == true && check == 1) {
                $('.menuse').addClass('shadow-none');
                $('.menuse').removeClass('solid-nav');
                $('.menuse').removeClass('py-0');
                $('.menuse').addClass('pt-3');
                $('#header_logo').removeClass('small_logo');
            }
            else if (check == 0)
            {
                $('.menuse').addClass('shadow-none');
                $('.menuse').removeClass('solid-nav');
                $('.menuse').removeClass('py-0');
                $('.menuse').addClass('pt-3');
                $('#header_logo').removeClass('small_logo');
            }
        });
    });

    $(document).on('click', '.navbar-toggler', function (e) {
        check = 1;
        // var original = window.location.origin + '/';
        var btn = $(e.currentTarget);
        var scrollTop = $(window).scrollTop();
        if (scrollTop < 50 && btn.hasClass('collapsed') == false) {
            $('.menuse').removeClass('shadow-none');
            $('.menuse').addClass('solid-nav');
            $('.menuse').removeClass('pt-3');
            $('#header_logo').addClass('small_logo');

        } else if (scrollTop < 50 && btn.hasClass('collapsed') == true) {
            $('.menuse').removeClass('solid-nav');
            $('.menuse').addClass('shadow-none');
            $('.menuse').addClass('pt-3');
            $('#header_logo').removeClass('small_logo');
        }
    });
</script>

@stack('script')
</body>
</html>
