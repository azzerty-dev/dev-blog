@extends('layouts.admin')

@section('title', 'Создание поста')

@section('content')

    <script src="https://cdn.tiny.cloud/1/u260oscud6f2uzr549nri7lttpfkn27kc6a2brg7p4uhi0vj/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

    <div class="create-post">
        <form action="{{ route('posts.store')}}" method="post" enctype="multipart/form-data">

            @csrf
            @if($errors->any())
                <ul class="contacts-errors">
                    @foreach($errors->all() as $error)
                        <li><h2>{{ $error }}</h2></li>
                    @endforeach
                </ul>
            @endif

            <div class="mb-3 post-create-table">
                <label for="title" class="form-label">Заголовок</label>
                <input name="title" class="form-control" type="text" aria-label="default input example">

                <div class="tiny-form">
                    <label for="body" class="form-label">Содержание</label>
                    <textarea name="body" rows="22"></textarea>
                </div>

                <label for="image" class="form-label">Фотография</label>
                <input name="image" class="form-control" type="file" id="formFile">

                <label for="project" class="form-label">Проект</label>
                <select name="project" class="form-select" aria-label="Default select example">
                    <option value="One">One</option>
                    <option value="Two">Two</option>
                    <option value="Three">Three</option>
                </select>

                <div>
                <label for="status" class="form-label">Статус</label>
                <select name="status" class="form-select" aria-label="Default select example" >
                    <option value="PUBLISHED">PUBLISHED</option>
                    <option value="DRAFT">DRAFT</option>
                    <option value="PENDING">PENDING</option>
                </select>
                </div>

                <button type="submit" class="btn btn-primary submit">Submit</button>
            </div>
    </form>

</div>

@endsection
