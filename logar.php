<?php 
session_start();

$email = $_POST['email'];
$senha = $_POST['senha'];

$con = mysqli_connect("127.0.0.1", "root", "root") or die ("Sem conexão com o servidor");
$select = mysqli_select_db($con,"bioinformatica") or die("Sem acesso ao DB");

$result = mysqli_query($con, "SELECT * FROM `usuario` WHERE `email` = '$email' AND `senha`= '$senha'");
$dados = mysqli_fetch_array($result);

			if(empty($_POST['email']) && empty($_POST['senha'])){

				die('Como você pretende entrar sem digitar nada?');

			}else if(empty($_POST['email'])){

				die('Ops, parece que você esqueceu de digitar seu e-mail.');

			}else if (empty($_POST['senha'])){

				die('Ops, parece que você esqueceu de digitar a senha.');

			}else if (mysqli_num_rows ($result) > 0 ){

					$_SESSION['email'] = $email;
					$_SESSION['senha'] = $senha;
					$_SESSION['idUsuario'] = $dados['idUsuario'];
					echo "Login bem sucedido.";
					echo $_SESSION['idUsuario'];
					echo "<script> window.location.href = 'firstpage.html';</script>";

				}else{

					unset ($_SESSION['email']);
					unset ($_SESSION['senha']);
					echo "email ou senha invalidos!";
					
				}	
 
?>