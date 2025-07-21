<?php

include("../conectarbd.php");
$recid= filter_input(INPUT_GET, 'produto');

  if(mysqli_query($conn, "DELETE FROM tb_produtos WHERE id_produto=$recid")) {
    echo "<script>alert('Dados excluidos com sucesso!'); window.location = 'FormConsultarProduto.php';</script>";
  }else {
    echo "Não foi possível excluir os dados no Banco de Dados" . $recid . "<br>" . mysqli_error($conn);
  }
  mysqli_close($conn);

?>