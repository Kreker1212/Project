<?php

require_once '../../connect.php';
require_once '../../class/doctor.php';

$doctorId = $_GET['id'];

$doctor = new Doctor($pdo);
$doctor = $doctor->getDoctorByID($doctorId);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>

</style>

<body>
<h3>Update</h3>
<form action="update_bd.php" method="post">
    <input type="hidden" name='id' value="<?= $doctor['id'] ?>">
    <p>name</p>
    <input type="text" name="name" value="<?= $doctor['name'] ?>">
    <p>surname</p>
    <input type="text" name="surname" value="<?= $doctor['surname'] ?>">
    <p>experience</p>
    <input type="text" name="experience" value="<?= $doctor['experience'] ?>"> <br>
    <button type="submit"> Update</button>
</form>
</body>

</html>