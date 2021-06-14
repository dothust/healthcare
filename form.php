<?php
if (!isset($_SESSION)) {
  session_start();
}
include("vendor/verify.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Healthcare - Formulário</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">


  <!-- SCRIPTS -->
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
  <script type="text/javascript" src="scripts/jquery.rwdImageMaps.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script src="http://www.outsharked.com/scripts/jquery.imagemapster.js"></script>=

</head>

<body class="bg-dark">
  <form method="POST" action="vendor/formInsertion.php">

    <!-- CARD IDENTIFICAÇÃO DO PACIENTE -->

    <div class="container">
      <div class="card card-register mx-auto mt-5">
        <div class="card-header"><b>Identificação do paciente</b></div>
        <div class="card-body">
          <div class="mb-3">
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" name="nome" id="nome" class="form-control" placeholder="Nome do paciente" required="required" autofocus="autofocus">
                <label for="nome" style="cursor:auto">Nome do paciente</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-row">
                <label for="nascimento" class="col-2 col-form-label">Nascimento</label>
                <div>
                  <input class="form-control" type="date" name="nascimento" id="nascimento" value="00/00/000">
                </div>
                <div class="col">
                  <select class="custom-select" name="cor" required>
                    <option value="">Cor</option>
                    <option value="1">Branca</option>
                    <option value="2">Preta</option>
                    <option value="3">Parda</option>
                    <option value="4">Amarelo</option>
                  </select>
                </div>
              </div>
            </div>
            <fieldset class="form-group">
              <div class="row">
                <legend class="col-form-label col-sm-2 pt-0">Sexo</legend>
                <div class="col-sm-10 row">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="sexo" id="masculino" value="masculino" checked>
                    <label class="form-check-label" for="masculino">
                      Masculino
                    </label>&nbsp&nbsp&nbsp
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="sexo" id="feminino" value="feminino">
                    <label class="form-check-label" for="feminino">
                      Feminino
                    </label>
                  </div>
                </div>
              </div>
            </fieldset>
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-4">
                  <div class="form-label-group">
                    <input type="text" name="enfermaria" id="enfermaria" class="form-control" placeholder="Enfermaria" required="required">
                    <label for="enfermaria" style="cursor:auto">Enfermaria</label>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-label-group">
                    <input type="text" name="setor" id="setor" class="form-control" placeholder="Setor" required="required">
                    <label for="setor" style="cursor:auto">Setor</label>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-label-group">
                    <input type="leito" name="leito" id="leito" class="form-control" placeholder="Leito" required="required">
                    <label for="leito" style="cursor:auto">Leito</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="form-row">
                <label for="internacao" class="col-2 col-form-label">Internação</label>
                <div>
                  <input class="form-control" type="date" value="00/00/000" id="internacao" name="internacao">
                </div>
                <div class="col">
                  <input type="text" name="prontuario" id="prontuario" class="form-control" placeholder="Prontuário" required="required">
                </div>
              </div>
            </div>
            <label for="diagnostico">Diagnóstico médico</label>
            <textarea class="form-control" id="diagnostico" name="diagnostico" placeholder="Diagnóstico médico" required></textarea>
          </div>
        </div>
        <input type="submit" name="Enviar" class="btn btn-primary btn-block">
      </div>
    </div>
  </form>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/bootstrap/js/multistep.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script src="scripts/jquery.rwdImageMaps.min.js"></script>




</body>

</html>