<?php
session_start();
include("connection.php");

$name = mysqli_real_escape_string($connection, trim($_POST['name']));
$email = mysqli_real_escape_string($connection, trim($_POST['email']));
$senha = mysqli_real_escape_string($connection, trim(md5($_POST['senha'])));
$password2 = mysqli_real_escape_string($connection, trim(md5($_POST['password2'])));

if ($senha == $password2) {
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
