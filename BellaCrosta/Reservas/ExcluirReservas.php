<?php

include("../conectarbd.php");
$recid= filter_input(INPUT_GET, 'reservas');

  if(mysqli_query($conn, "DELETE FROM tb_reservas WHERE id_reservas=$recid")) {
    echo "<script>alert('Dados excluidos com sucesso!'); window.location = 'FormConsultarReservas.php';</script>";
  }else {
    echo "Não foi possível excluir os dados no Banco de Dados" . $recid . "<br>" . mysqli_error($conn);
  }
  mysqli_close($conn);

?>