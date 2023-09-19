<?php

require_once '../../connect.php';
require_once '../../class/doctor.php';
$id = $_GET['id'];

$deleteDoctor = new Doctor($pdo);
$deleteDoctor->deleteDoctor($id);
header('location:/project/admin/admin.php');