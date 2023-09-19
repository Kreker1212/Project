<?php
require_once 'class/cookie.php';
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма регистрации</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
<div align="center" class="container mt-4">
    <?php
    $cookie = new cookie();
    if ($cookie->getUsername() == null):
    ?>
    <div class="row">
        <div class="col">
            <h1>Форма регистрации</h1>
            <form action="/user/auto/check.php" method="GET">
                <input type="text" class="form-control" name="login" id="login" placeholder="Введите логин"><br>
                <input type="text" class="form-control" name="name" id="name" placeholder="Введите имя"><br>
                <input type="password" class="form-control" name="pass" id="pass" placeholder="Введите пароль"><br>
                <button class="btn btn-success" type="submit">Зарегистрировать</button>
            </form>
        </div>
        <div align="center" class="container mt-4">
            <a class="btn btn-success" style="width: 120px; " href="user/auto/auto.php">Авторизация</a>
        </div>
        <?php
        else: ?>
            <p>
                <?= $cookie->getUsername(); ?>
                <a href="user/auto/exit.php">Выход</a>
            </p>
            <p>
                <a href="user/recording/recording-doctor.php">Запись на приём</a>
                <a href="user/recording/record-user.php">Мои записи</a><br>
            </p>
        <?php
        endif; ?>

    </div>
</div>

</body>

</html>