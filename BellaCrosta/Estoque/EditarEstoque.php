<?php

include("../conectarbd.php");
$recid= filter_input(INPUT_POST, 'id');
$recnome= filter_input(INPUT_POST, 'nome');
$recquantidade= filter_input(INPUT_POST, 'quantidade');

  if(mysqli_query($conn, "UPDATE tb_produtos SET nome='$recnome', quantidade='$recquantidade' WHERE id_produto=$recid")) {
    echo "<script>alert('Dados alterado com sucesso!'); window.location = 'FormConsultarEstoque.php';</script>";
  }else {
    echo "Não foi possível alterar os dados no Banco de Dados" . $recid . "<br>" . mysqli_error($conn);
  }
  mysqli_close($conn);

?>