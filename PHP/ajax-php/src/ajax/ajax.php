<?php
header('Content-Type: application/json');
require_once('../../db.php');

$acao = $_POST["acao"];

if ($acao == "inserir") {
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
} else if ($acao == "mostrar") {
  $stmt = $pdo->prepare("SELECT * FROM user order by id desc");
  $stmt->execute();
  $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

  echo json_encode($users);
}
