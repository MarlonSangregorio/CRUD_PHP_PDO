<?php

if (isset($_POST['email'])) {



  include "conn.php";

  $email = $_POST['email'];
  $senha = $_POST['senha'];
  /*
  $sql_code = "SELECT * FROM usuarios WHERE email = '$email'LIMIT 1";
  $sql_exec = $mysqli->query($sql_code) or die($mysqli->error);
  $usuario = $sql_exec->fetch(PDO::FETCH_ASSOC);
*/
  $sql_exec = $conn->prepare("SELECT * FROM usuarios WHERE email = '$email' LIMIT 1");
  $sql_exec->execute();
  $usuario = $sql_exec->fetch(PDO::FETCH_ASSOC);


  if (password_verify($senha, $usuario['senha'])) {
    session_start();
    $_SESSION['login'] = "usuario";
    header("location: ../Restrito/index.php?loginSuccess");
    die();
  } else {
    header("location: ../index.php?sessionError");
    die();
  }
}

if ($mysqli->connect_errno) {
  echo "Connect Failed" . $conn->connect_error;
}
