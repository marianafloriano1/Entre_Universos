<?php
session_start();


?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
    <link rel="stylesheet" href="../css/responsiveNav.css">
    <style>
        body {
            color: black;
            background-color: white;
            margin: 0;
            padding: 0;
        }

        .navbar {
            position: fixed;
            left: 0;
            bottom: 0;
            background: rgba(255, 255, 255, 0.1);
            width: 100%;
            transition: width 0.3s linear;
            text-decoration: none;
            box-shadow: 0 0 6px rgba(255, 255, 255, 0.6);
            border-top-right-radius: 20px;
            border-bottom-right-radius: 30px;
            margin-top: 15px;
        }

        .navbar-nav {
            display: flex;
            height: 100%;
        }

        .nav-item {
            width: 100%;
            height: 150px;
        }

        .nav-link {
            display: flex;
            align-items: center;
            height: 35px;
            transition: var(--transition-speed);
            color: #fff;
        }

        .nav-link i {
            font-size: 1.5rem;
            cursor: pointer;
        }

        .logo {
            text-decoration: none;
            display: flex;
            align-items: center;
            margin-top: 20px;
        }

        .logo-img {
            width: 42px;
            transition: transform 0.3s ease;
            margin-right: 15px;
        }

        .logo,
        .logo:link,
        .logo:visited,
        .logo:hover,
        .logo:active {
            text-decoration: none;
            color: inherit;
        }

        .link-texte {
            font-size: 1.5rem;
            color: #fff;
            transition: transform 0.3s ease;
        }

        .logo:hover .logo-img,
        .logo:hover .link-texte {
            transform: scale(1.4);
        }

        .navbar:hover {
            width: 180px;
        }

        .navbar:hover .link-text {
            display: inline;
        }

        @media (max-width: 480px) {
            .navbar {
                top: 0;
                width: 60px;
                overflow: hidden;
                position: fixed;
                transition: width 0.3s ease;
            }

            .navbar:hover {
                width: 145px;
                background-color: rgba(255, 255, 255, 0.1);
                backdrop-filter: blur(15px);
            }

            .link-text {
                display: none;
                margin-left: 10px;
            }

            .navbar:hover .link-text {
                display: inline;
                color: #fff;
            }

            .nav-item:hover .nav-link {
                background-color: #fff;
                border-radius: 5px;
                width: 119px;
                height: 45px;
                padding-left: 5px;
            }

            .nav-item:hover .nav-link .bi-journal-check,
            .nav-item:hover .nav-link .bi-chat-left-text,
            .nav-item:hover .nav-link .bi-person,
            .nav-item:hover .nav-link .bi-book,
            .nav-item:hover .nav-link .bi-box-arrow-left,
            .nav-item:hover .nav-link .link-text {
                color: black;
            }
            
        }

        @media only screen and (min-width: 100px) {
            .navbar {
                top: 0;
                width: 60px;
                overflow: hidden;
            }

            .navbar:hover {
                width: 145px;
            }

            .navbar:hover .link-text {
                display: inline;
                color: #fff;
            }
        }

        .link-text {
            display: none;
            margin-left: 10px;
        }

        .navbar:hover .link-text {
            display: inline;
        }

        .nav-item:hover .nav-link {
            background-color: #fff;
            border-radius: 5px;
            width: 119px;
            height: 45px;
            padding-left: 5px;
        }

        .nav-item:hover .nav-link .bi-journal-check,
        .nav-item:hover .nav-link .bi-chat-left-text,
        .nav-item:hover .nav-link .bi-person,
        .nav-item:hover .nav-link .bi-book,
        .nav-item:hover .nav-link .bi-box-arrow-left,

        .nav-item:hover .nav-link .link-text {
            color: black;
        }

        .custom-popup {
    z-index: 9999; /* Valor alto para garantir que o modal fique sobre outros elementos */
}
    </style>
</head>

<body>

<nav class="navbar">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="logo" href="?p=home">
                <img src="../img/libros.png" alt="logo" class="logo-img">
                <span class="link-texte" style="font-size: 1.5rem; color: #fff;">E.U.</span>
            </a>
        </li>
        
        <li class="nav-item">
            <a href="?p=quiz" class="nav-link">
                <i class="bi bi-journal-check"></i>
                <span class="link-text">Quiz</span>
            </a>
        </li>

        <li class="nav-item">
            <a href="?p=categoria/listar" class="nav-link">
                <i class="bi bi-chat-left-text"></i>
                <span class="link-text">Resenhas</span>
            </a>
        </li>

        <!-- Verifica se o usuário está logado e mostra o item de Autor -->
        <?php if (isset($_SESSION['acesso'])): ?>
            
            <li class="nav-item">
                <a href="?p=livro/consultar" class="nav-link">
                    <i class="bi bi-book"></i>
                    <span class="link-text">Cadastrar</span>
                </a>
            </li>

            <li class="nav-item" >
    
</li>



            <li class="nav-item">
            <a style="color: white; font-size: 20px; margin-left:10px">
        <i class="bi bi-person-check-fill" ></i>
        <span class="link-text" style="font-size: 17px;"><?php echo $_SESSION['nome_autor']; ?></span>
    </a>
                <a href="logout.php" class="nav-link" style="margin-top:10px;"  >
                    <i class="bi bi-box-arrow-left"></i>
                    <span class="link-text">Sair</span>
                </a>
            </li>
        <?php else: ?>
            <li class="nav-item" id="autor-item">
                <a href="#" class="nav-link" id="autor">
                    <i class="bi bi-person"></i>
                    <span class="link-text">Login</span>
                </a>
            </li>
        <?php endif; ?>
    </ul>
</nav>

<script>
    document.getElementById('autor').addEventListener('click', function(event) {
        event.preventDefault();
        Swal.fire({
            title: 'AVISO',
            text: 'Essa aba é apenas para autores. Você é autor?',
            icon: 'warning',
            confirmButtonText: 'SIM',
            showCancelButton: true,
            cancelButtonText: 'NÃO',
            backdrop: 'rgba(163, 163, 163, 0.8)',
            iconColor: '#be2929',
            confirmButtonColor: 'grey',
            cancelButtonColor: 'grey',
            position: 'top',
            width: 400,
            customClass: {
        popup: 'custom-popup'  // Adiciona uma classe customizada para o popup
    }
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = "?p=login";
            } else if (result.dismiss === Swal.DismissReason.cancel) {
                window.location.href = "?p=home";
            }
        });
    });
</script>

</body>
</html>
