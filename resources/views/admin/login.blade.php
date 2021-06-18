<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link  rel="stylesheet" href="{{asset('/css/all.css')}}" type="text/css">
    <title>Вход</title>
</head>
<body>


<div class="login">
    <div class="login-form">
        <form action="{{ 'login' }}" method="post">
            @csrf
            <label for="email">email</label><br>
            <input type="text" id="email" name="email"><br>
            <label for="password">Пароль</label><br>
            <input type="password" id="password" name="password"><br>
            <input type="submit" value="Вход">
        </form>
        @if($errors->any())
            <ul class="login-errors">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
    </div>
</div>
</body>
</html>
