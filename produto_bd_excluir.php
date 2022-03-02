<?php
session_start();
if(isset($_SESSION["usuario"])){
?>

<?php

$codigo = $_GET["codigo"];

include "conexao.php";
$conn = conectar();

$sql = "DELETE FROM produto WHERE codigo=$codigo";

if($conn->query($sql)){
    desconectar($conn);
    header("location: perfil.php");
    die();
}else {
    die("Deu erro! Erro: ". $conn->error);
}

?>
<?php
}else{
 header('Location: login.php?erro=2');  
}

?>