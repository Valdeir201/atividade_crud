<?php
function conectar(){

    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "pagina";

    $conn = new mysqli($servidor, $usuario, $senha, $banco);

    if($conn->connect_error){
        die("Conexão falhou. Erro: ". $conn->connect_error);
    }
      
    return $conn;
    
}

function desconectar($conn){
    $conn->close();
}


?>