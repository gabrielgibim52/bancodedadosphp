<?php
include_once "conexao.php";

try {
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $cpf = $_POST['cpf'];

    $insert = $conectar->prepare('insert into teste (nome,telefone,cpf)
    values (:nome,:telefone,:cpf)');
    $insert->bindParam(':nome',$nome);
    $insert->bindParam(':telefone',$telefone);
    $insert->bindParam(':cpf',$cpf);
    $insert->execute();
    header('location:index.php');

} catch (\Throwable $th) {
    //throw $th;
}

?>