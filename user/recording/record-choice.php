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
<body>
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
<table>
    <tr>
        <th>Date</th>
        <th>Time</th>
    </tr>
    <pre>
    <pre>
        <?php
        $id = $_GET['id'];
        $records = new Record($pdo);
        $records = $records->getRecordByDoctorId($id);
        foreach ($records as $record) {
            ?>
            <tr>
                <td><?= $record['date'] ?></td>
                <td><?= $record['time'] ?></td>
                <td><a href="recording-db.php?doctor_id=<?= $id ?>&id=<?= $record['id'] ?>">Выбрать</a></td>
            </tr>

            <?php
        }
        ?>
        </pre>
</body>
</html>