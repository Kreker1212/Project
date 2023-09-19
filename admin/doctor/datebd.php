<?php

require_once '../../connect.php';
require_once '../../class/doctor.php';

$date = $_POST['date'];
$time = $_POST['time'];
$id = $_POST['id'];
$addDate = new Doctor($pdo);
$addDate->addDate($id, $date, $time);

header('location:/project/admin/admin.php');
?>