<?php
include "crud/delete.php";
include "../database/conn.php";


if (isset($_POST['atualizar'])) {

  $id = $_POST['id'];
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $cpf = $_POST['cpf'];
  $telefone = $_POST['telefone'];

  $query = "UPDATE `clientes` SET `nome` = :nome, `email` = :email, `cpf` = :cpf, `telefone` = :telefone WHERE 
  `id_cliente` = :id";

  $pdoResult = $conn->prepare($query);
  $stmt = $pdoResult->execute(array(":nome" => $nome, ":email" => $email, ":cpf" => $cpf, "telefone" => $telefone, ":id" => $id,));

  if ($stmt) {
    header("location: ../index.php?successEdit");
    die();
  } else {
    header("location: ../index.php?error");
    die();
  }
}
