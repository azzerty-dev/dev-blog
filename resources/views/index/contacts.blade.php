@extends('layouts.master')

@section('title', 'Контакты')

@section('content')
    <div class="contacts">
        <div class="title">
            Контакты
        </div>

        <div class="contact-feedback">
            <form action="{{ 'contacts-send' }}" method="post">
                @csrf
                <label for="Name">Имя</label><br>
                <input type="text" id="Name" name="Name"><br>
                <label for="Theme">Тема</label><br>
                <input type="text" id="Theme" name="Theme"><br>
                <label for="Email">Email</label><br>
                <input type="text" id="Email" name="Email"><br>
                <label for="Message">Сообщение</label><br>
                <textarea name="Message" id="Message" cols="30" rows="10"></textarea><br>
                <input type="submit" value="Отправить">
            </form>

            <div class="contacts-links">
                <div class="contacts-link">
                    <a href="">
                        <img src="{{ asset('/storage/telegram-icon.svg') }}" alt="">
                        @azzerty_dev
                    </a>
                </div>

                <div class="contacts-link">
                    <a href="mailto:azzertys@protonmail.com">
                        <img src="{{ asset('/storage/mail-icon.svg') }}" alt="">
                        azzertys@protonmail.com
                    </a>
                </div>

                <div class="contacts-link">
                    <a href="https://github.com/azzerty-dev">
                        <img src="{{ asset('/storage/github-icon.svg') }}" alt="">
                        azzerty-dev
                    </a>
                </div>
            </div>
        </div>

        <div class="contacts-submit">
            {{ Session::get('submit') }}
        </div>

        @if($errors->any())
            <ul class="errors">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
@endsection
