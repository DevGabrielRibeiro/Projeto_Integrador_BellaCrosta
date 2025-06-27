<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Editar Cliente</title>
    <link rel="stylesheet" href="css/estiloforms.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>

<body>
    <?php
        include("../conectarbd.php");
        $recid = filter_input(INPUT_GET, 'editarid');
        $selecionar = mysqli_query($conn, "SELECT * FROM tb_clientes WHERE id_clientes=$recid");
        $campo = mysqli_fetch_array($selecionar);
        ?>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image">
                                <img src="../image/Image_Login.png" alt="">
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <form action="EditarCliente.php" method="post">    
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Cadastro de Cliente</h1>
                                    </div>
                                    <!--esta linha cria um campo oculto para passar o id_cidade, pois senão ao clicar em Salvar o código não saberá onde salvar.-->
                                    <input type="hidden" name="id" value="<?= $campo["id_clientes"] ?>">

                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id="exampleInputNome"
                                            name="nome" aria-describedby="emailHelp" placeholder="Digite seu nome"
                                            value="<?= $campo["nome"] ?>">
                                    </div>

                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id="exampleInputCpf"
                                            name="cpf" placeholder="Digite seu CPF" value="<?= $campo["cpf"] ?>">
                                    </div>

                                    <div class="form-group">
                                        <input type="email" class="form-control form-control-user"
                                            id="exampleInputEmail" name="email" placeholder="Digite seu email"
                                            value="<?= $campo["email"] ?>">
                                    </div>

                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user"
                                            id="exampleInputTelefone" name="telefone" placeholder="Digite seu telefone"
                                            value="<?= $campo["telefone"] ?>">
                                    </div>

                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user"
                                            id="exampleInputPassword" name="senha" placeholder="Digite sua senha"
                                            value="<?= $campo["senha"] ?>">
                                    </div>

                                    <input type="submit" class="botoes" value="Salvar">
                                    <a href="FormConsultarCliente.php"><input type="button" class="botoes"
                                            value="Cancelar" /></a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
