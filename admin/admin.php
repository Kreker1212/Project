<?php

require_once '../class/doctor.php';
require_once '../connect.php';

if ('admin' != $_COOKIE['user']) {
    header('location:/index.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
</head>
<style>
    th,
    td {
        padding: 10px;
    }

    th {
        background: #606060;
        color: #ffffff;
    }

    td {
        background: #c0c0c0;
        color: #ffffff;
    }
</style>
<body>
<table>
    <tr>
        <th>id</th>
        <th>name</th>
        <th>surname</th>
        <th>experience</th>
    </tr>
    <pre>
        <?php
        $doctor = new Doctor($pdo);
        $doctor = $doctor->getDoctors();
        foreach ($doctor as $doctors) {
            ?>
            <tr>
                <td><?= $doctors['id'] ?></td>
                <td><?= $doctors['name'] ?></td>
                <td><?= $doctors['surname'] ?></td>
                <td><?= $doctors['experience'] ?></td>
                <td><a href="doctor/update.php?id=<?= $doctors['id'] ?>">Update</a></td>
                <td><a style="color: red;" href="doctor/delete.php?id=<?= $doctors['id'] ?>">Delete</a></td>
                <td><a style="color: blue;" href="doctor/date.php?id=<?= $doctors['id'] ?>">Date</a></td>
            </tr>
            <?php
        }
        ?>
        
        </pre>

</table>
<h3>Add new Doctor</h3>
<form action="doctor/add.php" method="post">
    <p>name</p>
    <input type="text" name="name">
    <p>surname</p>
    <input type="text" name="surname">
    <p>experience</p>
    <input type="text" name="experience"> <br>
    <button type="submit"> add</button>
</form>
<a href="exit.php">Выход</a>
</body>

</html>
