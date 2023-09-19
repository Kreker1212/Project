<?php

require_once '../../connect.php';
require_once '../../class/doctor.php';
?>

<table>
    <tr>
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
                <td><?= $doctors['name'] ?></td>
                <td><?= $doctors['surname'] ?></td>
                <td><?= $doctors['experience'] ?></td>
                <td><a href="record-choice.php?id=<?= $doctors['id'] ?>">Выбрать</a></td>
            </tr>
            <?php
        }
        ?>
        
        </pre>

</table>