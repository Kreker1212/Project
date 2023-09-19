<?php

require_once '../../connect.php';
require_once '../../class/user.php';
require_once '../../class/cookie.php';


$login = filter_var(
    trim($_GET['login']),
    FILTER_UNSAFE_RAW
);
$pass = filter_var(
    trim($_GET['pass']),
    FILTER_UNSAFE_RAW
);

$pass = md5($pass . "dasdasdsa123");

$result = new User($pdo);
$result = $result->getUserByLoginPass($login, $pass);

if ($result == false) {
    echo "Такой пользователь не найден";
    exit();
} elseif ($result['login'] == 'admin') {
    $admin = new cookie();
    $admin->setUserCookie($result['name'], '3600', '/');
    header('location:/project/admin/admin.php');
    exit();
}

$coocieUserId = new cookie();
$coocieUserId->setUserIdCookie($result['id'], '3600', '/');
$coocieUserName = new cookie();
$coocieUserName->setUserCookie($result['name'], '3600', '/');

header('location:/project');