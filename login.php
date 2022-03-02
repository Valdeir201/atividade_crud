<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <style type="text/css">
.erro {
    color: red;
}

</style>
</head>
<body>



      
        <p>
            <h1>Autenticação</h1>
            <?php
                $erro = $_GET["erro"] ?? NULL;
            ?>

             <?php
             if($erro == 1){

                 echo "<p class=erro>Usuário ou senha incorreta, tente novamente.</p>";
             }else{
                if($erro == 2){

                    echo "<p class=erro> Você não tem permissão para acessar a página.</p>";
                } 
             }
              
            ?>
      
      
            </p>   
        <form action="autenticar.php" method="POST">
            <p>
                <label for="usuario">Usuário:</label>
                <input type="text" name="usuario" id="usuario" />
            </p>
            <p>
                <label for="senha">Senha:</label>
                <input type="password" name="senha" id="senha" />
            </p>
            <p>
                <input type="submit" value="Autenticar" />
            </p>
        </form>      


        
</body>
</html>
