<html>
<head>
    <meta charset="utf-8">
    <head>
        <link rel="stylesheet" type="text/css" href="estilos/acertos.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>    
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
