<?php
session_start();
$con = mysqli_connect("127.0.0.1", "root", "root") or die ("Sem conexão com o servidor");
$select = mysqli_select_db($con,"bioinformatica") or die("Sem acesso ao DB");

$idusu = $_SESSION['idUsuario'];
$acerto = 0;
$erro = 0;

date_default_timezone_set('America/Sao_Paulo');
$datalocal = date('Y/m/d');

for($e=1; $e<4; $e++){
    $auxi = "alternativa$e";
    $assist = "idPergunta $e";
if ( isset ( $_POST[$auxi] ) ){
    $_SESSION[$auxi] = $_POST[$auxi];
}else{
    echo "Erro ao registrar a Session!";
} 

$respusu = $_SESSION[$auxi];
$idperg = $_SESSION[$assist];

$sql = "INSERT INTO `Resp_usuario` (idResp_usuario, Escolha, FKUsuario, FKPergunta) 
VALUES (NULL,'$respusu', '$idusu', '$idperg')";

if (mysqli_query($con, $sql)) {
    //prossegue;
    } else {

    echo "Erro: " . $sql . "<br>" . mysqli_error($con);
}

$sql2 = "SELECT * FROM `Resp_certa` 
WHERE `FKPergunta` = '$idperg' AND `Valor` = '$respusu'";
$resultado = mysqli_query($con, $sql2);
if (mysqli_num_rows ($resultado) > 0){
 $acerto++;
}else{
    $erro++;
}
}

echo "Você acertou " .$acerto. " perguntas e errou " .$erro;

$sql3 = "INSERT INTO `Historico` (idHistorico, Data, Quant_acertos, Quant_erros, FKUsuario)
VALUES (NULL, '$datalocal', '$acerto', '$erro', '$idusu')";
if (mysqli_query($con, $sql3)) {
    //prossegue;
    } else {

    echo "Erro: " . $sql . "<br>" . mysqli_error($con);
}




?>