<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Editar Cliente</title>
    <link rel="stylesheet" href="../css/sb-admin-2.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
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
                <a class="nav-link" href="index.html">
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

            <?php
                include("../conectarbd.php");
                $recid = filter_input(INPUT_GET, 'editarid');
                $selecionar = mysqli_query($conn, "SELECT * FROM tb_funcionarios WHERE id_funcionarios=$recid");
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
                                            <div class="text-center">
                                                <h1 class="h4 text-gray-900 mb-4">Editar Dados do Cliente</h1>
                                            </div>
                                            <form class="user" action="EditarFuncionario.php" method="post">
                                                <!--esta linha cria um campo oculto para passar o id_cidade, pois senão ao clicar em Salvar o código não saberá onde salvar.-->
                                                <input type="hidden" name="id" value="<?= $campo["id_funcionarios"] ?>">
                                                <div class="form-group">
                                                    <input type="text" class="form-control input-format"
                                                        id="exampleInputNome" aria-describedby="emailHelp" name="nome"
                                                        placeholder="Digite seu nome" value="<?= $campo["nome"] ?>">
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                                        <input type="date" class="form-control input-format"
                                                            id="exampleDate" name="data_nascimento"
                                                            placeholder="Data nascimento" value="<?= $campo["data_nascimento"] ?>">
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control input-format"
                                                            id="exampleCpf" name="cpf" placeholder="CPF" value="<?= $campo["cpf"] ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                                        <input type="text" class="form-control input-format"
                                                            id="exampleTelefone" name="telefone" placeholder="Telefone" value="<?= $campo["telefone"] ?>">
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control input-format"
                                                            id="exampleCep" name="cep" placeholder="CEP" value="<?= $campo["cep"] ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                                        <input type="text" class="form-control input-format"
                                                            id="exampleEndereco" name="endereco" placeholder="Endereco" value="<?= $campo["endereco"] ?>">
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control input-format"
                                                            id="exampleN" name="num_casa" placeholder="Número da casa" value="<?= $campo["num_casa"] ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                                        <input type="text" class="form-control input-format"
                                                            id="exampleComplemento" name="complemento"
                                                            placeholder="Complemento" value="<?= $campo["complemento"] ?>">
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control input-format"
                                                            id="exampleBairro" name="bairro" placeholder="Bairro" value="<?= $campo["bairro"] ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                                        <input type="text" class="form-control input-format"
                                                            id="exampleCidade" name="cidade" placeholder="Cidade" value="<?= $campo["cidade"] ?>">
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <select class="form-control select-format" name="estado">
                                                            <option value="" disabled selected hidden>Estado</option>
                                                            <option value="AC">Acre</option>
                                                            <option value="AL">Alagoas</option>
                                                            <option value="AP">Amapá</option>
                                                            <option value="AM">Amazonas</option>
                                                            <option value="BA">Bahia</option>
                                                            <option value="CE">Ceará</option>
                                                            <option value="DF">Distrito Federal</option>
                                                            <option value="ES">Espírito Santo</option>
                                                            <option value="GO">Goiás</option>
                                                            <option value="MA">Maranhão</option>
                                                            <option value="MT">Mato Grosso</option>
                                                            <option value="MS">Mato Grosso do Sul</option>
                                                            <option value="MG">Minas Gerais</option>
                                                            <option value="PA">Pará</option>
                                                            <option value="PB">Paraíba</option>
                                                            <option value="PR">Paraná</option>
                                                            <option value="PE">Pernambuco</option>
                                                            <option value="PI">Piauí</option>
                                                            <option value="RJ">Rio de Janeiro</option>
                                                            <option value="RN">Rio Grande do Norte</option>
                                                            <option value="RS">Rio Grande do Sul</option>
                                                            <option value="RO">Rondônia</option>
                                                            <option value="RR">Roraima</option>
                                                            <option value="SC">Santa Catarina</option>
                                                            <option value="SP">São Paulo</option>
                                                            <option value="SE">Sergipe</option>
                                                            <option value="TO">Tocantins</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                                        <select class="form-control select-format" name="genero">
                                                            <option value="" disabled selected hidden>Selecione o Gênero
                                                            </option>
                                                            <option value="Masculino">Masculino</option>
                                                            <option value="Feminino">Feminino</option>
                                                            <option value="Prefiro não dizer">Prefiro não dizer</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control input-format"
                                                            id="exampleEmail" name="email" placeholder="Email" value="<?= $campo["email"] ?>">
                                                    </div>
                                                </div>
                                                <hr>

                                                <div class="form-group row">
                                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                                        <label for="escolaridade">Escolaridade</label>
                                                        <input class="form-control file-input" type="file"
                                                            id="escolaridade" name="escolaridade" value="<?= $campo["escolaridade"] ?>">
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label for="cart_trab">Carteira de Trabalho</label>
                                                        <input class="form-control file-input" type="file"
                                                            id="cart_trab" name="carteira_trabalho" value="<?= $campo["carteira_trabalho"] ?>">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                                        <label for="reservista">Certificado de Reservista</label>
                                                        <input class="form-control file-input" type="file"
                                                            id="reservista" name="reservista"value="<?= $campo["reservista"] ?>">
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label for="titulo_eleitoral">Título de Eleitor</label>
                                                        <input class="form-control file-input" type="file"
                                                            id="titulo_eleitoral" name="titulo_eleitoral" value="<?= $campo["titulo_eleitoral"] ?>">
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="form-group row">
                                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                                        <select class="form-control select-format" name="cargo">
                                                            <option value="" disabled selected hidden>Cargo</option>
                                                            <option value="Gerente">Gerente</option>
                                                            <option value="Auxiliar Administrativo">Auxiliar
                                                                Administrativo</option>
                                                            <option value="Auxiliar Financeiro">Auxiliar Financeiro
                                                            </option>
                                                            <option value="Garçom">Garçom</option>
                                                            <option value="Pizzaiolo">Pizzaiolo</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <input type="date" class="form-control input-format"
                                                            id="exampleDataAdmissao" name="data_admissao"
                                                            placeholder="Data Admissão" value="<?= $campo["data_admissao"] ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                                        <select class="form-control select-format" name="turno">
                                                            <option value="" disabled selected hidden>Selecione o Turno
                                                            </option>
                                                            <option value="Dia">Dia</option>
                                                            <option value="Noite">Noite</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control input-format"
                                                            id="exampleBanco" name="banco" placeholder="Banco" value="<?= $campo["banco"] ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                                        <input type="text" class="form-control input-format"
                                                            id="exampleAgencia" name="agencia" placeholder="Agência" value="<?= $campo["agencia"] ?>">
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control input-format"
                                                            id="exampleTipo_conta" name="tipo_conta"
                                                            placeholder="Tipo de Conta" value="<?= $campo["tipo_conta"] ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                                        <input type="text" class="form-control input-format"
                                                            id="exampleNumeroconta" name="numero_conta"
                                                            placeholder="Número da conta" value="<?= $campo["numero_conta"] ?>">
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control input-format"
                                                            id="examplePix" name="pix" placeholder="Chave Pix" value="<?= $campo["pix"] ?>">
                                                    </div>
                                                </div>
                                                <hr>
                                                <button class="btn btn-primary btn-user btn-block">
                                                    Salvar </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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