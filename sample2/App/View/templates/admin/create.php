<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CREATE</title>
</head>

<body>
    <h2>Добавьте новость!!!</h2>
    <form action="/?ctrl=Save&id=article&id" method="post">
        <p><input type="text" name="title" size="77" placeholder="Заголовок статьи!!!" required></p>
        <p><textarea name="content" cols="80" rows="20" placeholder="Текст" required></textarea></p>
        <p><input type="text" name="author" placeholder="Автор статьи!!!" required></p>
        <button type="submit">Добавить</button>
    </form>
</body>

</html>