<?php

    try {
        //conexão com o banco de dados
        $conectar = new PDO("mysql:host=localhost;port=3306;dbname=revisao","root","");
        echo "DEU CERTO AQUI BOY, METE OS DADOS AI";
    } catch (PDOException $e) {
        //caso ocorra falha
        echo "Erro ao conectar com banco de dados: ".$e->getMessage();
    }

?>