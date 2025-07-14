<?php

include("../conectarbd.php");
$recid= filter_input(INPUT_GET, 'reserva_individual');

  if(mysqli_query($conn, "DELETE FROM tb_reserva_individual WHERE id_reserva_individual=$recid")) {
    echo "<script>alert('Dados excluidos com sucesso!'); window.location = 'FormConsultarReserva_Individual.php';</script>";
  }else {
    echo "Não foi possível excluir os dados no Banco de Dados" . $recid . "<br>" . mysqli_error($conn);
  }
  mysqli_close($conn);

?>