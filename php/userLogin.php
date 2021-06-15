<?php

session_start();

include('connection.php');

if (empty($_POST['email']) || empty($_POST['senha'])) {
	header('Location: login.php');
	exit();
}

$email = mysqli_real_escape_string($connection, $_POST['email']);
$senha = mysqli_real_escape_string($connection, $_POST['senha']);

$query = "SELECT id, email FROM user WHERE email = '{$email}' AND senha = md5('{$senha}')";
$result = mysqli_query($connection, $query);
$row = mysqli_num_rows($result);

if ($row == 1) {
	$_SESSION['email'] = $email;
	$_SESSION['name'] = $name;
	header('Location: ../index.php');
	exit();
} else {
	$_SESSION['error'] = TRUE;
	header('Location: ../login.php');
}

echo $row;
exit;
