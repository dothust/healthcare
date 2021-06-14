<?php
if (!isset($_SESSION)) {
    session_start();
}
include("connection.php");

$nome = mysqli_real_escape_string($connection, trim($_POST['nome']));
$nascimento = mysqli_real_escape_string($connection, trim($_POST['nascimento']));
$cor = mysqli_real_escape_string($connection, trim($_POST['cor']));
$sexo = mysqli_real_escape_string($connection, trim($_POST['sexo']));
$enfermaria = mysqli_real_escape_string($connection, trim($_POST['enfermaria']));
$setor = mysqli_real_escape_string($connection, trim($_POST['setor']));
$leito = mysqli_real_escape_string($connection, trim($_POST['leito']));
$internacao = mysqli_real_escape_string($connection, trim($_POST['internacao']));
$prontuario = mysqli_real_escape_string($connection, trim($_POST['prontuario']));
$diagnostico = mysqli_real_escape_string($connection, trim($_POST['diagnostico']));

$sql = "INSERT INTO paciente (
    nome,
    nascimento,
    cor,
    sexo,
    enfermaria,
    setor,
    leito,
    internacao,
    prontuario,
    diagnostico
    ) 
    VALUES (
    '$nome',
    '$nascimento',
    '$cor',
    '$sexo',
    '$enfermaria',
    '$setor',
    '$leito',
    '$internacao',
    '$prontuario',
    '$diagnostico'
    )";

if ($connection->query($sql) === TRUE) {
    echo "Dados inseridos com sucesso!";
} else {
    echo "Error: " . $sql . "<br>" . $connection->error;
}

$connection->close();

/* if ($senha == $password2) {
	$sql = "SELECT COUNT(*) AS total FROM usuario WHERE email = '$email'";
	$result = mysqli_query($connection, $sql);
	$row = mysqli_fetch_assoc($result);

	if ($row['total'] == 1) {
		$_SESSION['user_exist'] = TRUE;
		header('Location: ../register.php');
		exit;
	}

	$sql = "INSERT INTO usuario (name, email, senha) VALUES ('$name', '$email', '$senha')";

	if ($connection->query($sql) === TRUE) {
		$_SESSION['status'] = TRUE;
	}

	$connection->close();

	header('Location: ../register.php');
	exit;
} else {
	$_SESSION['diferent_password'] = TRUE;
	header('Location: ../register.php');
	exit;
}
 */