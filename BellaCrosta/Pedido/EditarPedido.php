<?php

include("../conectarbd.php");
$recid= filter_input(INPUT_POST, 'id');
$recstatus= filter_input(INPUT_POST, 'status');

  if(mysqli_query($conn, "UPDATE tb_pedidos SET status='$recstatus' WHERE id_pedidos=$recid")) {
    echo "<script>alert('Dados alterado com sucesso!'); window.location = 'FormConsultarPedido.php';</script>";
  }else {
    echo "Não foi possível alterar os dados no Banco de Dados" . $recid . "<br>" . mysqli_error($conn);
  }
  mysqli_close($conn);

?>