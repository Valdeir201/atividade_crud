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
    <title>Cadastrar Produto</title>
</head>
<body>
    <h1>Cadastrar Produto</h1>
    <form action="produto_bd_registro.php" method="post">
    <p>
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" />
    </p>
    <p>
        <label for="tempo_producao">Tempo de produção</label>
        <input type="text" name="tempo_producao" id="tempo_producao" />
    </p>
    <p>
        <label for="valor">Valor</label>
        <input type="number" name="valor" id="valor" step="0.01"/>
    </p>

    <p>
        <input type="submit" value="Cadastrar">
    </p>
    </form>
</body>
</html>

<?php
}else{
 header('Location: login.php?erro=2');  
}

?>