<?php
if (!isset($_SESSION)) {
  session_start();
}
include("php/sessionVerifier.php");
include("php/connection.php");

$query = "SELECT * FROM patient";
$con = $connection->query($query) or die($connection->error);
?>

<!-- Breadcrumbs-->
<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="index.php?page=index.php">Home</a>
  </li>
  <li class="breadcrumb-item active">Pacientes</li>
</ol>

<!-- DataTables Example -->
<div class="card mb-3">
  <div class="card-header">
    <i class="fas fa-table"></i>
    Pacientes
  </div>

  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Idade</th>
            <th>#####</th>
            <th>Ação</th>
          </tr>
        </thead>
        <tbody>
          <?php
          while ($data  = $con->fetch_array()) {
          ?>
            <tr>
              <td> <?php echo $data["id"]; ?> </td>
              <td> <?php echo $data["nome"]; ?> </td>
              <td> <?php echo $data["nome"]; ?> </td>
              <td> <?php echo date("d/m/Y", strtotime($data["nascimento"])); ?> </td>
              <td> <?php echo $data["nome"]; ?> </td>
              <td> <a href="php/patientEdit.php?id=<?php echo $data["id"]; ?>"> Editar </a> |
                <a href="javascript: if(confirm('Tem certeza que deseja excluir o paciente <?php echo $data["nome"]; ?>')) location.href='php/patientDelete.php?id=<?php echo $data["id"]; ?>';"> Excluir </a>
              </td>
            </tr>
          <?php
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>
</div>