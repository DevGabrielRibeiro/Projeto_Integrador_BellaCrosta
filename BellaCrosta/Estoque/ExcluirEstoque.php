<?php

include("../conectarbd.php");
$recid= filter_input(INPUT_GET, 'estoque');

  if(mysqli_query($conn, "DELETE FROM tb_estoque WHERE id_estoque=$recid")) {
    echo "<script>alert('Dados excluidos com sucesso!'); window.location = 'FormConsultarEstoque.php';</script>";
  }else {
    echo "Não foi possível excluir os dados no Banco de Dados" . $recid . "<br>" . mysqli_error($conn);
  }
  mysqli_close($conn);

?>