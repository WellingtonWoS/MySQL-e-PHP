<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Cadastro</title>
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Cadastro</h1>
                <form action="cadastro_script.php" method="POST">
                    <div class="mb-3">
                         <label for="nome" class="form-label">Nome Completo</label>
                            <input type="text" class="form-control" name="nome">
                             </div>
                    <div class="mb-3">
                         <label for="endereco" class="form-label">Endereço</label>
                            <input type="text" class="form-control" name="endereco">
                             </div>
                    <div class="mb-3">
                         <label for="telefone" class="form-label">Telefone</label>
                            <input type="text" class="form-control" name="telefone">
                             </div>
                    <div class="mb-3">
                         <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control" name="email">
                             </div>
                    <div class="mb-3">
                         <label for="endereco" class="form-label">Data de Nascimento</label>
                            <input type="date" class="form-control" name="data_nascimento">
                             </div>
                    <div class="mb-3">
                            <input type="submit" class="btn btn-sucess">
                             </div>
                </form>
                <a href="index.php" class="btn btn-info">Voltar para o Inicio</a>
            </div> 
        </div>
    </div>
  </body>
</html>
