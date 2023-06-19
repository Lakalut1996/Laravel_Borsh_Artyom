@extends('news/main')

@section('title')
    @parent NewesSite
@endsection

@section('content')
    <h1>Выбор категории новостей</h1>

    @foreach ($categoriesList as $key)
        <div>{{ $key }}</div>
        <a class="link" href="{{route('news/list', ['categories' => $key])}}">перейти к {{$key}}</a>
    @endforeach
@endsection
