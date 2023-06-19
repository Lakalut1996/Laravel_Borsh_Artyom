<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>@section('title')@show</title>
</head>

    {{-- <style>
* {
  margin: 0;
  padding: 0;
  font-size: 24px;
  color: white;
}

body {
  background: linear-gradient(45deg, #000000, #484955);
}

.head {
  width: 100%;
  height: 5vh;
  display: flex;
  align-items: center;
  justify-content: center;
  margin-bottom: 1vh;
  background-color: rgba(72, 73, 85, 0.6509803922);
}

.content {
  display: flex;
  flex-wrap: wrap;
  min-height: 90vh;
}

.panel {
  width: 20%;
  display: flex;
  flex-wrap: wrap;
  align-content: flex-start;
}

.link {
  text-decoration: none;
  border-radius: 10px;
  box-shadow: 0px 0px 15px rgba(138, 149, 185, 0.7);
  width: 100%;
  min-height: 2vw;
  display: flex;
  align-items: center;
  margin-bottom: 1vh;
  padding-left: 1vw;
  transition: 0.3s;
}

.link:hover {
  background-color: #000000;
  transform: translateX(1vw);
}

.container {
  width: 75%;
  margin-left: 1vh;
  border-radius: 10px;
  box-shadow: 0px 0px 15px rgba(138, 149, 185, 0.7);
  padding: 1vw;
}

footer {
  margin-top: 2vh;
  height: 10vh;
  display: flex;
  align-items: center;
  justify-content: center;
  background-color: rgba(72, 73, 85, 0.6509803922);
}/*# sourceMappingURL=style.css.map */
    </style> --}}

<body>
    <div class="head">Это сайт с новостями</div>
    <div class="content">
        <div class="panel">
            <a class="link" href="{{route('index')}}">Главная</a>
            <a class="link" href="{{route('categories/list')}}">Перейти к категориям</a>
            <a class="link" href="{{route('news/list', ['categories' => 'all'])}}">Все новости</a>
            <a class="link" href="{{route('admin')}}">Admin</a>
            <a class="link" href="{{route('admin/store')}}">test</a>
        </div>
        <div class="container">
            @yield('content')
        </div>
    </div>
    <footer>тут подвал сайта и какая то ооочень важная информация</footer>
</body>

</html>