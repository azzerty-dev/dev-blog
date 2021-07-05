@extends('layouts.admin')

@section('title', 'Создание поста')

@section('content')

<form method="POST" enctype="multipart/form-data"
@if (isset($post))
    action="{{ route('posts.update', $post) }}"
    @else
    action="{{ route('posts.store') }}"
@endif
>
    @isset($post)
        @method('PUT')
    @endisset

    @csrf
    <div class="mb-3">
        <label for="title" class="form-label"><h6>Название</h6></label>
        <input name="title" type="text" class="form-control"
        value="{{  isset($post) ? $post->title : null }}"
        >
    </div>

    <div class="mb-3">
        <label for="body" class="form-label"><h6>Содержимое</h6></label>
        <textarea name="body" class="form-control" rows="15">{{  isset($post) ? $post->body : null }}</textarea>
    </div>

    <div class="mb-3">
        <label for="image" class="form-label"><h6>Фото</h6></label>
        <input name="image" type="file" class="form-control">
    </div>

    <div class="mb-3">
        <label for="project" class="form-label"><h6>Проект</h6></label>
        <select name="project" class="form-select" aria-label="Default select example">
            <option selected hidden>Проект</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
        </select>
    </div>

    <div class="mb-3">
        <label for="status" class="form-label"><h6>Статус</h6></label>
        <select name="status" class="form-select" aria-label="Default select example">
            <option selected hidden>Статус</option>
            <option value="PUBLISHED">PUBLISHED</option>
            <option value="DRAFT">DRAFT</option>
            <option value="PENDING">PENDING</option>
        </select>
    </div>

    <button type="submit" class="btn btn-primary submit">
        @if (isset($post))
            Обновить
            @else
            Сохранить
        @endif
</button>
</form>

@endsection