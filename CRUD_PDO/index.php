<!--Tela de Login -->
<!doctype html>
<html lang="pt-br">

<head>
  
  <link rel="shortcut icon" href="img/icon.png">
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--css Local-->
  <link href="css/style.css" rel="stylesheet">
  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  <title>Login</title>
</head>

<body id="corpo">
  

  <div class="container">
    <div class="row">

    </div>
    <div class="col-12 col-sm-12  col-md-7 col-lg-6 col-xl-4 my-6 mx-auto  p-5 mt-5">
      <div class="jumbotron">
        <img id="img-bento" src="img/banner.png" alt="">
        <h1 class="display-4">LOG IN</h1>
        <!--FORMULARIO DE LOGIN -->
        <form action="php/login.php" method="POST">
          <!-- user input -->
          <div class="form-outline mb-4">
            <i class="bi bi-person-fill"></i>
            <input type="email" id="form1Example1" placeholder="Email do usuário" name="email" autocomplete="off" />
            <label class="form-label" for="form1Example1"></label>
          </div>
          <!-- Password input -->
          <div class="form-outline mb-4">
            <i class="bi bi-shield-lock-fill"></i>
            <input type="password" id="form1Example2" placeholder="Senha do usuário" name="senha" autocomplete="off" />
            <label class="form-label" for="form1Example2"></label>
          </div>
          <!-- 2 column grid layout for inline styling -->
          <div class="row mb-4">
            <div class="col d-flex justify-content-center">
              <!-- Checkbox -->
            </div>
            <div class="col">
            </div>
          </div>
          <!-- Submit button -->
          <center><button type="submit" class="btn btn-light btn-block">Login</button>
          </center>
        </form>
        <center>
          <a id="btn-register" href="php/register.php">Não possui uma conta?</a>
        </center>
        </a>
      </div>
    </div>
  </div>

  <?php
  include "functions/alertError.php";
  include "functions/alertSuccess.php";
  if (isset($_GET['error']) || isset($_GET['sessionError'])) {
    alertError();
    header("Refresh:3; url=index.php");
    die();
  }
  if(isset($_GET['registerSuccess'])){
    alertSuccess("Usuário","Cadastrado");
  }

  ?>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>