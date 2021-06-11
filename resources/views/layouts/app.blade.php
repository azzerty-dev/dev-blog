<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link  rel="stylesheet" href="{{asset('/css/all.css')}}" type="text/css">
</head>
<body>

<div class="header">
    <a class="header-logo" href="#">
        <img src="{{asset('/storage/logo.svg')}}" alt="">
    </a>

    <div class="header-menu">

        <a href="#"> Проекты </a>

        <a href="#"> Блог </a>

        <a href="#"> Контакты </a>

    </div>
</div>

<section>
    @yield('content')
</section>
<script src="{{asset('/js/app.js')}}"></script>
</body>

</html>
