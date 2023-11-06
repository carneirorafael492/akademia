<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de usuario</title>
    <link  rel="stylesheet" href="assets/css/main.css">
</head>
<body>
    <?php
        include_once("assets/componentes/cabecalho.html");
    ?>

     <h2>Cadastre-se já</h2><br><br>

     <form action="assets/db/cadastro/insert.php" method="POST">
        <label for="nomecompleto">Nome completo</label><br><br>
        <input type="text" name="nomecompleto"><br><br>
        <label for="email">E-mail</label><br><br>
        <input type="email" name="email"><br><br>
        <label for="senha">Senha</label><br><br>
        <input type="password" name="senha" minlength="3"><br><br>
        <label for="Telefone">Telefone</label><br><br>
        <input type="text" name="Telefone"><br><br>
        <label for="Endereco">Endereço</label><br><br>
        <input type="text" name="Endereco"><br><br>
        <input type="submit" value="Enviar"><br><br>

    </form>

    <?php
        include_once("assets/componentes/rodape.html");
    ?>
</body>
</html>