<?php

include("../conectarbd.php");
$recid= filter_input(INPUT_POST, 'id');
$recnome= filter_input(INPUT_POST, 'nome');
$recdescricao= filter_input(INPUT_POST, 'descricao');
$recvalor_compra= filter_input(INPUT_POST, 'valor_compra');
$recvalor_venda= filter_input(INPUT_POST, 'valor_venda');
$recingredientes= filter_input(INPUT_POST, 'ingredientes');
$recimagem = filter_input(INPUT_POST, 'imagem');

  if(mysqli_query($conn, "UPDATE tb_clientes SET nome='$recnome', descricao='$recdescricao', valor_compra='$recvalor_compra', valor_venda='$recvalor_venda', ingredientes='$recingredientes', imagem='$recimagem' WHERE id_clientes=$recid")) {
    echo "<script>alert('Dados alterado com sucesso!'); window.location = 'FormConsultarProduto.php';</script>";
  }else {
    echo "Não foi possível alterar os dados no Banco de Dados" . $recid . "<br>" . mysqli_error($conn);
  }
  mysqli_close($conn);

?>