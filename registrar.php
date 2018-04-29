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
    echo "Seu email já está cadastrado";
}

$sql = "INSERT INTO `Usuario` (idUsuario, Email, Nome, Sobrenome, Senha, Data_nascimento, Admin)
VALUES (NULL, '$email', '$nome', '$sobrenome', '$senha', '$datanasc', NULL)";

if (mysqli_query($con, $sql)) {

    echo "Seja bem vindo $nome";

} else {

    echo "Erro: " . $sql . "<br>" . mysqli_error($con);

}





mysqli_close($con);

?>