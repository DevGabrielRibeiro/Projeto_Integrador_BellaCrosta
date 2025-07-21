<?php include_once "../conectarbd.php"; ?>
<html>
    <body>
        <?php
        $status = $_POST["status"];
        $conn = mysqli_connect($servidor, $dbusuario, $dbsenha, $dbname);
        mysqli_select_db($conn, 'db_bellacrosta');
        $sql = "INSERT INTO tb_pedidos(status) VALUES ('$status')";
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