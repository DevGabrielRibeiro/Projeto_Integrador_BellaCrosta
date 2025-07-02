<?php include_once "../conectarbd.php"; ?>
<html>
    <body>
        <?php
        $nome = $_POST["nome"];
        $dataNascimento = $_POST["dataNascimento"];
        $email = $_POST["cpf"];
        $telefone = $_POST["telefone"];
        $senha = $_POST["senha"];
        $senha = $_POST["senha"];
        $senha = $_POST["senha"];
        $senha = $_POST["senha"];
        $senha = $_POST["senha"];
        $senha = $_POST["senha"];
        $senha = $_POST["senha"];
        $senha = $_POST["senha"];
        $senha = $_POST["senha"];
        $senha = $_POST["senha"];
        $senha = $_POST["senha"];
        $senha = $_POST["senha"];
        $senha = $_POST["senha"];
        $senha = $_POST["senha"];
        $senha = $_POST["senha"];
        $senha = $_POST["senha"];
        $senha = $_POST["senha"];
        $senha = $_POST["senha"];
        $senha = $_POST["senha"];
        $senha = $_POST["senha"];
        $senha = $_POST["senha"];
        $conn = mysqli_connect($servidor, $dbusuario, $dbsenha, $dbname);
        mysqli_select_db($conn, 'db_bellacrosta');
        $sql = "INSERT INTO tb_clientes(nome, cpf, email, telefone, senha) VALUES ('$nome', '$cpf', '$email', '$telefone', '$senha')";
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