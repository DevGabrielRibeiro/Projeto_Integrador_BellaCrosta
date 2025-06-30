<?php
$servidor = "localhost";
$dbusuario = "root";
$dbsenha = "";
$dbname = "db_bellacrosta";
$conn = mysqli_connect($servidor, $dbusuario, $dbsenha, $dbname);
if (!$conn) {
    die("Conexão falhou: ". mysqli_connect_error());
}
?>


