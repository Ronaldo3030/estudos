<?php
$db_host = 'localhost';
$db_name = 'devsnotes';
$dv_user = 'root';
$dv_pass = 'Bolo-123';

$pdo = new PDO("mysql:dbname=$db_name;host=$db_host", $db_user, $db_pass);

$array = [];