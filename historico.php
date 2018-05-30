<html>
<head>
    <meta charset="utf-8">
</head>
<body>
    <?php
    session_start();

    $con = mysqli_connect("127.0.0.1", "root", "root") or die ("Sem conexão com o servidor");
    $select = mysqli_select_db($con,"bioinformatica") or die("Sem acesso ao DB");
    mysqli_set_charset($con, 'utf8');

    $i=1;
    $idusu = $_SESSION['idUsuario'];
    $sql = "SELECT * FROM `Historico` WHERE `FKUsuario` = '$idusu'";
    $result = $con->query($sql);
    if ($result->num_rows > 0){
        while ($row = $result->fetch_assoc()){
            echo "Teste ".$i++;
            echo $row['Data'];
            echo $row['Quant_acertos']; 
            echo $row['Quant_erros'];
        }
    }
    
    ?>
</body>
</html>
