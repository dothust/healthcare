<?php
session_start();
//include("php/userLogin.php")
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Healthcare - Login</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <?php
      if (isset($_SESSION['error'])) :
      ?>
        <div class="container">
          <div class="notification is-info mx-auto mt-5">
            <div class="alert alert-danger" role="alert">
              <h4 class="alert-heading">E-mail ou senha inválidos.</h4>
              <hr>
              <p>Tente novamente ou clique em "Esqueceu a senha?" para redefini-la.</p>
              <hr>
            </div>
          </div>
        </div>
      <?php
      endif;
      unset($_SESSION['error']);
      ?>
      <div class="card-body">
        <form class="was-validated" method="POST" action="php/userLogin.php">
          <div class="form-group">
            <div class="form-label-group">
              <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required="required" autofocus="autofocus">
              <label for="inputEmail" style="cursor:auto">E-mail</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" name="senha" id="inputPassword" class="form-control" placeholder="Senha" required="required">
              <label for="inputPassword" style="cursor:auto">Senha</label>
            </div>
          </div>
          <div class="form-group">
            <div class="checkbox">
              <label>
                <input type="checkbox" value="remember-me">
                Lembrar senha
              </label>
            </div>
          </div>
          <input type="submit" name="login" value="Login" class="btn btn-primary btn-block">
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="register.php">Registrar uma conta</a>
          <a class="d-block small" href="forgot-password.html">Esqueceu a senha?</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>