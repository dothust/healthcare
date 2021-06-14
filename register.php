<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Healthcare - Registro</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body class="bg-dark">
  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Registrar uma conta</div>
      <?php
      if (isset($_SESSION['status'])) :
      ?>
        <div class="container">
          <div class="notification is-info mx-auto mt-5">
            <div class="alert alert-success" role="alert">
              <h4 class="alert-heading">Cadastro efetuado com sucesso!</h4>
              <hr>
              <p>Mensagem bonita.<br>
                Complemento da mensagem bonita.</p>
              <hr>
            </div>
          </div>
        </div>
      <?php
      endif;
      unset($_SESSION['status']);
      ?>

      <?php
      if (isset($_SESSION['user_exist'])) :
      ?>
        <div class="container">
          <div class="notification is-info mx-auto mt-5">
            <div class="alert alert-danger" role="alert">
              <h4 class="alert-heading">Oops!</h4>
              <hr>
              <p>O endereço de e-mail selecionado já está sendo utilizado.<br>
                Insira um endereço de e-mail diferente do informado.</p>
              <hr>
            </div>
          </div>
        </div>
      <?php
      endif;
      unset($_SESSION['user_exist']);
      ?>
      <?php
      if (isset($_SESSION['diferent_password'])) :
      ?>
        <div class="container">
          <div class="notification is-info mx-auto mt-5">
            <div class="alert alert-danger" role="alert">
              <h4 class="alert-heading">Senhas diferentes!</h4>
              <hr>
              <p>As senhas digitadas são diferentes. Por favor, tente novamente.</p>
              <hr>
            </div>
          </div>
        </div>
      <?php
      endif;
      unset($_SESSION['diferent_password']);
      ?>
      <div class="card-body">
        <form method="post" action="vendor/reg.php">
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" name="name" id="inputName" class="form-control" placeholder="Name" required="required" autofocus="autofocus">
              <label for="inputName" style="cursor:auto">Nome Completo</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="email" name="email" id="inputEmail" maxlength="50" class="form-control" placeholder="Email address" required="required">
              <label for="inputEmail" style="cursor:auto">E-mail</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="password" name="senha" id="inputPassword" maxlength="32" class="form-control" placeholder="Senha" required="required">
                  <label for="inputPassword" style="cursor:auto">Senha</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="password" name="password2" id="confirmPassword" class="form-control" placeholder="Confirmar senha" required="required">
                  <label for="confirmPassword" style="cursor:auto">Confirmar senha</label>
                </div>
              </div>
            </div>
          </div>
          <input type="submit" name="Registrar" class="btn btn-primary btn-block">
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="login.html">Página de login</a>
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