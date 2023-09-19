<?php

require_once '../../connect.php';
require_once '../../class/doctor.php';
$id = $_POST['doctor_id'];
$id = $_GET['id'];

$deleteDate = new Doctor($pdo);
$deleteDate->deleteDate($id);

header('location:/project/admin/admin.php');