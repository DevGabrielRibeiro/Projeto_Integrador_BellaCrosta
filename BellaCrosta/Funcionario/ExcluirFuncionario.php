<?php

include("../conectarbd.php");
$recid= filter_input(INPUT_GET, 'cliente');

  if(mysqli_query($conn, "DELETE FROM tb_clientes WHERE id_clientes=$recid")) {
    echo "<script>alert('Dados excluidos com sucesso!'); window.location = 'FormConsultarCliente.php';</script>";
  }else {
    echo "Não foi possível excluir os dados no Banco de Dados" . $recid . "<br>" . mysqli_error($conn);
  }
  mysqli_close($conn);

?>