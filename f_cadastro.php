<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form class="formulario" action="cadastrar.php" method="post">
    <fieldset>
        Nome:<br>
        <input type="text" name="nome" id="nome">
        <br>
        Telefone:<br>
        <input type="text" name="telefone" id="telefone">
        <br>
        CPF:<br>
        <input type="password" name="cpf" id="cpf">
        <br>
        <input type="submit" value="Enviar" name="btn-enviar">
    </fieldset>
</form>
</body>
</html>