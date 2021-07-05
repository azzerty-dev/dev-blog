@extends('layouts.admin')

@section('title', 'Посты');

@section('content')

<div class="post-create">

    <span class="post-create-icon">
        <i class="fas fa-paste"></i>
    </span>

    <a href="{{ route('posts.create') }}">
        <button type="button" class="btn btn-success mb-4">
            Создать
        </button>
    </a>

</div>

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
                <td><input type="checkbox"></td>
                <td scope="row">{{ $post->id }}</td>
                <td>{{ $post->title }}</td>
                <td>
                    <img class="table-image" src="{{ $post->image }}" alt="">
                </td>
                <td>{{ $post->status }}</td>
                <td>{{ $post->project }}</td>
                <td>{{ $post->created_at }}</td>
                <td>{{ $post->updated_at }}</td>
                <td>
                    <a class="btn btn-info" href="{{ route('posts.edit', $post) }}">Смотреть</a>
                    <br>
                    <a class="btn btn-primary" href="{{ route('posts.edit', $post) }}">Изменить</a>
                    <br>
                    <a class="btn btn-danger" href="{{ route('posts.edit', $post) }}">Удалить</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<div class="paginate">
    {{ $posts->links() }}
</div>

@endsection
