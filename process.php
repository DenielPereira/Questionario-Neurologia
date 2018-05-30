<!DOCTYPE html>

<html>

<head>
    <link rel="stylesheet" type="text/css" href="estilos/acertos.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="titulo text-center">
        <h1>Questionario de Neurologia</h1>
        <div class="text-center">
            <i>Resultado do Teste</i>
        </div>
    </div>
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

$sql3 = "INSERT INTO `Historico` (idHistorico, Data, Quant_acertos, Quant_erros, FKUsuario)
VALUES (NULL, '$datalocal', '$acerto', '$erro', '$idusu')";
if (mysqli_query($con, $sql3)) {
    //prossegue;
    } else {

    echo "Erro: " . $sql . "<br>" . mysqli_error($con);
}


?>

    <div class="caixa center">
        <ul style="list-style-type: none;">
            <li style="color: green;">
                <i class="fa fa-check-square-o"></i>
                <?php echo "Acertos: " .$acerto?>
            </li>
            <br>
            <li style="color: red;">
                <i class="fa fa-remove"></i>
                <?php echo "Erros: " .$erro?>
            </li>
        </ul>

    </div>

    <div align="center">
        <button class="btn" onClick="window.location.href = 'questbanco.php'">Repetir questionario</button>
        <button class="btn" onClick="window.location.href = 'historico.php'">ver meu histórico</button>
    </div>
</body>

</html>