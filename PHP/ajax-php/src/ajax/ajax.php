<?php
header('Content-Type: application/json');
require_once('../../db.php');

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];

$stmt = $pdo->prepare('INSERT INTO user (nome, sobrenome) values (:no, :so)');
$stmt->bindValue(':no', $nome);
$stmt->bindValue(':so', $sobrenome);
$stmt->execute();

if ($stmt->rowCount() >= 1) {
  echo json_encode("Comentario salvo com sucesso!");
} else {
  echo json_encode("Falha ao enviar comentario!");
}
