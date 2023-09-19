<?php

global $mysql;
require_once '../../connect.php';
require_once '../../class/record.php';
?>

<table>
    <tr>
        <th>Date</th>
        <th>Time</th>
    </tr>
    <pre>
<pre>
   <?php
   $id = $_COOKIE['user_id'];

   $records = new Record($pdo);
   $records = $records->getRecordByUserId($id);
   foreach ($records as $record) {
       ?>
       <tr>
           <td><?= $record['date'] ?></td>
           <td><?= $record['time'] ?></td>
       </tr>

       <?php
   }

   ?>
   </pre>

