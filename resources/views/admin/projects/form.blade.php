@extends('layouts.admin')

@section('title', isset($project) ? 'Обновление проекта' : 'Создания проекта')

@section('content')

    <form method="POST" enctype="multipart/form-data"
    @if (isset($project))
        action="{{ route('projects.update', $project) }}"
        @else
        action="{{ route('projects.store') }}"
    @endif
    >

    @isset($project)
        @method('PUT')
    @endisset

    @csrf
    <div class="mb-3">
        @if($errors->any())
            <ul class="errors">
                @foreach($errors->all() as $error)
                    <li><h5>{{ $error }}</h5></li>
                @endforeach
            </ul>
        @endif
    </div>
    
    <div class="mb-3">
        <label for="name" class="form-label"><h6>Название</h6></label>
        <input name="name" type="text" class="form-control"
        value="{{  isset($project) ? $project->name : null }}"
        >
    </div>

    <div class="mb-3">
        <label for="status" class="form-label"><h6>Статус</h6></label>
        <select name="status" class="form-select" aria-label="Default select example">
            @isset($project)
                <option selected hidden>{{ $project->status }}</option>
            @endisset
            <option value="PUBLISHED">PUBLISHED</option>
            <option value="DRAFT">DRAFT</option>
            <option value="PENDING">PENDING</option>
        </select>
    </div>

    <button type="submit" class="btn btn-primary submit">
        @if (isset($project))
            Обновить
            @else
            Сохранить
        @endif
</button>
</form>

@endsection