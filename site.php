<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" type="text/css" href="CSS/style.css">
  <?php 

    session_start();
    if((!isset ($_SESSION['email']) == true) and (!isset ($_SESSION['senha']) == true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header("login.html");
        echo"Como vc pretende entrar sem digitar nada?";
        }
    
    $logado = $_SESSION['Nome'];
    ?>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Quiz</title>
</head>

<body>
        <h1 = class="titulo">
            <?php echo "Bem vindo, $logado."; ?>
        </h1>
        <h1 = class="titulo">
            <?php echo "Daqui pra frente é so com Jesus na causa."; ?>
        </h1>
</body>

</html>