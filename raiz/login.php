<?php
session_start();

$loginSuccess = false;

if (filter_input(INPUT_POST, 'btnlogar')) {
    $nome_autor = filter_input(INPUT_POST, 'txtnome');
    $email = filter_input(INPUT_POST, 'txtemail');
    $senha = filter_input(INPUT_POST, 'txtsenha');

    include_once '../class/Autor.php';
    $user = new Autor();

    $user->setNome_autor($nome_autor);
    $user->setEmail(trim($email));
    $user->setSenha(trim($senha));

    if (count($user->consultar()) <= 0) {
        $errorMessage = 'Usuário não encontrado!';
    } else {
        $_SESSION['acesso'] = true;
        $_SESSION['nome_autor'] = $nome_autor;
        $loginSuccess = true;
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cedarville+Cursive&family=Edu+VIC+WA+NT+Beginner:wght@400..700&family=Pacifico&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Bad+Script&family=Caveat:wght@400..700&family=Edu+VIC+WA+NT+Beginner:wght@400..700&family=Josefin+Slab:ital,wght@0,100..700;1,100..700&family=Nanum+Gothic&family=Shadows+Into+Light&family=Shadows+Into+Light+Two&display=swap" rel="stylesheet">

    <style>
        .video {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            object-fit: cover;
            z-index: -1;
            border: none;
        }
        .btn-voltar {
            background-color: none; 
            border: 1px solid rgba(255, 255, 255, 0.3);
            color: white;
            padding: 5px 20px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
            transition: background-color 0.3s ease;
            margin-left: -400px
            
        }
        .btn-voltar:hover {
            color: #565656
        }
        body {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            position: fixed;
            font-family: "Quicksand", sans-serif;
        }
        .form-container {
            background-color: transparent;
            padding: 20px;
            width: 500px;
            text-align: center;
            border: 1px rgba(255, 255, 255, 0.1);
            box-shadow: 0 0 3px rgba(255, 255, 255, 0.4);
            backdrop-filter: blur(15px);
            margin-left: auto;
            margin-right: auto;
            margin-top: 60px;
            height: 100%;
        }
        
        h1 {
            color: #fff;
            text-shadow: -0.5px -1px 0 #000, 0.5px -1px 0 #000, -0.5px 0.5px 0 #000, 0.5px 0.5px 0 #000;
            font-size: 39px;
            margin-top: 40px;

        }
        h4 {
            color: #fff;
            font-size: 34px;
            margin-top: 25px;
            font-family: "Caveat", cursive;
            margin-bottom: 70px;
        }
        input::placeholder {
            color: #fff;
            font-size: 18px;
        }
        input {
            background-color: transparent;
            width: 400px;
            height: 50px;
            margin: 20px auto;
            font-family: "Quicksand", sans-serif;
            border: 1px solid white;
            border-radius: 20px;
            color: white;
            font-size: 18px;
            padding: 0 10px;
        }
        .btn {
            width: 120px;
            margin-top: 60px;
            font-family: "Quicksand", sans-serif;
            color: white;
            border-radius: 10px;
            border: 1px solid #fff;
            background-color: transparent;
            font-size: 20px;
        }
        .texto2{
            color: #fff;
    font-size: 18px; /* Ajuste o tamanho conforme necessário */
    margin-top: 15px; /* Ajusta a margem à esquerda */
    font-family: "Quicksand", sans-serif;

        }
        .texto2 a {
    color: inherit; /* Mantém a cor do texto */
    text-decoration: none; /* Remove o sublinhado padrão */
    font-weight: bold;

}

.texto2 a:hover {
    text-decoration: underline; 
}


        /* Media Queries */
        @media (max-width: 768px) {
            .form-container {
                width: 100%; /* Largura reduzida para telas menores */
                margin-top: 75px; /* Ajusta a margem superior */
                height: 93%;
            }
            h1 {
                font-size: 32px; /* Tamanho reduzido para o título */
            }
            h4 {
                font-size: 30px; /* Tamanho reduzido para o subtítulo */
            }
            input {
                width: 90%; /* Ajusta a largura dos inputs */
                height: 40px;
                font-size: 16px; /* Ajusta o tamanho da fonte dos inputs */
                border-radius: 15px;
            }
            .texto2 {
                font-size: 18px; /* Tamanho reduzido para o subtítulo */
            }
            .btn {
                font-size: 18px; /* Ajusta o tamanho da fonte do botão */
                width: 90px;
                height: 40px;
                margin-top: 50px;
                margin-bottom: 40px;
            }
            .btn-voltar {
            
            margin-left: -300px
            
        }
        }

        
    </style>
</head>

<body>

    <video class="video" autoplay muted loop>
        <source src="../img/iii.mp4" type="video/mp4">
    </video>

    <div class="container">
        <div class="form-container">
        <a class="btn-voltar" href="?p=home"><i class="bi bi-arrow-return-left"></i></a>
            <h1>Login Universos</h1>
            <h4>Bem Vindo Autores!</h4>

            <form class="form-signin" method="post">
                <label for="txtnome" class="sr-only">Nome</label>
                <input type="text" id="txtnome" placeholder="Nome" required autofocus name="txtnome">
                <label for="txtemail" class="sr-only">Email</label>
                <input type="email" id="txtemail" placeholder="Email" required name="txtemail">
                <label for="txtsenha" class="sr-only">Senha</label>
                <input type="password" id="txtsenha" placeholder="Senha" required name="txtsenha">

                <p class="texto2">Não tem login? Faça o cadastro <a class="texto2" href="?p=autor/salvar">clicando aqui</a> </p>
                <input type="submit" class="btn" name="btnlogar" value="Login">

            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            <?php if ($loginSuccess): ?>
                Swal.fire({
                    icon: 'success',
                    background: 'rgba(255, 255, 255, 1)',
                    iconColor: 'green',
                    text: '',
                    timer: 2000,
                    width: 200,
                    timerProgressBar: true,
                    showConfirmButton: false,
                    position: "center",
                    willClose: () => {
                        window.location.href = '?p=home';
                    }
                });
            <?php elseif (isset($errorMessage)): ?>
                Swal.fire({
                    icon: 'error',
                    title: 'Erro!',
                    text: '<?= $errorMessage ?>',
                    background: '#fff',
                    iconColor: 'rgba(128, 0, 0, 0.8)', /* Cor vinho para o ícone */
                    color: 'rgba(128, 0, 0, 1)', /* Cor vinho para o texto */
                    timer: 2000,
                    width: 300,

                    showConfirmButton: false,
                    position: "center",
                });
            <?php endif; ?>
        });
    </script>
</body>

</html>
