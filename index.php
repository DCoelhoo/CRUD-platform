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
  die(debug("Connection failed: " . $conn->connect_error));
}

debug("Connected successfully");

$sql = "SELECT * FROM `test` where ativo = 1";

$result = mysqli_query($conn, $sql);

echo "<table border='1'>
<tr>
<th>Firstname</th>
<th>Lastname</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['nome'] . "</td>";
echo "<td>" . $row['ativo'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);


?>

<html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="styles/styles.css">
</head>

<body>
        <!--Navbar-->
    <div class="navbar" id="navbar">
        <a class="active" href="#home">Home</a>
        <a href="">Futebol</a>
        <a href="#basketball">Basketball</a>
        <a href="#tenis">Tenis</a>
        <a href="#remos">Remos</a>
    </div>

    <h1 id="title">Formulário</h1>
        <div class="master-div-style">
            <p id="description">Preencha todos os campos do Formulário.</p>
            <form action="insert.php" method="get">
                Name: <input type="text" name="name">
                <input type="submit">
            </form>
        </div>
    </main>
</body>
</html>
</html>