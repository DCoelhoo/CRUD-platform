<!DOCTYPE html>
<html>
 
<head>
    <title>Insert Page</title>
</head>
 
<body>
        <?php
 
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
        echo "Connected successfully";
         
        $name = $_GET['name'];

        echo $name;

        $sql = "INSERT INTO test (nome) VALUES ('$name')";

        if (mysqli_query($conn, $sql)) {
            echo "Consulta executada com sucesso.";
        } else {
            echo "Erro ao executar a consulta: " . mysqli_error($conn);
        }
        
        mysqli_close($conn);
        ?>
</body>
 
</html>