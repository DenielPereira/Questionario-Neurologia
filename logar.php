<?php 
session_start();

$email = $_POST['Email'];
$senha = $_POST['senha'];

$con = mysqli_connect("127.0.0.1", "root", "root") or die ("Sem conexão com o servidor");
$select = mysqli_select_db($con,"bioinformatica") or die("Sem acesso ao DB");

$result = mysqli_query($con, "SELECT * FROM `usuario` WHERE `email` = '$email' AND `senha`= '$senha'");

			if(empty($_POST['Email']) && empty($_POST['senha'])){

				die('Como você pretende entrar sem digitar nada?');

			}else if(empty($_POST['Email'])){

				die('Ops, parece que você esqueceu de digitar seu e-mail.');

			}else if (empty($_POST['senha'])){

				die('Ops, parece que você esqueceu de digitar a senha.');

			}else if (mysqli_num_rows ($result) > 0 ){

					$_SESSION['email'] = $email;
					$_SESSION['senha'] = $senha;
					echo "Login bem sucedido.";

				}else{

					unset ($_SESSION['email']);
					unset ($_SESSION['senha']);
					echo "Email ou senha invalidos.";
					
				}	
 
?>