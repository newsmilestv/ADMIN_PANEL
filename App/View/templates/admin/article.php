<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARTICLE</title>
</head>

<body>
    <p align="right">
        <a href="./?ctrl=Admin" style="font-weight: bold; font-size: large; color: palevioletred">
            Админ Панель
        </a>
    </p>

    <h2><?= $article->title; ?></h2>
    <hr>
    <p><?= $article->content; ?></p>

    <?php
    if (!empty($article->author)) {
        echo 'Автор: ' . $article->author;
    } else {
        echo 'Автор: Без Автора!!!';
    }
    ?>
    <hr>

    <p align="center">
        <a href="./?ctrl=Delete&id=<?= $article->id; ?>" style="color: red;">
            <b>Удалить</b>
        </a>
        <a href="./?ctrl=Update&id=<?= $article->id; ?>" style="color: yellowgreen;">
            <b>Редактировать</b>
        </a>
    </p>
</body>

</html>