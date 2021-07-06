@extends('layouts.admin')

@section('title', 'Посты')

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

    <div class="alert">
        @if(session('success'))
            <div class="alert alert-success"><h5>{{ session('success') }}</h5></div>
        @endisset

        @if(session('danger'))
        <div class="alert alert-danger"><h5>{{ session('danger') }}</h5></div>
    @endisset
    </div>
</div>

<table class="table">

    <thead>
      <tr>
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
                    <div class="action">
                        <a href="{{ asset(route('posts.edit', $post)) }}"><button class="btn btn-info">Смотреть</button></a>
                        <a href="{{ asset(route('posts.edit', $post)) }}"><button class="btn btn-primary">Изменить</button></a>
                        <form method="POST" action="{{ asset(route('posts.destroy', $post)) }}">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Удалить</button>
                        </form>
                    </div>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<div class="paginate">
    {{ $posts->links() }}
</div>

@endsection