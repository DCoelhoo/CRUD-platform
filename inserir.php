<?php
require 'funcoes.php';

ligardb();

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir</title>
    <link rel="stylesheet" type="text/css" href="styles/styles.css">
</head>

<body>

    <!--Navbar-->
    <div class="navbar" id="navbar">
        <a class="active" href="index.php">Home</a>
        <a href="consultar.php">Consultar Utilizadores</a>
        <a href="inserir.php">Inserir Utilizadores</a>
    </div>

    <h1>INSERIR DADOS</h1>

    <form method="GET" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" required>

        <label for="email">Email:</label>
        <input type="text" name="email" id="email" required>

        <label for="morada">Morada:</label>
        <input type="text" name="morada" id="morada" required>

        <input type="submit" name="submit" value="Enviar">
    </form>


    
</body>

</html>
<?php 

    //verifica se o formulário foi enviado
    if (isset($_GET['submit'])) {
        $nome = $_GET['nome'];
        $email = $_GET['email'];
        $morada = $_GET['morada'];

        $sql = "INSERT INTO clientes (nome, email, morada, ativo) VALUES ('$nome', '$email', '$morada', '1')";

        $result = mysqli_query($conn, $sql);

        if ($result) {
            debug("O formulário foi enviado.");
        } else {
            debug("Erro ao executar a consulta: " . mysqli_error($conn));
        } 

        header("Location: inserir.php");
        exit();
        
    } else {
        debug("O formulário não foi enviado");
    }

?>
