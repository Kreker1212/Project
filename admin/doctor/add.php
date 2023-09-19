<?php

require_once '../../connect.php';
require_once '../../class/doctor.php';

$name = $_POST['name'];
$surname = $_POST['surname'];
$experience = $_POST['experience'];

$addDoctor = new Doctor($pdo);
$addDoctor->addDoctor($name, $surname, $experience);

header('location:/project/admin/admin.php');
?>