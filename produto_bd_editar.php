<?php

$codigo = $_POST["codigo"];
$nome = $_POST["nome"];
$tempo = $_POST["tempo_producao"];
$valor = $_POST["valor"];

include "conexao.php";

$conn = conectar();

$sql = "UPDATE produto SET nome='".$nome."' , valor=".$valor." , tempo_producao='".$tempo."' WHERE codigo=".$codigo;

if($conn->query($sql)){
    desconectar($conn);
    header("location: perfil.php");
    die();
}else{
   die("ocorreu algum erro! Erro: ". $conn->error);
}

?>