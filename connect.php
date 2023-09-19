<?php

$host = 'localhost';
$username = 'root';
$pass = 'root';
$dbname = 'OKB';

 $pdo = new PDO("mysql:host=$host;dbname=$dbname;",  $username, $pass);
