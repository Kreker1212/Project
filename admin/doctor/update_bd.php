<?php

require_once '../../connect.php';
require_once '../../class/doctor.php';

$id = $_POST['id'];
$name = $_POST['name'];
$surname = $_POST['surname'];
$experience = $_POST['experience'];

$update = new Doctor($pdo);
$update = $update->updateDoctor($name, $surname, $experience, $id);


header('location:/project/admin/admin.php');