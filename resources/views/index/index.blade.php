@extends('layouts.master')

@section('title', 'Обо мне')

@section('content')
    <div class="index">
        <div class="title">О сайте</div>

        <div class="index-content">

            Начинаю свой путь в профессиональный web-it, сдесь будут публиковаться ежедневные отчёты по проделанной
            работе, так же пробные проекты и всё в этом роде.
            <br><br>
            Основной изучаемый стэк:
            <ul>
                <li>PHP</li>
                <li>MySQL</li>
                <li>Javascript</li>
                <li>Html</li>
                <li>CSS</li>
            </ul>

            <br>
            Так же в свободое время занимаюсь администрированием linux (в частности debian, arch).
            <br><br>
            Часы работы: <br>
            - Воскресенье-Пятница <br>
            - C 7 до 17 по мск
            <br><br>
            Связь со мной возможна через форму в разделе 'Контакты' либо по линкам ниже &#8595;
        </div>

        <div class="title">Последние посты</div>

        <div class="index-posts">
            {{-- @foreach($posts as $post_content)
            <div class="index-post">
                <a href="">
                    <img src="{{ $post_content->image }}" alt="">
                    <p>{{$post_content->title}}</p>
                </a>
            </div>
            @endforeach --}}
        </div>

        <a class="index-more" href="">Смотреть всё&#8594;</a>
    </div>
@endsection
