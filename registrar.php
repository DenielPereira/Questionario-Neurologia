<?php
$con = mysqli_connect("127.0.0.1", "root", "root") or die ("Sem conexão com o servidor");
$select = mysqli_select_db($con,"bioinformatica") or die("Sem acesso ao DB");

$email = $_POST['Email'];
$nome = $_POST['Nome'];
$sobrenome = $_POST['Sobrenome'];
$senha = $_POST['Senha'];
$datanasc = $_POST['Data_nascimento'];

$verificar = mysqli_query($con, "SELECT * FROM `Usuario` WHERE `Email` = '$email'");
$resultado = mysqli_num_rows($verificar);
if ($resultado == 0){
    //prosseguir
} else {
    echo "<script> alert('Este email ja está cadastrado');</script>";
}

$sql = "INSERT INTO `Usuario` (idUsuario, Email, Nome, Sobrenome, Senha, Data_nascimento)
VALUES (NULL, '$email', '$nome', '$sobrenome', '$senha', '$datanasc')";

if (mysqli_query($con, $sql) && $resultado == 0) {
    echo "<script> alert('Cadastro feito sucesso!');</script>";
    echo "<script> window.location.href = 'login.html';</script>";
} else {

    echo "Erro: " . $sql . "<br>" . mysqli_error($con);

}

mysqli_close($con);

?>
