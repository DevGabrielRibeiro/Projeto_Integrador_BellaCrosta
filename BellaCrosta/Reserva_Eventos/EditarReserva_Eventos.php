<?php

include("../conectarbd.php");
$recid= filter_input(INPUT_POST, 'id');
$recnome_cliente= filter_input(INPUT_POST, 'nome_cliente');
$recdata= filter_input(INPUT_POST, 'data');
$rechora= filter_input(INPUT_POST, 'hora');
$rectaxa= filter_input(INPUT_POST, 'taxa');
$recdescricao= filter_input(INPUT_POST, 'descricao');
  if(mysqli_query($conn, "UPDATE tb_reserva_eventos SET nome_cliente='$recnome_cliente', data='$recdata', hora='$rechora', taxa='$rectaxa', descricao='$recdescricao' WHERE id_reserva_eventos=$recid")) {
    echo "<script>alert('Dados alterado com sucesso!'); window.location = 'FormConsultarReserva_Eventos.php';</script>";
  }else {
    echo "Não foi possível alterar os dados no Banco de Dados" . $recid . "<br>" . mysqli_error($conn);
  }
  mysqli_close($conn);

?>