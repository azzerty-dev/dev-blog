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
        <tr>
            <td> <input id="checkbox" type="checkbox"> </td>
            <td> 1 </td>
            <td> Тестовое название</td>
            <td> <img class="td-img" src="{{asset('/storage/test-1.jpg')}}" alt=""> </td>
            <td> Опубликованно </td>
            <td> 21.02.12</td>
            <td> 21.02.12 </td>
            <td>
                <button type="button" class="btn btn-warning">Посмотреть</button>
                <button type="button" class="btn btn-info">Изменить</button>
                <button type="button" class="btn btn-danger">Удалить</button>
            </td>
        </tr>

        <tr>
            <td> <input id="checkbox" type="checkbox"> </td>
            <td> 1 </td>
            <td> Тестовое название</td>
            <td> <img class="td-img" src="{{asset('/storage/test-1.jpg')}}" alt=""> </td>
            <td> Опубликованно </td>
            <td> 21.02.12</td>
            <td> 21.02.12 </td>
            <td>
                <button type="button" class="btn btn-warning">Посмотреть</button>
                <button type="button" class="btn btn-info">Изменить</button>
                <button type="button" class="btn btn-danger">Удалить</button>
            </td>
        </tr>
        </tbody>
    </table>
@endsection
