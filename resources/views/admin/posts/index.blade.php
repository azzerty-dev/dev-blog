@extends('layouts.admin')

@section('title', 'Посты')

@section('content')

    <img class="icon" src="{{asset('/storage/post-icon.svg')}}" alt="">
    <a href="{{ route( 'posts.create' ) }}">
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
        @foreach($posts as $post)
            <tr>
                <td> <input id="checkbox" type="checkbox"> </td>
                <td> {{$post->id}} </td>
                <td> {{$post->title}} </td>
                <td> <img class="td-img" src="{{$post->image}}" alt=""> </td>
                <td> {{$post->status}} </td>
                <td> {{$post->created_at}} </td>
                <td> {{$post->updated_at}} </td>
                <td>
                    <button  type="button" class="btn btn-warning">Посмотреть</button>
                    <a href="">
{{--                        {{ route('posts.edit') }}--}}
                        <button type="button" class="btn btn-info">Изменить</button>
                    </a>
                    <button type="button" class="btn btn-danger">Удалить</button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <div class="paginate">
        {{ $posts->links() }}
    </div>
@endsection
