<?php
require 'funcoes.php';

ligardb();

$sql = "SELECT * FROM clientes WHERE ativo = 1";

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

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method='POST'>
        <?php

        while ($row = mysqli_fetch_assoc($result)) {
            echo $row['nome'] . " --- " .  $row['email'] . " --- "
                . $row['morada'] . " --- " . $row['ativo'] . " --- " . "<input type='submit' name='submit[" . $row['id'] . "]' value='Delete'/><br>";
        }
        ?>


    </form>

    <?php
    if (isset($_POST['submit'])) {

        //Este foreach contem os valores dos ids.
        foreach ($_POST['submit'] as $id => $value) {

            debug($id);
        
            $sqlDEL = "UPDATE `clientes` SET `ativo` = '0' WHERE `clientes`.`id` = $id";
            $resultDEL = mysqli_query($conn, $sqlDEL);
          }

    }

    ?>



    </main>
</body>

</html>

</html>