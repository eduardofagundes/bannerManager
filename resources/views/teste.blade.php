<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Laravel</title>

    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <style>
        .img{
            width: 300px;
            height: 250px;
        }
    </style>
</head>
<body>
<a href="https://www.google.com/" target="_blank"><img src="{{asset('img/planta.jpg')}}" alt="" class="img"></a>

</div>
<script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('css/bootstrap.js') }}"></script>
</body>
</html>
