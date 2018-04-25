<?php 
session_start();

$Email = $_POST['E-mail'];
$Senha = $_POST['Senha'];

$con = mysqli_connect("127.0.0.1", "root", "root") or die ("Sem conexão com o servidor");
$select = mysqli_select_db($con,"bioinformatica") or die("Sem acesso ao DB");
 
$result = mysqli_query("SELECT * FROM `Usuario` WHERE `Email` = '$Email' AND `Senha`= '$Senha'");

if(mysqli_num_rows ($result) > 0 )
{
$_SESSION['Email'] = $Email;
$_SESSION['Senha'] = $Senha;
header('location:site.php');
}
else{
    unset ($_SESSION['Email']);
    unset ($_SESSION['Senha']);
    header('location:site.php');
     
    }
 
?>
