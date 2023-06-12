<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Выбор категории новостей</h1>

    @foreach ($categoriesList as $key)
        <div>{{ $key }}</div>
        <a href="<?= route('news.list', ['categories' => $key]) ?>">перейти к <?= $key ?></a>
        <hr>
    @endforeach
</body>

</html>
