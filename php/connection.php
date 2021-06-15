<?php

$hostname = "localhost";
$user = "root";
$password = "";
$database = "healthcare";

$connection = new mysqli($hostname, $user, $password, $database) or die ('Falha ao conectar com a base de dados');

?>