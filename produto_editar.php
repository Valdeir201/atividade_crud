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
    <title>Edição de Produto</title>
</head>
<body>
    <?php
        $codigo = $_GET["codigo"];

        include "conexao.php";
        $conn = conectar();

        $sql = "SELECT * FROM produto WHERE codigo=".$codigo;

        $result = $conn->query($sql);
    
        $nome ="";
        $tempo="";
        $valor=0;
    
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $nome = $row["nome"];
                $tempo = $row["tempo_producao"];
                $valor = $row["valor"];
            }
        }
        desconectar($conn);

    ?>
    <h1>Editar Produto</h1>
    <form action="produto_bd_editar.php" method="post">
    <p>
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" value="<?php echo $nome; ?>" />
    </p>
    <p>
        <label for="tempo_producao">Tempo de produção</label>
        <input type="text" name="tempo_producao" id="tempo_producao" value="<?php echo $tempo; ?>" />
    </p>
    <p>
        <label for="valor">Valor</label>
        <input type="number" name="valor" id="valor" step="0.01" value="<?php echo $valor; ?>"/>
    </p>
    </p>

        <input type="hidden" name="codigo" value="<?php echo $codigo; ?>" />

    <p>
    <p>
        <input type="submit" value="Editar">
    </p>
    </form>
</body>
</html>

<?php
}else{
 header('Location: login.php?erro=2');  
}

?>