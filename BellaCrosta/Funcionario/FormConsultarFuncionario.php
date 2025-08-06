<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Consultar CLientes</title>
        <link type="text/css" rel="stylesheet" href="../css/sb-admin-2.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    </head>

<body class="formCadastrarFuncionario">
    <div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-3">Painel do Administrador</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="../index.php">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Página Inicial</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Opções
        </div>
       <!-- Nav Item - Pages Collapse Menu -->
            <ul class="navbar-nav bg-gradient-primary sidebar-dark accordion" id="accordionSidebar">
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                        aria-expanded="false" aria-controls="collapseTwo">
                        <i class="fa-solid fa-address-card"></i>
                        <span>Cadastro</span>
                    </a>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Cadastrar</h6>
                            <a class="collapse-item"
                                href="../Funcionario/FormCadastrarFuncionario.html">Funcionários</a>
                            <a class="collapse-item" href="../Cliente/FormCadastroCliente.html">Clientes</a>
                            <a class="collapse-item" href="../Produto/FormCadastroProduto.html">Produtos</a>
                            <a class="collapse-item"
                                href="../Reserva_Individual/FormCadastroReserva_Individual.html">Reservas
                                Individuais</a>
                            <a class="collapse-item" href="../Reserva_Eventos/FormCadastroReserva_Eventos.html">Reservas
                                Eventos</a>
                            <a class="collapse-item" href="#">Mesas</a>
                            <a class="collapse-item" href="../Estoque/FormCadastroEstoque.html">Estoque</a>
                        </div>
                    </div>
                </li>

            </ul>

            <!-- Nav Item - Utilities Collapse Menu -->
            <ul class="navbar-nav bg-gradient-primary  sidebar-dark accordion" id="accordionSidebar">
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                        aria-expanded="true" aria-controls="collapseUtilities">
                        <i class="fa-solid fa-list-ul"></i>
                        <span>Consulta</span>
                    </a>
                    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                        data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Consultar</h6>
                            <div class="bg-white py-2 collapse-inner rounded">
                                <a class="collapse-item"
                                    href="../Funcionario/FormConsultarFuncionario.php">Funcionários</a>
                                <a class="collapse-item" href="../Cliente/FormConsultarCliente.php">Clientes</a>
                                <a class="collapse-item" href="../Produto/FormConsultarProduto.php">Produtos</a>
                                <a class="collapse-item"
                                    href="../Reserva_Individual/FormConsultarReserva_Individual.php">Reservas
                                    Individuais</a>
                                <a class="collapse-item"
                                    href="../Reserva_Eventos/FormConsultarReserva_Eventos.php">Reservas Eventos</a>
                                <a class="collapse-item" href="#">Mesas</a>
                                <a class="collapse-item" href="../Estoque/FormConsultarEstoque.php">Estoque</a>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">
    </ul>
    <!-- End of Sidebar -->

    <div id="content-wrapper" class="d-flex flex-column"> 
        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light topbar mb-4 static-top shadow" id="navbar-color">

            <!-- Sidebar Toggle (Topbar) -->
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                <i class="fa fa-bars"></i>
            </button>

            <!-- Topbar Search -->
            <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Pesquisar"
                        aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button">
                            <i class="fas fa-search fa-sm"></i>
                        </button>
                    </div>
                </div>
            </form>

            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">

                <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                <li class="nav-item dropdown no-arrow d-sm-none">
                    <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-search fa-fw"></i>
                    </a>
                    <!-- Dropdown - Messages -->
                    <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                        aria-labelledby="searchDropdown">
                        <form class="form-inline mr-auto w-100 navbar-search">
                            <div class="input-group">
                                <input type="text" class="form-control bg-light border-0 small"
                                    placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fas fa-search fa-sm"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>
                <div class="topbar-divider d-none d-sm-block"></div>

                <!-- Nav Item - User Information -->
                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                        <img class="img-profile rounded-circle" src="image/perfil.jpg">
                    </a>
                    <!-- Dropdown - User Information -->
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                        aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                            Profile
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                            Settings
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                            Activity Log
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            Logout
                        </a>
                    </div>
                </li>
            </ul>
        </nav>


                <h1>Consultar Clientes Cadastrados</h1>
            <table class="table">
                <thead>
                    <tr>
                        <td scope="col"><strong>ID</strong></td>	
                        <td scope="col"><strong>Nome</strong></td>		
                        <td scope="col"><strong>Data Nascimento</strong></td>
                        <td scope="col"><strong>CPF</strong></td>
                        <td scope="col"><strong>Telefone</strong></td>
                        <td scope="col"><strong>Bairro</strong></td>
                        <td scope="col"><strong>Cidade</strong></td>
                        <td scope="col"><strong>Estado</strong></td>
                        <td scope="col"><strong>Gênero</strong></td>
                        <td scope="col"><strong>Email</strong></td>
                        <td scope="col"><strong>Editar</strong></td>
                        <td scope="col"><strong>Deletar</strong></td>
                    </tr>
                </thead>

                    <?php
                        include("../conectarbd.php");
                        $selecionar= mysqli_query($conn, "SELECT * FROM tb_funcionarios");
                        while ($campo= mysqli_fetch_array($selecionar)){?>
                            <tr>
                                <th scope="row"><?=$campo["id_funcionarios"]?></th>
                                <th scope="row"><?=$campo["nome"]?></th>
                                <th scope="row"><?=$campo["data_nascimento"]?></th>
                                <th scope="row"><?=$campo["cpf"]?></th>
                                <th scope="row"><?=$campo["telefone"]?></th>
                                <th scope="row"><?=$campo["bairro"]?></th>
                                <th scope="row"><?=$campo["cidade"]?></th>
                                <th scope="row"><?=$campo["estado"]?></th>
                                <th scope="row"><?=$campo["genero"]?></th>
                                <th scope="row"><?=$campo["email"]?></th>
                                <th scope="row"><a href="FormEditarFuncionario.php?editarid=<?php echo $campo ['id_funcionarios'];?>">Editar</a></th>
                                <th scope="row"><i><a href="ExcluirFuncionario.php?p=excluir&funcionario=<?php echo $campo['id_funcionarios'];?>">Excluir</i></a></th>
                            </tr>
                    <?php }?>
                </table>
                
<!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

    </body>
</html>


