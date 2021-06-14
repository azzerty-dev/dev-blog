@extends('layouts.master')

@section('title', 'Обо мне')

@section('content')
    <div class="index">
        <div class="title">О сайте</div>

        <div class="index-content">

            Начинаю свой путь в профессиональный web-it, сдесь будут публиковаться ежедневные отчёты по проделанной
            работе, так же пробные проэкты и всё в этом роде.
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

            <div class="index-post">
                <a href="">
                    <img src="{{ asset("/storage/test-2.jpg") }}" alt="">
                    <p>Тестовое название</p>
                </a>
            </div>

            <div class="index-post">
                <a href="">
                    <img src="{{ asset("/storage/test-1.jpg") }}" alt="">
                    <p>Тестовое название</p>
                </a>
            </div>

            <div class="index-post">
                <a href="">
                    <img src="{{ asset("/storage/test-3.jpg") }}" alt="">
                    <p>Тестовое название</p>
                </a>
            </div>

            <div class="index-post">
                <a href="">
                    <img src="{{ asset("/storage/test-3.jpg") }}" alt="">
                    <p>Тестовое название</p>
                </a>
            </div>

            <div class="index-post">
                <a href="">
                    <img src="{{ asset("/storage/test-3.jpg") }}" alt="">
                    <p>Тестовое название</p>
                </a>
            </div>

            <div class="index-post">
                <a href="">
                    <img src="{{ asset("/storage/test-3.jpg") }}" alt="">
                    <p>Тестовое название</p>
                </a>
            </div>
        </div>
    </div>
@endsection
