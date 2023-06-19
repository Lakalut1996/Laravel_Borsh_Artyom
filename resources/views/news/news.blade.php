@extends('news/main')

@section('title')
    @parent NewesSite
@endsection

@section('content')
    <h1>Новости из раздела <?= $newsList[0]['category'] ?> </h1>

    <!-- <?php
            echo "<pre>";
            print_r("Сессия ");
            print_r($newsList);
            echo "</pre>";
            ?> -->

    @foreach ($newsList as $key => $value)
    <h1>{{$value['header']}}</h1>
    <div>Категория: {{$value['category']}}</div>
    <div>Автор новости: {{$value['autor']}}</div>
    <div>{{$value['txt']}}</div>
    <a class="link" href="#">Открыть новость(не успел доделать)</a>
    <hr>
    @endforeach
@endsection
