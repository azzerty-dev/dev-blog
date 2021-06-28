@extends('layouts.admin')

@section('title', 'Посты')

@section('content')

    <img class="icon" src="{{asset('/storage/post-icon.svg')}}" alt="">
    <a href="{{asset(route('post-create'))}}">
        <button type="button" class="btn btn-success">Добавить пост</button>
    </a>

    <table class="table table-hover">
        <thead>
        <tr>
            <th><input type="checkbox" onclick="selectAll(this)"></th>
            <th> id </th>
            <th>Название</th>
            <th>Фото</th>
            <th>Статус</th>
            <th>Дата создания</th>
            <th>Дата изменения</th>
            <th>Действия</th>
        </tr>
        </thead>

        <tbody>
        @foreach($post as $post_content)
            <tr>
                <td> <input id="checkbox" type="checkbox"> </td>
                <td> {{$post_content->id}} </td>
                <td> {{$post_content->title}} </td>
                <td> <img class="td-img" src="{{$post_content->image}}" alt=""> </td>
                <td> {{$post_content->status}} </td>
                <td> {{$post_content->created_at}} </td>
                <td> {{$post_content->updated_at}} </td>
                <td>
                    <button type="button" class="btn btn-warning">Посмотреть</button>
                    <button type="button" class="btn btn-info">Изменить</button>
                    <button type="button" class="btn btn-danger">Удалить</button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
