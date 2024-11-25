<?php
session_start();

// Verifica se a sessão está ativa
if (isset($_SESSION['acesso'])) {
    // Destroi todas as variáveis de sessão
    session_unset();

    // Destrói a sessão
    session_destroy();

    // Redireciona para a página inicial
    header('Location: ../raiz/?p=home');
    exit();
} else {
    // Se não houver sessão ativa, redireciona para a página inicial
    header('Location: ../raiz/?p=home');
    exit();
}
?>
