<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

        include_once("../conn.php");

        $nomecompleto = $_REQUEST['nomecompleto'];
        $email = $_REQUEST['email'];
        $Telefone = $_REQUEST['Telefone'];
        $Endereco = $_REQUEST['Endereco'];

        $sql = "INSERT INTO cadastro (nomecompleto, email, Telefone, Endereco) VALUES ('$nomecompleto', '$email', ' $Telefone', '$Endereco')";

        if ($conn->query($sql) == TRUE)
        {
            echo "<p>Cadastro realizado.</p>";
        }
        else
        {
            echo "<p>Erro.</p>";
        }

        $conn->close();


    ?>

 <a href="../../../index.php">Voltar ao início</a>
    
</body>
</html>