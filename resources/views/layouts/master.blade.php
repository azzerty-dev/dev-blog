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

<header>
    <a class="header-logo" href="/">
        <img src="{{asset('/storage/logo.svg')}}" alt="">
    </a>

    <div class="header-menu">

        <a href="/blog"> Блог </a>

        <a href="/projects"> Проекты </a>

        <a href="/contacts"> Контакты </a>

    </div>
</header>

<section class="content wrap">
    @yield('content')
</section>


<footer>
    <div class="footer-media">
        <a href="https://github.com/azzerty-dev"> <img src="{{asset('/storage/github-icon.svg')}}" alt=""> </a>
        <a href=""> <img src="{{asset('/storage/telegram-icon.svg')}}" alt=""> </a>
        <a href="mailto:azzertys@protonmail.com"> <img src="{{asset('/storage/mail-icon.svg')}}" alt=""> </a>
    </div>
</footer>
<script src="{{asset('/js/app.js')}}"></script>
</body>

</html>
