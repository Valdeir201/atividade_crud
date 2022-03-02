<?php
session_start();
if(isset($_SESSION["usuario"])){
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Perfil</title>
    
  
    
</head>
<body>
    <h1>Página de Perfil</h1>
    <p>
        <a href="index.php"> Home</a>
        <a href="sair.php"> Sair</a>
        <a href="produto_cadastrar.php"> Cadastrar Produto</a>
    </p>

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
                
                echo "<a href='produto_bd_excluir.php?codigo=".$row["codigo"]."'>EXCLUIR</a> <br/>";
                echo "<a href='produto_editar.php?codigo=".$row["codigo"]."'>EDITAR </a> <p/> " ;
            }

            
            }else {
                
                echo "<p> Nenhum produto cadastrado! </p>";
                
                  }

                  desconectar($conn);


    ?>
</body>
</html>

<?php
}else{
 header('Location: login.php?erro=2');  
}

?>