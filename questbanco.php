<<<<<<< HEAD
=======
<?php
session_start();
$con = mysqli_connect("127.0.0.1", "root", "root") or die ("Sem conexão com o servidor");
$select = mysqli_select_db($con,"bioinformatica") or die("Sem acesso ao DB");
mysqli_set_charset($con, 'utf8');

$sql = "SELECT * FROM Pergunta ORDER BY rand()";
$result = $con->query($sql); ?>

<?php 
for($i=0; $i<3; $i++){
if ($result->num_rows > 0){
    
    $row = mysqli_fetch_array($result); { 
     
     $_SESSION['idPergunta'] = $row['idPergunta'];
?>
    

>>>>>>> 97444c0864037907a05d99817754b3258270aa71
<HTML>

<head>
    <meta charset="utf-8">

    <title>Questionario</title>
    <link rel="stylesheet" type="text/css" href="estilos/perguntas.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
        crossorigin="anonymous">
</head>

<body>

<?php
$con = mysqli_connect("127.0.0.1", "root", "root") or die ("Sem conexão com o servidor");
$select = mysqli_select_db($con,"bioinformatica") or die("Sem acesso ao DB");
mysqli_set_charset($con, 'utf8');



$sql = "SELECT * FROM Pergunta ORDER BY rand()";
$result = $con->query($sql); ?>
 <?php for($i=1;$i<4;$i++){
    ?>
<?php if ($result->num_rows > 0){
 while ($row = $result->fetch_assoc()) { ?>

   

    <div class="page">
        <div class="titulo">
            <h1>Pergunta
                <?php echo $i++; ?>
            </h1>
        </div>
        <div class="caixa col-md-0">
<<<<<<< HEAD
            <?php echo $row['Enunciado']; ?>
            <br>
            <form action="process.php" method="POST">
                <input id="a" type="radio" name="questao" value="a">
                <label for="a">
                    <?php echo $row['Alternativaa'] ?> </label>
                <br>
                <input id="b" type="radio" name="questao" value="b">
                <label for="b">
                    <?php echo $row['Alternativab'] ?> </label>
                <br>
                <input id="c" type="radio" name="questao" value="c">
                <label for="c">
                    <?php echo $row['Alternativac'] ?> </label>
                <br>
                <input id="d" type="radio" name="questao" value="d">
                <label for="d">
                    <?php echo $row['Alternativad'] ?> </label>
                <br>
            
        </div>
     
    </div>


<?php
}
}else {
    echo "nao encontrou nada";
}
} ?>
=======
       <?php echo $row['Enunciado']; "<br>" ?>
       <br>
<form action="process.php" method="POST">
    <input id="a" type="radio" name="questao" value="a">
    <label for="a">
        <?php echo $row['Alternativaa'] ?> </label>
    <br>
    <input id="b" type="radio" name="questao" value="b">
    <label for="b">
        <?php echo $row['Alternativab'] ?> </label>
    <br>
    <input id="c" type="radio" name="questao" value="c">
    <label for="c">
        <?php echo $row['Alternativac'] ?> </label>
    <br>
    <input id="d" type="radio" name="questao" value="d">
    <label for="d">
        <?php echo $row['Alternativad'] ?> </label> 
    <br>

 </form>
 </div>
        <div class="btn-baixo row text-center">
            <div class="col-md-4">
            <button class="btn">Voltar</button>
            </div>
            <div class="col-md-4">    
            <p>1/20</p>
            </div>    
            <div class="col-md-4">    
            <button class="btn">Proximo</button>
            </div> 
        </div>
        </div>
    </body> 
    <?php  }
    }
     else {
    echo "nao encontrou nada"; 
}
    
} ?>

<input class="form-control" type="submit" value="enviar" id="enviar" onClick="highlightAll()">
</HTML>

>>>>>>> 97444c0864037907a05d99817754b3258270aa71

   <div class="btn-baixo row text-center">       
            <div class="col-md-4">
                <input type="submit" class="btn" value="Enviar Respostas">
            </div>
        </div>
        </form>

</body>

<<<<<<< HEAD
</HTML>
=======

>>>>>>> 97444c0864037907a05d99817754b3258270aa71
