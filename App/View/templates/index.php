<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MAIN PAGE</title>
</head>
<body>
    <p align="right"><a href="./?ctrl=Admin">Админ Панель</a></p>
    <hr>
    <?php foreach ($articles as $article): ?>
        <h2>
            <a href="./?ctrl=Article&id=<?= $article->id; ?>">
                <?= $article->title; ?>
            </a>
        </h2>

        <section>
            <?= $article->content; ?>
        </section>

        <p>Автор: <b><?= $article->author; ?></b></p>
    <?php endforeach; ?>
    
</body>
</html>