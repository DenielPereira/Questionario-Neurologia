<?php
require_once("");

$email = $_POST['Email'];
$nome = $_POST['Nome'];
$sobrenome = $_POST['Sobrenome'];
$senha = $_POST['Senha'];
$datanasc = $_POST['Datanasc'];

$sql="INSERT INTO `usuario` (`Email`, `Nome`, `Sobrenome`, `Senha`, `Datanasc`)
VALUES ('$email', '$nome', '$sobrenome', '$senha', '$datanasc')";


?>