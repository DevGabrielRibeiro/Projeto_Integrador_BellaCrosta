<?php

include("../conectarbd.php");
$recid= filter_input(INPUT_POST, 'id');
$recnome_cliente= filter_input(INPUT_POST, 'nome_cliente');
$recdata_hora= filter_input(INPUT_POST, 'data_hora');
$rectaxa= filter_input(INPUT_POST, 'taxa');
$recdescricao= filter_input(INPUT_POST, 'descricao');
  if(mysqli_query($conn, "UPDATE tb_reserva_individual SET nome_cliente='$recnome_cliente', data_hora='$recdata_hora', taxa='$rectaxa', descricao='$recdescricao' WHERE id_reserva_individual=$recid")) {
    echo "<script>alert('Dados alterado com sucesso!'); window.location = 'FormConsultarReserva_Individual.php';</script>";
  }else {
    echo "Não foi possível alterar os dados no Banco de Dados" . $recid . "<br>" . mysqli_error($conn);
  }
  mysqli_close($conn);

?>