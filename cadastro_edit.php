<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Alteração de Cadastro</title>
  </head>
  <body>

    <?php

        include "conexao.php";
        $id = $_GET['id'] ?? '';
        $sql = "SELECT * FROM pessoas WHERE cod_pessoa = $id";

        $dados = mysqli_query($conn, $sql);
        $linha = mysqli_fetch_assoc($dados);

    ?>


    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Cadastro</h1>
                <form action="edit_script.php" method="POST">
                    <div class="mb-3">
                         <label for="nome" class="form-label">Nome Completo</label>
                            <input type="text" class="form-control" name="nome" required value="<?php echo $linha['nome']; ?>">
                             </div>
                    <div class="mb-3">
                         <label for="endereco" class="form-label">Endereço</label>
                            <input type="text" class="form-control" name="endereco" required value="<?php echo $linha['endereco']; ?>">
                             </div>
                    <div class="mb-3">
                         <label for="telefone" class="form-label">Telefone</label>
                            <input type="text" class="form-control" name="telefone" required value="<?php echo $linha['telefone']; ?>">
                             </div>
                    <div class="mb-3">
                         <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control" name="email"required value="<?php echo $linha['email']; ?>">
                             </div>
                    <div class="mb-3">
                         <label for="endereco" class="form-label">Data de Nascimento</label>
                            <input type="date" class="form-control" name="data_nascimento" required value="<?php echo $linha['data_nascimento']; ?>">
                             </div>
                    <div class="mb-3">
                            <input type="submit" class="btn btn-sucess" value="Salvar Alterações">
                            <input type="hidden" name="id" required value="<?php echo $linha['cod_pessoa']; ?>">
                             </div>
                </form>
                <a href="index.php" class="btn btn-info">Voltar para o Inicio</a>
            </div> 
        </div>
    </div>
  </body>
</html>
