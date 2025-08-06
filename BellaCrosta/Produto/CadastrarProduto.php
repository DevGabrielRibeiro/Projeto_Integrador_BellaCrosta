<?php
include_once "../conectarbd.php";

// Verifica se o formulário foi enviado via POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Escapa os dados para evitar SQL Injection
    $nome = mysqli_real_escape_string($conn, $_POST["nome"] ?? '');
    $descricao = mysqli_real_escape_string($conn, $_POST["descricao"] ?? '');
    $valor_compra = mysqli_real_escape_string($conn, $_POST["valor_compra"] ?? '');
    $valor_venda = mysqli_real_escape_string($conn, $_POST["valor_venda"] ?? '');
    $ingredientes = mysqli_real_escape_string($conn, $_POST["ingredientes"] ?? '');

    // Processamento do upload da imagem
    $imagem_nome = "";
    if (isset($_FILES["imagem"]) && $_FILES["imagem"]["error"] == UPLOAD_ERR_OK) {
        $ext = pathinfo($_FILES["imagem"]["name"], PATHINFO_EXTENSION);
        $imagem_nome = uniqid("produto_") . "." . $ext;
        $destino_dir = "../uploads/";
        // Cria o diretório se não existir
        if (!is_dir($destino_dir)) {
            mkdir($destino_dir, 0777, true);
        }
        $destino = $destino_dir . $imagem_nome;
        move_uploaded_file($_FILES["imagem"]["tmp_name"], $destino);
    }

    $sql = "INSERT INTO tb_produtos(nome, descricao, valor_compra, valor_venda, ingredientes, imagem) VALUES ('$nome', '$descricao', '$valor_compra', '$valor_venda', '$ingredientes', '$imagem_nome')";
    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Seus dados foram salvos !'); window.location = '../index.php';</script>";
    } else {
        echo "Deu erro: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
} else {
    echo "Método de requisição inválido.";
}
?>