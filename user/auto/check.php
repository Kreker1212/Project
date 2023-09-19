<?php

require_once '../../connect.php';
require_once '../../class/user.php';


$login = filter_var(
    trim($_GET['login']),
    FILTER_UNSAFE_RAW
);
$name = filter_var(
    trim($_GET['name']),
    FILTER_UNSAFE_RAW
);
$pass = filter_var(
    trim($_GET['pass']),
    FILTER_UNSAFE_RAW
);

if (strlen($login) < 5 || strlen($login) > 90) {
    echo "Недопустимая длинна логина";
    exit();
} else {
    if (strlen($name) < 3 || strlen($name) > 20) {
        echo "Недопустимая длина имени";
        exit();
    } else {
        if (strlen($pass) < 2 || strlen($pass) > 6) {
            echo "Недопустимая длинна пароля(от 2 до 6 символов)";
            exit();
        }
    }
}
$pass = md5($pass . "dasdasdsa123");
$add = new User($pdo);
$add = $add->addUser($login, $pass, $name);
//$mysql->close();
header('location:auto.php');