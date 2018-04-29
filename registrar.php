<?php
$con = mysqli_connect("127.0.0.1", "root", "root") or die ("Sem conexão com o servidor");
$select = mysqli_select_db($con,"bioinformatica") or die("Sem acesso ao DB");

$email = $_POST["Email"];
$nome = $_POST["Nome"];
$sobrenome = $_POST["Sobrenome"];
$senha = $_POST["Senha"];
$datanasc = $_POST["Data_nascimento"];

print_r($_POST);


$sql=("INSERT INTO `Usuario` VALUES (NULL, '$email', '$nome', '$sobrenome', '$senha', '$datanasc', NULL)");


?>