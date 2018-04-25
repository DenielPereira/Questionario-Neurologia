<?php 
session_start();

$email = $_POST['E-mail'];
$senha = $_POST['senha'];

$con = mysqli_connect("127.0.0.1", "root", "root") or die ("Sem conexão com o servidor");
$select = mysqli_select_db($con,"bioinformatica") or die("Sem acesso ao DB");
 
$result = mysqli_query($con, "SELECT * FROM `usuario` WHERE `email` = '$email' AND `senha`= '$senha'");

if(mysqli_num_rows ($result) > 0 )
{
$_SESSION['email'] = $email;
$_SESSION['senha'] = $senha;
header('location:site.php');
}
else{
    unset ($_SESSION['email']);
    unset ($_SESSION['senha']);
    header("Location: javascript:history.back(1)");
}
 
?>
