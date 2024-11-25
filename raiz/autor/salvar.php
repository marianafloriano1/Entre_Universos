<?php
session_start();
$loginSuccess = false;
$errorMessage = '';
$alertType = '';

// Verifica se o botão de login foi pressionado
if (isset($_POST['btnsalvar'])) {
    $nome_autor = filter_input(INPUT_POST, 'txtnome', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'txtemail', FILTER_SANITIZE_EMAIL);
    $senha = filter_input(INPUT_POST, 'txtsenha', FILTER_SANITIZE_STRING);
    $verificar_senha = filter_input(INPUT_POST, 'txtverificar', FILTER_SANITIZE_STRING);

    // Verifica se as senhas correspondem
    if ($senha !== $verificar_senha) {
        $errorMessage = 'As senhas não correspondem!';
        $alertType = 'error';
    } else {
        include_once '../class/Autor.php';
        $user = new Autor();

        $user->setNome_autor($nome_autor);
        $user->setEmail(trim($email));
        $user->setSenha(trim($senha));

        // Consulta ao banco de dados
        if (count($user->consultar()) > 0) {
            $errorMessage = 'Usuário já cadastrado!';
            $alertType = 'error';
        } else {
            // Aqui você deve implementar a lógica para cadastrar o usuário
            $cadastroMessage = $user->salvar();
            if ($cadastroMessage === "Cadastrado") {
                $_SESSION['acesso'] = true;
                $loginSuccess = true;
                $alertType = 'success';
                $message = "Agora faça o login.";
            } else {
                $errorMessage = 'Erro ao cadastrar o usuário.';
                $alertType = 'error';
            }
        }
    }
}
?>


<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bad+Script&family=Caveat:wght@400..700&family=Edu+VIC+WA+NT+Beginner:wght@400..700&family=Josefin+Slab:ital,wght@0,100..700;1,100..700&family=Nanum+Gothic&family=Shadows+Into+Light&family=Shadows+Into+Light+Two&display=swap" rel="stylesheet">



    <style>
        body {
            font-family: "Quicksand", sans-serif;
            color: #fff;
            padding: 20px 20px;
            position: relative;
        }
        

        .video {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            object-fit: cover;
            z-index: -1;
        }

        .containerr {
            box-shadow: 0 0 15px rgba(0, 0, 0, 1);
            background-color: transparent;
            width: 80%;
            height: 800px;
            margin-top: 50px;
            margin-left: 200px;
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
        }

        form {
            width: 560px;
            margin-right: 200px;
            margin-bottom: 50px;
            height: 600px;
            border-radius: 15px;
            position: relative;
            z-index: 1;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            padding-bottom: 20px;
            margin-top: 10px;
            margin-right: 108px;
            background-color: transparent;
            backdrop-filter: blur(15px);
            box-shadow: 0 0 6px rgba(255, 255, 255, 0.5);

        }

        form::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;

            border-radius: 10px;
            z-index: -1;
            margin-top: 30px;
        }

        .form-control {
            background-color: transparent;
            border: solid 2px #fff;
            border-radius: 16px;
            width: 350px;
            height: 45px;
            margin-top: 15px;
            padding-right: 35px;
            /* Espaço para o ícone */
        }

        h1 {
            color: #fff;
            font-weight: bold;
            text-align: center;
            font-size: 32px;
            margin-top: 65px;
            font-family: "Caveat", cursive;
        }

        h2 {
            color: #fff;
            text-align: center;
            font-size: 32px;
            margin-top: 65px;
            font-family: "Quicksand", sans-serif;
        }

        .form-group i {
            position: absolute;
            right: 15px;
            top: 5px;
            cursor: pointer;
            color: #fff;
        }

        .form-group {
            position: relative;
            width: 100%;
            display: flex;
            justify-content: center;
        }

        .btn {
            color: #fff;
            position: relative;
            top: -8px;
            border: 1px solid #fff;
            height: 35px;
            text-align: center;
        }

        .btn:hover {
            color: #fff !important;
            
        }

        .texto {
            color: #fff;
            font-size: 90px;
            top: -250px;
            margin-left: 60px;
            position: relative;
            font-family: "Caveat", cursive;
            margin-bottom: 0;

        }

        .texto2 {
            color: #fff;
            font-size: 18px;
            position: absolute;
            margin-left: 60px;
            width: 700px;
            margin-top: -200px;
            font-family: "Quicksand", sans-serif;
        }
        
        .texto-mobile {
    display: none; /* Esconde por padrão */
}

        .botao {
            background-color: transparent;
            position: absolute;
            margin-top: 250px;
            margin-left: 210px;
            border-radius: 10px;
            color: #fff;
            border: 1px solid white;
            font-size: 15px;
        }

        .form-control::placeholder {
            color: #fff !important;
            font-size: 14px;
        }

        a {
    color: #fff; /* Cor normal do link */
    text-decoration: none; /* Remove o sublinhado */
    font-weight: bold; /* Deixa o texto em negrito */
}

a:hover {
    color: #fff; /* Cor branca quando passar o mouse */
    text-decoration: underline; /* Sublinha o link quando hover */
}

        input{
            color: #fff !important;
            background-color: transparent !important;
        }

        @media (max-width: 768px) {
    .containerr {
        flex-direction: column;
        height: 800px;
        width: 100%;
        margin-left: 0;
        margin-right: 0;
        margin-top: -7px;
        padding: 10px;
        justify-content: space-between;
        align-items: center;
        position: fixed;
        margin-left: -20px
    }
    

    form {
        width: 100%;
        margin: 0 auto;
        height: auto;
        padding: 20px;
        margin-bottom: 30px;
        margin-top: 60px;
        
    }

    .form-control {
        width: 90%;
        height: 45px;
        font-size: 1rem;
        border-radius: 15px;
    }

    .texto {
        font-size: 40px; 
        top: -20px; 
        margin-left: 20px; 
        display: block; 
    }

    .texto-mobile{
        display: block; 
        color: #fff; 
        font-size: 14px; 
        text-align: center; 
        margin-top: 20px; 
    }
}


 
        
    </style>
</head>

<body>
    <video class="video" autoplay muted loop>
        <source src="../img/iii.mp4" type="video/mp4">
    </video>

    <div class="containerr">
        <h1 class="texto">Bem Vindo Autores!!</h1>
        <h4 class="texto2">Para poder cadastrar os seus livros basta fazer o cadastro e efetuar o login. Estamos ansioso para conhecer as suas histórias!
        <br>Já tem o cadastro? Faça o login <a href="?p=login">clicando aqui</a></h4>
     
        <div class="texto-mobile">
             <h4 style="font-size: 18px; width: 290px">Já tem o cadastro? Faça o login <a href="?p=login">clicando aqui</a></p>
        </div>


        <form method="post" name="frmsalvar" id="frmsalvar">
            <h2>Cadastre-se</h2>

            <div class="form-group">
                <input type="text" class="form-control" id="txtnome" name="txtnome" placeholder="Digite seu nome completo" maxlength="80" minlength="3" value="<?= isset($codigo_autor) ? htmlspecialchars($nome_autor) : "" ?>" />

            </div>

            <div class="form-group">
                <input type="email" class="form-control" id="txtemail" name="txtemail" placeholder="Digite seu email" maxlength="80" minlength="3" value="<?= isset($codigo_autor) ? htmlspecialchars($email) : "" ?>" />
            </div>

            <div class="form-group">
                <input type="password" class="form-control" id="txtsenha" name="txtsenha" placeholder="Digite sua senha" maxlength="80" minlength="3" value="<?= isset($codigo_autor) ? htmlspecialchars($senha) : "" ?>" />

            </div>

            <div class="form-group">
                <input type="password" class="form-control" id="txtverificar" name="txtverificar" placeholder="Digite sua senha novamente" maxlength="80" minlength="3" value="<?= isset($codigo_autor) ? htmlspecialchars($verificar_senha) : "" ?>" />
            </div>

            <div class="text-center">
                <input type="submit" class="btn btn-<?= isset($codigo_autor) ? "success" : "" ?> m-3" name="<?= isset($codigo_autor) ? "btneditar" : "btnsalvar" ?>" value="<?= isset($codigo_autor) ? "Editar" : "Cadastrar!" ?>" />
                <a class="btn" href="?p=home"><i class="bi bi-arrow-return-left"></i></a>
               


            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            <?php if ($alertType === 'success'): ?>
                Swal.fire({
                    icon: 'success',
                    text: '<?= $message ?>',
                    background: '#fff',
                    iconColor: 'green',
                    timer: 2000,
                    timerProgressBar: true,
                    showConfirmButton: false,
                    position: "center",
                    width: 300,
                    willClose: () => {
                        window.location.href = '?p=login';
                    }
                });
            <?php elseif ($alertType === 'error'): ?>
                Swal.fire({
                    icon: 'error',
                    title: 'Erro!',
                    background: '#fff',
                    iconColor: 'rgba(128, 0, 0, 0.8)',
                    color: 'rgba(128, 0, 0, 1)',
                    text: '<?= $errorMessage ?>',
                    width: 300,
                    timer: 2000,
                    timerProgressBar: false,
                    position: "center",
                    showConfirmButton: false
                });
            <?php endif; ?>
        });
    </script>
</body>

</html>