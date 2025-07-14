<?php

include("../conectarbd.php");
$recid= filter_input(INPUT_POST, 'id');
$recnome= filter_input(INPUT_POST, 'status');

  if(mysqli_query($conn, "UPDATE tb_pedido SET status='$recnome' WHERE id_pedido=$recid")) {
    echo "<script>alert('Dados alterado com sucesso!'); window.location = 'FormConsultarPedido.php';</script>";
  }else {
    echo "Não foi possível alterar os dados no Banco de Dados" . $recid . "<br>" . mysqli_error($conn);
  }
  mysqli_close($conn);

?>