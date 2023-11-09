<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área restrita</title>
    <link  rel="stylesheet" href="assets/css/css3.css">
</head>
<body>
<p>Bem vindo(a)
        <?php
            session_start();

            echo $_SESSION["nome"];

            if (isset($_SESSION["nome"]))
            {               
                echo $_SESSION["nome"];
            }
            else
            {
                header("Location: acesso.php");
            }
            

          
        ?>
    </p>

    <?php
        include_once("assets/componentes/cabecalho.html");
    ?>
    <?php
        include_once("assets/componentes/restrita.html");
    ?>

    <?php
        include_once("assets/componentes/rodape.html");
    ?>
</body>
</html>