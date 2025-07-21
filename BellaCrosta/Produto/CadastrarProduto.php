<?php include_once "../conectarbd.php"; ?>
<html>
    <body>
        <?php
        $nome = $_POST["nome"];
        $descricao = $_POST["descricao"];
        $valor_compra = $_POST["valor_compra"];
        $valor_venda = $_POST["valor_venda"];
        $ingredientes = $_POST["ingredientes"];
        $imagem = $_POST["imagem"];
        $conn = mysqli_connect($servidor, $dbusuario, $dbsenha, $dbname);
        mysqli_select_db($conn, 'db_bellacrosta');
        $sql = "INSERT INTO tb_produtos(nome, descricao, valor_compra, valor_venda, ingredientes, imagem) VALUES ('$nome', '$descricao', '$valor_compra', '$valor_venda', '$ingredientes', '$imagem')";
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