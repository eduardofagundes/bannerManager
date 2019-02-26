<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <style>
        .sidebar-toggler{
            top: 56px;
            bottom: 0;
            left: 0;
            width: 50px;
            z-index: 90;
        }
        .sidebar-toggler div{
            width: 20px;
            height: 20px;
            border-top: 5px solid #343a40;
            border-right: 5px solid #343a40;
            position: relative;
            top: 50%;

            -webkit-transform: translateY(-50%) rotate(45deg);
            -moz-transform: translateY(-50%) rotate(45deg);
            -ms-transform: translateY(-50%) rotate(45deg);
            -o-transform: translateY(-50%) rotate(45deg);
            transform: translateY(-50%) rotate(45deg);
        }


    </style>
    @yield('style')
</head>
<body>
<div class="load position-fixed d-none justify-content-center align-items-center">
    <div>
        <img src="{{ asset('img/load.gif') }}">
    </div>
</div>
{{--<div class="console fixed-bottom h-25 w-25">--}}
{{--~~root:--}}
{{--<span class="console-content"></span>--}}
{{--</div>--}}
<div id="sidebar-toggler" class="sidebar-toggler position-fixed d-block">
    <div></div>
</div>
<header class="fixed-top">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a href="{{ route('home') }}" class="navbar-brand">{{ config('app.name') }}</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbar">
            <ul class="navbar-nav">
                @guest
                    <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">Login</a></li>
                @else
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" id="logoffdropdown" role="button"
                           data-toggle="dropdown">{{ Auth::user()->name }}</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Logout</a>
                        </div>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                @endguest
            </ul>
        </div>
    </nav>
</header>

@yield('content')
<!-- Scripts -->
{{--<script src="{{ asset('js/app.js') }}"></script>--}}
<script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/jquery.mask.js') }}"></script>
<script src="{{ asset('js/bootstrap.js') }}"></script>
<script>
    $(function () {
        windowSize();
        $(window).resize(function(){
            windowSize();
        });

        $("#sidebar-toggler").click(function(){
            $("#sidebar").removeClass("d-none");
        });


        $(document).click(function(event) {

            if (!$(event.target).closest("#sidebar, #sidebar-toggler").length) {
                $("body").find("#sidebar").addClass("d-none");
            }
        });
    });

    function windowSize(){
        if($(window).width() <= 767){
            $("#sidebar").removeClass("col-2");
            $("#sidebar").addClass("col-5");
        }else{
            $("#sidebar").removeClass("col-5");
            $("#sidebar").addClass("col-2");
        }
    }
</script>
@yield('script')
</body>
</html>
