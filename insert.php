<!DOCTYPE html>
<html>
 
<head>
    <title>Insert Page</title>
</head>
 
<body>
        <?php
 
        require 'funcoes.php';

        $servername = "localhost";
        $username = "root";
        $password = "usbw";
        $db_name = "crud";
        
        // Create connection
        $conn = new mysqli($servername, $username, $password, $db_name);
         
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
         
        $name = $_GET['name'];

        $sql = "INSERT INTO test (nome, ativo) VALUES ('$name', '1')";

        if (mysqli_query($conn, $sql)) {
            debug("Insert executada com sucesso.");
        } else {
            debug("Erro ao executar a consulta: " . mysqli_error($conn));
        }
        
        mysqli_close($conn);    
        ?>
</body>
 
</html>