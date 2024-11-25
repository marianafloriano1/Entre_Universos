<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['rating'])) {
        $rating = $_POST['rating'];
        // Aqui você pode processar a avaliação, como salvá-la em um banco de dados.
        echo "Avaliação de $rating estrela(s) enviada com sucesso!";
    } else {
        echo "Avaliação não recebida.";
    }
}
?>