<?php

require_once '../../connect.php';
require_once '../../class/record.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Запись</title>
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

</tr>
<table>
    <tr>
        <th>id</th>
        <th>Дата</th>
        <th>Время</th>
    </tr>
    <pre>
        <?php
        $id = $_GET['id'];
        $doctorDate = new Record($pdo);
        $doctorDate = $doctorDate->getRecordsById($id);
        foreach ($doctorDate as $record) {
            ?>
            <tr>
                <td><?= $record['id'] ?></td>
                <td><?= $record['date'] ?></td>
                <td><?= $record['time'] ?></td>
                <td><a style="color: red;" href="delete_date.php?doctor_id=<?= $record['record'] ?>&id=<?= $record['id'] ?>">Delete</a></td>
            </tr>
            <?php
        }
        ?>
        </pre>
</table>
<form action="datebd.php" method="POST">
    <label for="date">Дата: </label>
    <input type="date" id="date" name="date"/>
    <label for="time">Время: </label>
    <input type="time" id="time" name="time"/>
    <input type="hidden" name="id" value="<?= $id ?>">
    <p>
    </p>
    <p>
        <button type="submit" href="datebd.php?id=<?= $id ?>">Добавить</button>
        <br>
        <a href="/project/admin/admin.php">Назад</a>
    </p>
</form>
</body>
</html>