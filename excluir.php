<?php

include_once "conexao.php";
try {
    $id=$_GET['id'];

    $delete=$conectar->prepare('delete from revisao where id = :id');
    $delete->bindParam(':id',$id);
    $delete->execute();
    header('location:index.php');
} catch (\Throwable $th) {
    
}

?>