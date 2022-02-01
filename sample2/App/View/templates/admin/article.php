<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARTICLE</title>
</head>

<body>
    <h2><?= $article->title; ?></h2>
    <hr>
    <p><?= $article->content; ?></p>
    <p>
        <?php
        if (!empty($article->author)) {
            echo 'Автор: ' . $article->author;
        } else {
            echo 'Автор: Без Автора!!!';
        }
        ?>
    </p>
    <hr>
    <p align="center">
        <a style="color: red;" href="./?ctrl=Delete&id=<?= $article->id; ?>"><b>Удалить</b></a>
        <a style="color: greenyellow;" href="./?ctrl=Update&id=<?= $article->id; ?>"><b>Редактировать</b></a>
    </p>
</body>

</html>