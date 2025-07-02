<?php

include("../conectarbd.php");
$recid= filter_input(INPUT_POST, 'id');
$recnome= filter_input(INPUT_POST, 'nome');
$recdata_nascimento= filter_input(INPUT_POST, 'data_nascimento');
$reccpf= filter_input(INPUT_POST, 'cpf');
$rectelefone= filter_input(INPUT_POST, 'telefone');
$reccep= filter_input(INPUT_POST, 'cep');
$recendereco= filter_input(INPUT_POST, 'endereco');
$recnum_casa= filter_input(INPUT_POST, 'num_casa');
$reccomplemento= filter_input(INPUT_POST, 'complemento');
$recbairro= filter_input(INPUT_POST, 'bairro');
$reccidade= filter_input(INPUT_POST, 'cidade');
$recestado= filter_input(INPUT_POST, 'estado');
$recgenero= filter_input(INPUT_POST, 'genero');
$recemail= filter_input(INPUT_POST, 'email');
$recescolaridade= filter_input(INPUT_POST, 'escolaridade');
$reccarteira_trabalho= filter_input(INPUT_POST, 'carteira_trabalho');
$recreservista= filter_input(INPUT_POST, 'reservista');
$rectitulo_eleitoral= filter_input(INPUT_POST, 'titulo_eleitoral');
$reccargo= filter_input(INPUT_POST, 'cargo');
$recdata_admissao= filter_input(INPUT_POST, 'data_admissao');
$recturno= filter_input(INPUT_POST, 'turno');
$recbanco= filter_input(INPUT_POST, 'banco');
$recagencia= filter_input(INPUT_POST, 'agencia');
$rectipo_conta= filter_input(INPUT_POST, 'tipo_conta');
$recnumero_contaa= filter_input(INPUT_POST, 'numero_conta');
$recpix= filter_input(INPUT_POST, 'pix');

  if(mysqli_query($conn, "UPDATE tb_funcionarios SET nome='$recnome', data_nascimento='$recdata_nascimento', cpf='$reccpf', telefone='$rectelefone', cep='$reccep', endereco='$recendereco', num_casa='$recnum_casa',
  complemento='$reccomplemento', bairro='$recbairro', cidade='$reccidade', estado='$recestado', genero='$recgenero', email='$recemail', escolaridade='$recescolaridade', carteira_trabalho='$reccarteira_trabalho', 
  reservista='$recreservista', titulo_eleitoral='$rectitulo_eleitoral', cargo='$reccargo', sedata_admissaonha='$recdata_admissao', turno='$recturno', banco='$recbanco',agencia='$recagencia', tipo_conta='$rectipo_conta',
  numero_conta='$recnumero_conta', pix='$recpix' WHERE id_funcionarios=$recid")) {
    echo "<script>alert('Dados alterado com sucesso!'); window.location = 'FormConsultarFuncionario.php';</script>";
  }else {
    echo "Não foi possível alterar os dados no Banco de Dados" . $recid . "<br>" . mysqli_error($conn);
  }
  mysqli_close($conn);

?>