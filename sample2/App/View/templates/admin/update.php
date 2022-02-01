<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPDATE</title>
</head>
<body>
    <h2>Редактировать новость!!!</h2>
    <form action="/?ctrl=Save&id=article&id" method="post">
        <p><input type="text" name="title" size="77" value="<?= $article->title; ?>" required></p>
        <p><textarea name="content" cols="80" rows="20">
            <?= $article->content; ?>
        </textarea>
        </p>
        <p><input type="text" name="author" value="<?= $article->author; ?>" required></p>
        <input type="hidden" name="id" value="<?= $article->id; ?>">
        <button type="submit">Обновить</button>
    </form>
</body>
</html>