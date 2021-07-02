@extends('layouts.admin')

@section('title', 'Посты');

@section('content')

<a href="{{ route('posts.create') }}"><button type="button" class="btn btn-success">Создать</button></a>

<table class="table">
    <thead>
      <tr>
        <th><input type="checkbox" onclick="selectAll(this)"></th>
        <th scope="col">id</th>
        <th scope="col">Название</th>
        <th scope="col">Фото</th>
        <th scope="col">Статус</th>
        <th scope="col">Проект</th>
        <th scope="col">Создано</th>
        <th scope="col">Обновлено</th>
        <th scope="col">Действия</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($posts as $post )
            <tr>
                <th><input type="checkbox"></th>
                <th scope="row">{{ $post->id }}</th>
                <td>{{ $post->title }}</td>
                <td>
                    <img class="post-image" src="{{ $post->image }}" alt="">
                </td>
                <td>{{ $post->status }}</td>
                <td>{{ $post->project }}</td>
                <td>{{ $post->created_at }}</td>
                <td>{{ $post->updated_at }}</td>
                <th>
                    <a href="{{ route('posts.edit', $post) }}"><button type="button" class="btn btn-primary">Изменить</button></a>
                    <br>
                    <a href="{{ route('posts.edit', $post) }}"><button type="button" class="btn btn-primary">Изменить</button></a>
                    <br>
                    <a href="{{ route('posts.edit', $post) }}"><button type="button" class="btn btn-primary">Изменить</button></a>
                </th>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection
