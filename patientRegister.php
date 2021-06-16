<?php
if (!isset($_SESSION)) {
  session_start();
  include("php/sessionVerifier.php");
}
?>

<!-- Breadcrumbs-->
<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="index.php">Inserir Paciente</a>
  </li>
  <li class="breadcrumb-item active">Visão Geral</li>
</ol>

<!-- CARD IDENTIFICAÇÃO DO PACIENTE -->

<form method="POST" action="php/formInsertion.php">
  <div class="row mx-auto">
    <div class="col-6" style="border:solid">
      <hr>
      <div class="form-group mt-2">
        <label for="nome" class="col-form-label" style="cursor:auto">Nome do paciente</label>
        <input type="text" name="nome" id="nome" class="form-control" placeholder="Nome" required="required" autofocus="autofocus">
      </div>
      <div class="form-group row mb-4">
        <div class="col-4">
          <label for="nascimento" class="col-form-label" style="cursor:auto">Nascimento</label>
          <input class="form-control" type="date" name="nascimento" id="nascimento" value="00/00/000">
        </div>
        <div class="col-4">
          <label for="cor" class="col-form-label" style="cursor:auto">Cor</label>
          <select class="custom-select" name="cor" required>
            <option value=""></option>
            <option value="Branca">Branca</option>
            <option value="Preta">Preta</option>
            <option value="Parda">Parda</option>
            <option value="Amarelo">Amarelo</option>
          </select>
        </div>

        <div class="col-4">
          <div class="form-check row">
            <label for="sexo" class="col-form-label" style="cursor:auto">Sexo</label>
            <div class="mt-2">
              <label>
                <input id="sexo" name="sexo" type="radio" class="radio" value="Masculino" checked>
                <span>Masculino</span>
              </label>
              <label>
                <input id="sexo" name="sexo" type="radio" class="radio" value="Feminino">
                <span>Feminino</span>
              </label>
            </div>
          </div>
        </div>
      </div>

      <hr>

      <div class="form-group row">
        <div class="col-6 col-form-label">
          <label for="enfermaria" style="cursor:auto">Enfermaria</label>
          <input type="text" name="enfermaria" id="enfermaria" class="form-control" placeholder="Enfermaria" required="required">
        </div>
        <div class="col-6 col-form-label">
          <label for="setor" style="cursor:auto">Setor</label>
          <input type="text" name="setor" id="setor" class="form-control" placeholder="Setor" required="required">
        </div>
        <div class="col-6 col-form-label">
          <label for="leito" style="cursor:auto">Leito</label>
          <input type="leito" name="leito" id="leito" class="form-control" placeholder="Leito" required="required">
        </div>
        <div class="col-6 col-form-label">
          <label for="prontuario" style="cursor:auto">Prontuário</label>
          <input type="prontuario" name="prontuario" id="prontuario" class="form-control" placeholder="Prontuário" required="required">
        </div>
      </div>
      <div class="form-group row my-4">
        <label for="internacao" class="col-2 col-form-label">Internação:</label>
        <div class="col-4">
          <input class="form-control" type="date" value="00/00/000" id="internacao" name="internacao">
        </div>
      </div>
      <hr>
      <div class="mt-3">
        <label for="diagnostico">Diagnóstico médico</label>
        <textarea class="form-control" id="diagnostico" name="diagnostico" placeholder="Diagnóstico médico" rows="5" required></textarea>
      </div>
      <div>
        <input type="submit" name="Enviar" class="my-3 btn btn-primary float-right">
      </div>
    </div>
    <div class="col-6" style="border:solid">
      div bonitinha
    </div>
  </div>
</form>