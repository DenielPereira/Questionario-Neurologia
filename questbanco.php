<!DOCTYPE html>

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="estilos/perguntas.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    </head>    
    <body>
        <div class="titulo text-center">  
        <h1>Questionario de Neurologia</h1>
        <div class="subtitulo text-center">  
        <i>Boa sorte!</i>
        </div>
        </div>
<?php
$con = mysqli_connect("127.0.0.1", "root", "root") or die ("Sem conexão com o servidor");
$select = mysqli_select_db($con,"bioinformatica") or die("Sem acesso ao DB");
mysqli_set_charset($con, 'utf8');



$sql = "SELECT * FROM Pergunta ORDER BY rand()";
$result = $con->query($sql); ?>
 <?php 
 $f = 1;
 for($i=1;$i<4;$i++){
    ?>
<?php if ($result->num_rows > 0){
 while ($row = $result->fetch_assoc()) { 
     
    $_SESSION['idPergunta'] = $row['idPergunta'];

    
  
    
    ?>

    <div class="page">
        <div class="titulo">
            <h3>Questão
                <?php echo $i++; ?>
            </h3>
        </div>
        <div class="caixa col-md-0">
            <?php echo $row['Enunciado']; ?>
            <br>
            <form action="process.php" method="POST">
                <input id="a<?php echo $f; ?>" type="radio" name="alternativa<?php echo $f; ?>" value="a">
                <label for="a<?php echo $f; ?>">
                    <?php echo $row['Alternativaa'] ?> </label>
                <br>
                <input id="b<?php echo $f; ?>" type="radio" name="alternativa<?php echo $f; ?>" value="b">
                <label for="b<?php echo $f; ?>">
                    <?php echo $row['Alternativab'] ?> </label>
                <br>
                <input id="c<?php echo $f; ?>" type="radio" name="alternativa<?php echo $f; ?>" value="c">
                <label for="c<?php echo $f; ?>">
                    <?php echo $row['Alternativac'] ?> </label>
                <br>
                <input id="d<?php echo $f; ?>" type="radio" name="alternativa<?php echo $f; ?>" value="d">
                <label for="d<?php echo $f; ?>">
                  <?php echo $row['Alternativad'] ?> </label>
                <br>
            
        </div>
     
    </div>


<?php
$f++;

}
}else {
    echo "nao encontrou nada";
}
} ?>

   <div class="btn-baixo row text-center">       
            <div class="col-md-4">
                <input type="submit" class="btn" value="Enviar Respostas">
            </div>
        </div>
        </form>

</body>

</html>
