<?php 
    require 'funcoes.php';

    ligardb();

    $sql = "SELECT * FROM `test` where ativo = 1";

    $result = mysqli_query($conn, $sql);

?>

<html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar</title>
    <link rel="stylesheet" type="text/css" href="styles/styles.css">
</head>

<body>
        <!--Navbar-->
    <div class="navbar" id="navbar">
        <a class="active" href="index.php">Home</a>
        <a href="consultar.php">Consultar Utilizadores</a>
        <a href="inserir.php">Inserir Utilizadores</a>
    </div>

    <h1>Tabela de Utilizadores</h1>




    </main>
</body>
</html>
</html>