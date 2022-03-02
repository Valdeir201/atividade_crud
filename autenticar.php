<?php

session_start();

include "conexao.php";



        $usuario = $_POST["usuario"];
        $senha = $_POST["senha"];

$conn = conectar();

$sql = "SELECT * FROM usuario WHERE usuario='$usuario' AND senha='$senha' ";

$result = mysqli_query($conn, $sql);

    

            if( mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){
                    $_SESSION['usuario'] =  $usuario;
                    $_SESSION['senha'] =  $senha;
                }

                desconectar($conn);
                header("location: perfil.php");
            }else{

                desconectar($conn);
                
                header("location: login.php?erro=1");
            }
?>