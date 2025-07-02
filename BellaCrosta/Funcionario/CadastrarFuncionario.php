<?php include_once "../conectarbd.php"; ?>
<html>
    <body>
        <?php
        $nome = $_POST["nome"];
        $data_nascimento = $_POST["data_nascimento"];
        $cpf = $_POST["cpf"];
        $telefone = $_POST["telefone"];
        $cep = $_POST["cep"];
        $endereco = $_POST["endereco"];
        $num_casa = $_POST["num_casa"];
        $complemento = $_POST["complemento"];
        $bairro = $_POST["bairro"];
        $cidade = $_POST["cidade"];
        $estado = $_POST["estado"];
        $genero = $_POST["genero"];
        $email = $_POST["email"];
        $escolaridade = $_POST["escolaridade"];
        $carteira_trabalho = $_POST["carteira_trabalho"];
        $reservista = $_POST["reservista"];
        $titulo_eleitoral = $_POST["titulo_eleitoral"];
        $cargo = $_POST["cargo"];
        $data_admissao = $_POST["data_admissao"];
        $turno = $_POST["turno"];
        $banco = $_POST["banco"];
        $agencia = $_POST["agencia"];
        $tipo_conta = $_POST["tipo_conta"];
        $numero_conta = $_POST["numero_conta"];
        $pix = $_POST["pix"];
        $conn = mysqli_connect($servidor, $dbusuario, $dbsenha, $dbname);
        mysqli_select_db($conn, 'db_bellacrosta');
        $sql = "INSERT INTO tb_funcionarios(nome, data_nascimento, cpf, telefone, cep, endereco, num_casa, complemento, bairro, cidade, estado, genero, email, escolaridade,
        carteira_trabalho, reservista, titulo_eleitoral, cargo, data_admissao, turno, banco, agencia, tipo_conta, numero_conta, pix)
        VALUES ('$nome', '$data_nascimento', '$cpf', '$telefone', '$cep', '$endereco', '$num_casa', '$complemento', '$bairro', '$cidade', '$estado', '$genero', '$email', '$escolaridade', 
        '$carteira_trabalho', '$reservista', '$titulo_eleitoral', '$cargo', '$data_admissao', '$turno', '$banco', '$agencia', '$tipo_conta', '$numero_conta', '$pix')";
        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('Seus dados foram salvos !'); window.location = '../index.php';</script>";
        } else {
            echo "Deu erro: " . $sql . "<br>" . mysqli_error($conn);
        }
        mysqli_close($conn);
        ?>
    </body>
</html>

/