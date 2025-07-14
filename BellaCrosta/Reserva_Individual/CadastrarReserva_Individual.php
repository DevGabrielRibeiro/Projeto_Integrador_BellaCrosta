<?php include_once "../conectarbd.php"; ?>
<html>
    <body>
        <?php
        $nome_cliente = $_POST["nome_cliente"];
        $data_hora = $_POST["data_hora"];
        $taxa = $_POST["taxa"];
        $descricao = $_POST["descricao"];
        $conn = mysqli_connect($servidor, $dbusuario, $dbsenha, $dbname);
        mysqli_select_db($conn, 'db_bellacrosta');
        $sql = "INSERT INTO tb_reserva_individual (nome_cliente, data_hora, taxa, descricao) VALUES ('$nome_cliente', '$data_hora', '$taxa', '$descricao')";
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