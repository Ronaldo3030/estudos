<?php
require_once('../../db.php');
$stmt = $pdo->prepare("SELECT * FROM user");
$stmt->execute();
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($users);
