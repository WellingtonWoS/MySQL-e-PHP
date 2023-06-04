<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Exclusão de Cadastro</title>
  </head>
  <body>
    <div class="container">
        <div class="row">
            <?php

                include "conexao.php";
                
                $id = $_POST['id'];
                $nome = $_POST['nome'];

                $sql = "DELETE FROM `pessoas` WHERE cod_pessoa = $id";

                if(mysqli_query($conn, $sql)){
                    mensagem("$nome Excluido com sucesso!", 'success');
                }else{
                    mensagem("$nome NÃO excluido!", 'danger');
                }

            ?>

            <a href="index.php" class="btn btn-primary">Voltar</a>
            
            </div>
        </div>
    </div>  
  </body>
</html>
