<?php 

define("HOST", "localhost");
define("USER", "root");
define("PASS", "Bolo-123");
define("DB", "ajax_php");

$pdo = new PDO("mysql:host=".HOST.";dbname=".DB, USER, PASS);