<?php
$con = mysqli_connect("127.0.0.1", "root", "root") or die ("Sem conexão com o servidor");
$select = mysqli_select_db($con,"bioinformatica") or die("Sem acesso ao DB");

$sql = "SELECT * FROM Pergunta";
$result = $con->query($sql); ?>

<?php if ($result->num_rows > 0){
 while ($row = $result->fetch_assoc()) {
    echo $row['Enunciado']; "<br>" ?>
    
        <HTML><input id="a" type="radio" name="questao" value="a">
            <label for="a"> <?php echo $row['Alternativaa'] ?> </label><br></HTML>
        <HTML><input id="b" type="radio" name="questao" value="b">
            <label for="b"> <?php echo $row['Alternativab'] ?> </label><br></HTML>
        <HTML><input id="c" type="radio" name="questao" value="c">
            <label for="c"> <?php echo $row['Alternativac'] ?> </label><br></HTML>
        <HTML><input id="d" type="radio" name="questao" value="d">
            <label for="d"> <?php echo $row['Alternativad'] ?> </label><br></HTML>

    
<?php }
} else {
    echo "nao encontrou nada";
}



?>