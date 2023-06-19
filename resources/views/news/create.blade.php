@extends('news/main')

@section('title')
    @parent NewesSite
@endsection

@section('content')

@if ($errors->any())
    @foreach ($errors->all() as $error)
    <div>sd</div>
    @endforeach
@endif

    <h1>Добавить новость</h1>
    <form method="get" value="PUT" action="{{route('admin/store')}}">
        @csrf
        @method('PUT')
        <span>Имя автора</span>
        <input value="{{old('name_autor')}}" class="inp" type="text" name="name_autor" id="name_autor">
                
        <span>Заголовок статьи</span>
        <input class="inp" type="text" name="title" id="title">

        <span>текст статьи</span>
        <input class="inp" type="text" name="text" id="text">

        <button class="btn" >Сохранить</button>
    </form>

@endsection