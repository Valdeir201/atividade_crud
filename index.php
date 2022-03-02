<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial dos Produtos</title>
</head>
<body>
<h1>Página dos Produtos</h1>
<?php
session_start();
if(isset($_SESSION["usuario"])){ 
    
    echo "<p><a href='perfil.php'>  Perfil  </a>";
    echo "<br>";
    echo "<a href='sair.php'>  Sair </a> </p>";
   
}else {

   echo "<p><a href='login.php'> Login</a></p>";
}
?>
   

    

    <h4>Produtos Cadastrados</h4>
    <?php
        include "conexao.php";
        

        $conn = conectar();

        $sql = "SELECT * FROM produto";

        $result = $conn->query($sql);
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                echo "<p> Nome: " . $row["nome"] ."<br/>";
                echo "Tempo de produção: " . $row["tempo_producao"] ."<br/>";
                echo "Valor: " . $row["valor"] ."<br/>";

              
            }

            }else {
                
                echo "<p> Nenhum produto cadastrado! </p>";
                
                  }

                  desconectar($conn);


    ?>
</body>
</html>