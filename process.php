<?php
session_start();
$con = mysqli_connect("127.0.0.1", "root", "root") or die ("Sem conexão com o servidor");
$select = mysqli_select_db($con,"bioinformatica") or die("Sem acesso ao DB");

$alternativapost =  $_POST["questao"];
$alternativasession = $_SESSION['questao'];

for($i=1;$i<4;$i++){
if ( isset ( $_POST[$alternativapost.$i] ) ){
    $alternativafim = $alternativasession.$i; 
	$alternativafim = $alternativapost.$i;
//	echo "Pegou o o valor da Session: ".$_SESSION['resposta']."";

}else{
	echo "Erro ao registrar a Session!";
}
}

$idusu = $_SESSION['idUsuario'];

for($a=1; $a<4; $a++){
$respusu = $alternativapost.$a;
$aux = $_SESSION['idPergunta'];
$idperg = $aux.$a;

$sql = "INSERT INTO `Resp_usuario` (idResp_usuario, Escolha, FKUsuario, FKPergunta) 
VALUES (NULL,'$respusu', '$idusu', '$idperg')";
}

if (mysqli_query($con, $sql)) {
    //prossegue;
    
} else {

    echo "Erro: " . $sql . "<br>" . mysqli_error($con);

}


?>