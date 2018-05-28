<?php
session_start();
$con = mysqli_connect("127.0.0.1", "root", "root") or die ("Sem conexão com o servidor");
$select = mysqli_select_db($con,"bioinformatica") or die("Sem acesso ao DB");

$idusu = $_SESSION['idUsuario'];

for($e=1; $e<4; $e++){
$auxi = "alternativa$e";
if ( isset ( $_POST[$auxi] ) ){
    $_SESSION[$auxi] = $_POST[$auxi];
	echo "Pegou o o valor da Session: ".$_SESSION[$auxi]."";
}else{
    echo "Erro ao registrar a Session!";
    echo $auxi;
    echo $_POST[$auxi];
}


$respusu = $_SESSION[$auxi];
$aux = $_SESSION['idPergunta'];

$sql = "INSERT INTO `Resp_usuario` (idResp_usuario, Escolha, FKUsuario, FKPergunta) 
VALUES (NULL,'$respusu', '$idusu', '$aux')";
}

if (mysqli_query($con, $sql)) {
    //prossegue;
    
} else {

    echo "Erro: " . $sql . "<br>" . mysqli_error($con);

}


?>