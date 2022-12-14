<script src="sweetalert2.all.min.js"></script>
<?php include "database/conn.php"; ?>

<?php
if (isset($_GET['edit'])) {
  $id_edit = (int)$_GET['edit'];

  $stmt = $conn->prepare("SELECT * FROM clientes WHERE id_cliente =$id_edit");
  $result = $stmt->execute();
  $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
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

  <!--CSS sweetalert2-->
  <link rel="stylesheet" href="sweetalert2.min.css">

  <!--scripts sweetalert2-->
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="sweetalert2.min.js"></script>

  <!-- Jquery Mask -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>

  <!-- style navbar -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- bootstrap icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">


  <!-- https://www.w3schools.com/howto/howto_js_topnav_responsive.asp -->

  <script src="../functions/navbar.js"></script>


  <title>Editar cliente</title>

</head>


<body id="corpo">

  <div class="topnav" id="myTopnav">
    <a href="index.php">
      <img class="svg" src="../assets/icon-spreadsheet.svg" alt="consultar">
      Consulta</a>
    <a href="register.php">
      <img class="svg" src="../assets/icon-person-add.svg" alt="cadastrar cliente">
      Cadastrar cliente</a>
    <a href="../php/logout.php">
      <img class="svg" src="../assets/icon-box-arrow-right.svg" alt="encerrar sess??o">
      Encerrar sess??o</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">

    </a>
  </div>


  <div style="padding-left:16px">
    <h1 style="text-align: center; margin-top:50px">EDITAR CLIENTE</h1>
  </div>


  <div class="container">
    <div class="col-12 col-sm-12  col-md-12 col-lg-12 col-xl-12 my-6 mx-6  p-5 mt-5">
      <div class="jumbotron">
        <!--Inicio do Formulario-->
        <!-- o action indica para onde os dados do form sera encaminhado! -->
        <form action="crud/update.php" method="POST">

          <input type="number" name="id" value="<?php echo $id_edit ?>" style="display:none">

          <!--Nome do ??suario-->
          <div class="mb-5">
            <label for="nome">
              <img class="img-label" src="../assets/icon-person-add.svg">
              Nome Completo</label>
            <input type="text" class="form-control" name="nome" placeholder="Nome Completo" required value="<?php echo $rows[0]['nome'] ?>">
          </div>
          <!--Email do ??suario-->
          <div class="mb-5">
            <label for="nome">
              <img class="img-label" src="../assets/icon-mail.svg">
              E-Mail</label>
            <input type="email" class="form-control" name="email" placeholder="E-Mail" required value="<?php echo $rows[0]['email'] ?>">
          </div>
          <!--cpf do ??suario-->
          <div class="mb-5">
            <label for="nome">
              <img class="img-label" src="../assets/icon-document.svg">
              CPF</label>
            <input type="text" id="cpf" class="form-control" name="cpf" placeholder="CPF" required maxlength="11" value="<?php echo $rows[0]['cpf'] ?>">
          </div>
          <!--Telefone do ??suario-->
          <div class="mb-5">
            <label for="nome">
              <img class="img-label" src="../assets/icon-phone.svg">
              Telefone</label>
            <input type="text" id="telefone" class="form-control" name="telefone" placeholder="Telefone" required maxlength="11" value="<?php echo $rows[0]['telefone'] ?>">
          </div>
          <center><input name="atualizar" id="btn-enviar" type="submit" value="Editar Cliente"></center>

      </div>
    </div>
    </form>
  </div>
  </div>
  </div>
</body>

<script type="text/javascript">
  $("#telefone").mask("(00) 00000-0000");
</script>


<script type="text/javascript">
  $("#cpf").mask("000.000.000-00");
</script>


</html>
<?php
