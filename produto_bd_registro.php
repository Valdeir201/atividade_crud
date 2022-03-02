<?php

    $nome = $_POST["nome"];
    $tempo_producao = $_POST["tempo_producao"];
    $valor = $_POST["valor"];

    include "conexao.php";

    $conn = conectar();

    $sql = "INSERT INTO produto (tempo_producao, valor, nome) VALUES ('$tempo_producao', $valor, '$nome');";

    if($conn->query($sql)){
        desconectar($conn);
        header("location: perfil.php");
        die();
    }else{
        die("Deu erro! Erro:". $conn->error);
    }

?>