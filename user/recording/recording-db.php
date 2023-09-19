<?php

require_once '../../connect.php';
require_once '../../class/record.php';

$doctorId = ($_GET['doctor_id']);
$userId = ($_COOKIE['user_id']);
$id = ($_GET['id']);

$update = new Record($pdo);
$update = $update->updateRecord($userId, $id);

header('location:/project');