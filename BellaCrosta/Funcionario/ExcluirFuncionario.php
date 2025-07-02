<?php

include("../conectarbd.php");
$recid= filter_input(INPUT_GET, 'funcionario');

  if(mysqli_query($conn, "DELETE FROM tb_funcionarios WHERE id_funcionarios=$recid")) {
    echo "<script>alert('Dados excluidos com sucesso!'); window.location = 'FormConsultarFuncionario.php';</script>";
  }else {
    echo "Não foi possível excluir os dados no Banco de Dados" . $recid . "<br>" . mysqli_error($conn);
  }
  mysqli_close($conn);

?>