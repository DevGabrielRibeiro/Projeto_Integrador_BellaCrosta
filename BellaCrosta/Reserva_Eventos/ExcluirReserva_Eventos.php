<?php

include("../conectarbd.php");
$recid= filter_input(INPUT_GET, 'reserva_eventos');

  if(mysqli_query($conn, "DELETE FROM tb_reserva_eventos WHERE id_reserva_eventos=$recid")) {
    echo "<script>alert('Dados excluidos com sucesso!'); window.location = 'FormConsultarReserva_Eventos.php';</script>";
  }else {
    echo "Não foi possível excluir os dados no Banco de Dados" . $recid . "<br>" . mysqli_error($conn);
  }
  mysqli_close($conn);

?>