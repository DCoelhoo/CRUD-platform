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

</body>
 
</html>