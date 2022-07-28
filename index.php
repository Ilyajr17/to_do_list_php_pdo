<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Список дел</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Списописк дел</h1>
        <form action="/add.php" method="POST">
            <input type="text" name="task" id="task" placeholder="Нужно сделать" class="form-control">
            <button type="submit" name="sendTask" class="btn btn-success">Отправить</button>
        </form>

    </div>
</body>
</html>