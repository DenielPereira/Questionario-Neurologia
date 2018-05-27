<?php
$con = mysqli_connect("127.0.0.1", "root", "root") or die ("Sem conexão com o servidor");
$select = mysqli_select_db($con,"bioinformatica") or die("Sem acesso ao DB");
mysqli_set_charset($con, 'utf8');

$sql = "SELECT * FROM Pergunta";
$result = $con->query($sql); ?>

<?php if ($result->num_rows > 0){
 while ($row = $result->fetch_assoc()) { ?>
    

<HTML>

<head>
    <meta charset="utf-8">
    <title>Questionario</title>
    <link rel="stylesheet" type="text/css" href="estilos/perguntas.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
        crossorigin="anonymous">
</head>
<body>
<div class="page">
        <div class="titulo">
            <h1>Questionario</h1>
        </div>
        <div class="caixa col-md-0">
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

</HTML>

<?php



}
} else {
    echo "nao encontrou nada";
}