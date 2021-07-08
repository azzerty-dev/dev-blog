@extends('layouts.admin')

@section('title', 'Проекты')

@section('content')

<div class="post-create">
    <span class="post-create-icon">
        <i class="fas fa-paste"></i>
    </span>

    <a href="{{ route('projects.create') }}">
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
        <th scope="col">Статус</th>
        <th scope="col">Создано</th>
        <th scope="col">Обновлено</th>
        <th scope="col">Действия</th>
      </tr>
    </thead>

    <tbody>
        @foreach ($projects as $project )
            <tr>
                <td scope="row">{{ $project->id }}</td>
                <td>{{ $project->name }}</td>
                <td>{{ $project->status }}</td>
                <td>{{ $project->created_at }}</td>
                <td>{{ $project->updated_at }}</td>
                <td>
                    <div class="action">
                        <a href="{{ asset(route('projects.edit', $project)) }}"><button class="btn btn-info">Смотреть</button></a>
                        <a href="{{ asset(route('projects.edit', $project)) }}"><button class="btn btn-primary">Обновить</button></a>
                        <form method="POST" action="{{ asset(route('projects.destroy', $project)) }}">
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
    {{ $projects->links() }}
</div>

@endsection