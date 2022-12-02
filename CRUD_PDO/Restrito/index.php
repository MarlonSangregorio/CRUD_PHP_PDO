<?php
include "database/conn.php";
include "../functions/alertSuccess.php";
?>

<!doctype html>
<html lang="pt_br">

<head>
  <link rel="shortcut icon" href="../img/icon.png">
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSS local-->
  <link rel="stylesheet" href="../Restrito/style.css">

  <!-- Bootstrap CSS -->
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <!--Fez Milagre -->
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

  <!-- style navbar -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- bootstrap icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

  <!-- https://www.w3schools.com/howto/howto_js_topnav_responsive.asp -->

  <script src="../functions/navbar.js"></script>


  <title>Ínicio</title>

</head>

<body>
  <div class="topnav" id="myTopnav">
    <a href="#consulta" class="active">
      <img class="svg" src="../assets/icon-spreadsheet.svg" alt="consultar">
      Consulta</a>
    <a href="register.php">
      <img class="svg" src="../assets/icon-person-add.svg" alt="cadastrar usuário">
      Cadastrar  cliente</a>
    <a href="../php/logout.php">
      <img class="svg" src="../assets/icon-box-arrow-right.svg" alt="encerrar sessão">
      Encerrar sessão</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">

    </a>
  </div>

  <div style="padding-left:16px">
    <h1> CONSULTAR TABELA</h1>
    <h4>CRUD - CREATE - READ - UPDATE - DELETE</h4>
  </div>


  <div class="container-grid">
    <div class="col-9">
      <?php include "crud/delete.php" ?>
      <?php include "crud/read.php" ?>
    </div>
  </div>
</body>

</html>


<?php

if (isset($_GET['loginSuccess'])) {
  alertSuccess("Usúario", "Logado");
}

if (isset($_GET['successEdit'])) {
  alertSuccess("Cliente", "Editado");
}

if (isset($_GET['success'])) {
  alertSuccess("Cliente", "Cadastrado");
}

?>

<!--
<script>
  const urlParams = new URLSearchParams(window.location.search);
  const success = urlParams.get("success");
  if (typeof success == "string") {
    alertSuccess();
  }
</script>
-->