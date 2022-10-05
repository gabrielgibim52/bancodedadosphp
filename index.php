<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>CADASTRO BANCO DE DADOS</h1>
    <img src="ney.jpg" alt="">
    <h1>vai um cadastro ai?</h1>
    <a href="f_cadastro.php"><h2 class="titulo">Novo Cadastro</h2></a>
    <?php
        include_once "conexao.php";
        $consulta = $conectar->query("Select * from teste");
        while($linha=$consulta->fetch(PDO::FETCH_ASSOC))
    ?>
</body>
</html>