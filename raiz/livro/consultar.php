<?php
// Inicializa variáveis para mensagens e tipos de alerta
$alertType = '';
$message = '';

// Verifica se o botão foi clicado
if (filter_input(INPUT_POST, 'btnconsultar')) {
    $isbn = filter_input(INPUT_POST, 'isbn');

    include_once "../class/Livro.php";
    $cat = new Livro();

    if ($cat->consultar($isbn)) {
        $alertType = 'success';
        $message = 'Livro existe!';
        // Redireciona após exibir o alerta
        echo '<script>document.addEventListener("DOMContentLoaded", function() { Swal.fire({
            icon: "success",
            title: "' . $message . '",
            background: "#fff",
            iconColor: "green",
            timer: 2000,
            timerProgressBar: true,
            position: "top",
            width: 400,
            showConfirmButton: false,
            willClose: () => {
                window.location.href = "?p=livro/salvar";
            }
        }); });</script>';
    } else {
        $alertType = 'error';
        $message = 'Livro não existe!';
        echo '<script>document.addEventListener("DOMContentLoaded", function() { Swal.fire({
            icon: "error",
            title: "Erro!",
            background: "#fff",
            iconColor: "red",
            text: "' . $message . '",
            width: 400,
            timer: 2000,
            timerProgressBar: true,
            position: "top",
            showConfirmButton: false
        }); });</script>';
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">

    <style>
        body {
    margin: 0;
    padding: 0;
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    font-family: "Quicksand", sans-serif;
    position: relative;
}

.video {
    position: absolute;
    top: 0;
    left: 0;
    width: 100vw;
    height: 100vh;
    object-fit: cover;
    z-index: -1;
    filter: hue-rotate(50deg) grayscale(60%) brightness(0.7) contrast(120%);
}

form {
    padding: 20px;
    width: 40%;
    height: auto; /* Ajustado para não ultrapassar a tela */
    border-radius: 10px;
    text-align: center;
    z-index: 1;
    background: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    font-family: "Quicksand", sans-serif;
}

h3 {
    color: #fff;
    font-size: 36px;
    font-family: "Caveat", cursive;
    margin-bottom: 80px;
    margin-top: 50px;
}

.form-control {
    background-color: transparent;
    border: solid 1px #fff;
    color: #fff;
    border-radius: 15px;
    margin-bottom: 10px;
    height: 50px;
}

.btn {
    background-color: transparent;
    color: #fff;
    border: none;
    border-radius: 5px;
    padding: 10px 20px;
    font-size: 16px;
    cursor: pointer;
    border: 1px solid #fff;
    width: 100px;
    margin: 20px;
    margin-top: 55px;
}

.btn:hover {
    background-color: rgba(0, 0, 0, 0.1);
}

.container {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    height: 100%;
}

/* Media Query para telas menores ou iguais a 768px */
@media (max-width: 768px) {
    form {
        width: 90%; /* Aumenta a largura do formulário para 80% da tela */
        padding: 15px;
       
        
    }

    h3 {
        font-size: 28px; /* Ajusta o tamanho da fonte do título */
        margin-bottom: 40px;
    }

    .form-control {
        height: 45px; 
        
    }

    .btn {
        width: 30%; /* Aumenta o tamanho do botão */
        font-size: 14px;
        padding: 12px 0;
    }

    .container {
        height: auto; /* Permite que o conteúdo ajuste a altura */
        padding: 20px; /* Adiciona espaçamento */
    }

    .video {
        object-fit: cover; /* Garante que o vídeo cubra a tela */
    }
}

    </style>
</head>

<body>
    <video class="video" autoplay muted loop>
        <source src="../img/yuri.mp4" type="video/mp4">
    </video>
    <div class="container">
        <form method="post" name="frmsalvar" id="frmsalvar" class="m-3">
            <h3 class="text">Bem Vindo Autor!</h3>
            <input type="text" class="form-control" id="isbn" name="isbn" placeholder="Insira o ISBN 10 do livro:" maxlength="12" minlength="10" required />
            <div class="form-group">
                <input type="submit" class="btn" name="btnconsultar" id="botao1" value="Enviar" />
                <a class="btn" id="botao2" href="?p=home">Voltar</a>
            </div>
        </form>
    </div>

</body>

</html>
