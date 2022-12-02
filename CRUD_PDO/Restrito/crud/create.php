<?php include "../database/conn.php";
include "php/validar.php";

if (isset($_POST['nome']) && isset($_POST['email'])  && isset($_POST['cpf'])  && isset($_POST['telefone'])) {
  $sql = $conn->prepare("INSERT INTO clientes VALUES (null,?,?,?,?)");
  $sql->execute(array($_POST['nome'], $_POST['email'], $_POST['cpf'], $_POST['telefone']));
  header("location: ../index.php?success");
  die();
} else {
}
