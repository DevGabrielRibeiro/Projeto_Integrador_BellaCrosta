<?php

include("../conectarbd.php");
$recid= filter_input(INPUT_POST, 'id');
$recnome= filter_input(INPUT_POST, 'nome');
$reccpf= filter_input(INPUT_POST, 'cpf');
$recemail= filter_input(INPUT_POST, 'email');
$rectelefone= filter_input(INPUT_POST, 'telefone');
$recsenha= filter_input(INPUT_POST, 'senha');

  if(mysqli_query($conn, "UPDATE tb_clientes SET nome='$recnome', cpf='$reccpf', email='$recemail', telefone='$rectelefone', senha='$recsenha' WHERE id_clientes=$recid")) {
    echo "<script>alert('Dados alterado com sucesso!'); window.location = 'FormConsultarCliente.php';</script>";
  }else {
    echo "Não foi possível alterar os dados no Banco de Dados" . $recid . "<br>" . mysqli_error($conn);
  }
  mysqli_close($conn);

?>