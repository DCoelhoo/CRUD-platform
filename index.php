<?php
$servername = "localhost";
$username = "root";
$password = "usbw";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>

<<html>
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
    <h1 id="title">Formulário</h1>
        <div class="master-div-style">
            <p id="description">Preencha todos os campos do Formulário.</p>
            <form id="survey-form" action="mailto:coelho.diogogoncalves@gmail.com">
                <div class="form-rows">
                    <div class="labels">
                        <label for="name" id="name-label">Nome</label>
                    </div>
                    <div class="fields">
                        <input type="text" id="name" class="input-fields" placeholder="Escreva o seu nome completo"
                            required>
                    </div>
                </div>
                
                </div>
                <button class="button" id="submit" type="submit">Submit</button>
                <button class="button" id="submit" type="reset">Reset</button>
            </form>
        </div>
    </main>
</body>
</html>
</html>