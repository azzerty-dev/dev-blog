@extends('layouts.admin')

@section('title', 'Создание поста')

@section('content')

    <script src="https://cdn.tiny.cloud/1/u260oscud6f2uzr549nri7lttpfkn27kc6a2brg7p4uhi0vj/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

    <div class="create-post">

        <form action="{{ ('create-post') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Заголовок</label>
                <input name="title" class="form-control" type="text" aria-label="default input example">

                <div class="tiny-form">
                    <label for="body" class="form-label">Содержание</label>
                    <textarea name="body" rows="22"></textarea>
                </div>

                <label for="image" class="form-label">Фотография</label>
                <input name="image" class="form-control" type="file" id="formFile">

                <label for="exampleInputEmail1" class="form-label">Проект</label>
                <select name="project" class="form-select" aria-label="Default select example">
                    <option value="One">One</option>
                    <option value="Two">Two</option>
                    <option value="Three">Three</option>
                </select>
            </div>

            <div>
            <label for="exampleInputEmail1" class="form-label">Статус</label>
            <select name="status" class="form-select" aria-label="Default select example">
                <option value="PUBLISHED">PUBLISHED</option>
                <option value="DRAFT">DRAFT</option>
                <option value="PENDING">PENDING</option>
            </select>
            </div>

            <button type="submit" class="btn btn-primary submit">Submit</button>
    </form>

</div>

@endsection
