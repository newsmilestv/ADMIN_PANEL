<!doctype html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Article</title>
</head>

<body>
    <h2><?php echo $article->title; ?></h2>
    <hr>
    <p><?php echo $article->body; ?></p>
    <p>
        <?php
        if (isset($article->author)) {
            echo 'Автор: ' . $article->author->name;
        }
        ?>
    </p>
    <hr>
    <p align="center">
        <a href="./?ctrl=Delete&id=<?php echo $article->id; ?>">Удалить</a>
        |
        <a href="./?ctrl=Update&id=<?php echo $article->id; ?>">Редактировать</a>
    </p>
</body>

</html>