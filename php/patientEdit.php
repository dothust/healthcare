<?php

if (!isset($_SESSION))
  session_start();


include("connection.php");

// Registro dos dados



$query = mysqli_real_escape_string($connection, trim($_POST['nome']));
//$pac_idade = mysqli_real_escape_string ($connection, trim($_SESSION['NOW()']));
//$senha = mysqli_real_escape_string ($connection, trim(md5($_SESSION['senha'])));

$sql = "INSERT INTO patient (nome, idade) VALUES ('$nome', NOW())";

$confirm = $connection->query($sql) or die($connection->error);

if ($confirm) {
  unset(
    $_SESSION['nome'],
    $_SESSION['idade']
  );
}

// $id = $_GET['user'];



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

<body>
  <form method="POST">
    <input type="text" name="pac_nome">
  </form>
  <input type="submit" name="registrar">
</body>
<!--
<body class="bg-dark">
  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Registrar uma conta</div>
      <div class="card-body">
        <form method="POST" action="index.php?p=pac_edit">
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" name="pac_nome" class="form-control" placeholder="Nome do paciente" required autofocus="autofocus">
              <label for="inputName" style="cursor:auto">Nome Completo</label>
            </div>
          </div>
          <input type="submit" value="Registrar" name="registrar" class="btn btn-primary btn-block">
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="login.html">Página de login</a>
          <a class="d-block small" href="forgot-password.html">Esqueceu a senha?</a>
        </div>
      </div>
    </div>
  </div> -->

<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>