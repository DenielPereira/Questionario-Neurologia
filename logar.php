<?php 
session_start();

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$con = mysqli_connect("127.0.0.1", "root", "root") or die ("Sem conexão com o servidor");
$select = mysqli_select_db($con,"teste") or die("Sem acesso ao DB");
 
$result = mysqli_query("SELECT * FROM `usuario` WHERE `usuario` = '$usuario' AND `senha`= '$senha'");

if(mysqli_num_rows ($result) > 0 )
{
$_SESSION['usuario'] = $usuario;
$_SESSION['senha'] = $senha;
header('location:site.php');
}
else{
    unset ($_SESSION['usuario']);
    unset ($_SESSION['senha']);
    header('location:site.php');
     
    }
 
?>
