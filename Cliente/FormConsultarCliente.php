<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Consultar CLientes</title>
        <link type="text/css" rel="stylesheet" href="estilo.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    </head>

     <body>
                <h1>Consultar Clientes Cadastrados</h1>
            <table class="table">
                <thead>
                    <tr>
                        <td scope="col"><strong>ID</strong></td>	
                        <td scope="col"><strong>Nome</strong></td>		
                        <td scope="col"><strong>CPF</strong></td>
                        <td scope="col"><strong>Email</strong></td>
                        <td scope="col"><strong>Telefone</strong></td>
                        <td scope="col"><strong>Senha</strong></td>
                        <td scope="col"><strong>Editar</strong></td>
                        <td scope="col"><strong>Deletar</strong></td>
                    </tr>
                </thead>

                    <?php
                        include("../conectarbd.php");
                        $selecionar= mysqli_query($conn, "SELECT * FROM tb_clientes");
                        while ($campo= mysqli_fetch_array($selecionar)){?>
                            <tr>
                                <th scope="row"><?=$campo["id_clientes"]?></th>
                                <th scope="row"><?=$campo["nome"]?></th>
                                <th scope="row"><?=$campo["cpf"]?></th>
                                <th scope="row"><?=$campo["email"]?></th>
                                <th scope="row"><?=$campo["telefone"]?></th>
                                <th scope="row"><?=$campo["senha"]?></th>
                                <th scope="row"><a href="FormEditarCliente.php?editarid=<?php echo $campo ['id_clientes'];?>">Editar</a></th>
                                <th scope="row"><i><a href="ExcluirCliente.php?p=excluir&cliente=<?php echo $campo['id_clientes'];?>">Excluir</i></a></th>
                            </tr>
                    <?php }?>
                </table><br>
                    <a href="../index.php"><input type="button" class="botoes" value="Cancelar"/></a>
    </body>
</html>


