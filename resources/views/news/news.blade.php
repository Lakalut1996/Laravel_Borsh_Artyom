<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Новости из раздела <?= $newsList[0]['category'] ?> </h1>

    <!-- <?php
            echo "<pre>";
            print_r("Сессия ");
            print_r($newsList);
            echo "</pre>";
            ?> -->

    @foreach ($newsList as $key => $value)
    <h1>{{$value['header']}}</h1>
    <div>Автор новости: {{$value['autor']}}</div>
    <div>{{$value['txt']}}</div>
    <a href="/categories">Открыть новость(не успел доделать)</a>
    <hr>
    @endforeach

    <a href="{{route('categories.list')}}">Вернуться к категориям</a>

</body>

</html>