<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="CSS/style.css">
<?php 

session_start();
if((!isset ($_SESSION['email']) == true) and (!isset ($_SESSION['senha']) == true))
{
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    echo"erro";
    }
 
$logado = $_SESSION['email'];
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Quiz</title>
</head>
 
<body>
<table width="800" height="748" border="1">
  <tr>
    <td height="90" colspan="2" bgcolor="#CCCCCC">SISTEM WEB TESTE
    <?php
    echo" Bem vindo $logado";
    ?>
    </td>
  </tr>
  <tr>
    <td width="103" height="410" bgcolor="#CCCCCC">MENU AQUI</td>
    <td width="546">CONTEUDO E ICONES AQUI</td>
  </tr>
  <tr>
    <td colspan="2" bgcolor="#000000"> </td>
  </tr>
</table>
</body>
</html>