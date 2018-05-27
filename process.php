<?php
session_start();
$con = mysqli_connect("127.0.0.1", "root", "root") or die ("Sem conexão com o servidor");
$select = mysqli_select_db($con,"bioinformatica") or die("Sem acesso ao DB");

if ( isset ( $_POST["questao"] ) ){
	$_SESSION['questao'] = $_POST["questao"];
//	echo "Pegou o o valor da Session: ".$_SESSION['resposta']."";
echo $_POST["questao"];

}else{
	echo "Erro ao registrar a Session!";
}

$idusu = $_SESSION['idUsuario'];

$idperg = $_SESSION['idPergunta'];

$respusu = $_POST["questao"];

$sql = "INSERT INTO `Resp_usuario` (idResp_usuario, Escolha, FKUsuario, FKPergunta) 
VALUES (NULL,'$respusu', '$idusu', '$idperg')";

if (mysqli_query($con, $sql)) {
    //prossegue;
    
} else {

    echo "Erro: " . $sql . "<br>" . mysqli_error($con);

}


?>