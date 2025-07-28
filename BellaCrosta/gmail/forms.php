<?php
// Verifica se o Flask está rodando
$connection = @fsockopen('127.0.0.1', 5000);
if ($connection) {
    fclose($connection);
    header("Location: http://127.0.0.1:5000/");
    exit;
} else {
    // Mensagem amigável se o Flask não estiver rodando
    echo "<h2 style='color: #ff4e50; text-align: center; margin-top: 40px;'>
            O formulário de email não está disponível.<br>
            Por favor, inicie o servidor Flask com:<br>
            <code>python gmail/app.py</code> em outro terminal.
          </h2>";
}
?>
        $connection = @fsockopen('127.0.0.1', 5000);
        if ($connection) {
            fclose($connection);
            break;
        }
        $tries++;
    }
} else {
    fclose($connection);
}

// Redireciona para o formulário Flask
header("Location: http://127.0.0.1:5000/");
exit;
?>
