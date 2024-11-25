<?php include_once 'navbar.php'; ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/responsiveHome.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">

    <style>
        body {
            margin: 0;
        }

        /* Estilo para centralizar o título do SweetAlert */
        .swal2-title.custom-swal-title {
            text-align: center;
            margin-left: 150px
        }

        .video {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -2;
            border: none;
        }

        .fundo1,
        .fundo2,
        .fundo3,
        .fundo4 {
            width: 100%;
            max-width: 1700px;
            border-radius: 10px;
            height: 460px;
            margin: 70px auto;
            position: relative;
            overflow: hidden;
            box-shadow: 0 0 6px rgba(255, 255, 255, 0.5);
            margin-left: 170px;
            z-index: 0;
        }


        .fundo1::before,
        .fundo2::before,
        .fundo3::before,
        .fundo4::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.1);
            box-shadow: 0 0 8px rgba(255, 255, 255, 1);
            opacity: 0.6;
            z-index: -1;
            border-radius: 10px;
        }

        .titulo1,
        .titulo3,
        .titulo4,
        .titulo2 {
            position: relative;
            margin-left: 40px;
            font-family: "Dancing Script", cursive;
            color: #fff;
            font-size: 40px;
            z-index: 1;
            margin-top: 10px;
        }


        .card-container {
            display: flex;
            justify-content: center;
            max-width: 1380px;
            gap: 20px;
            flex-wrap: wrap;
            margin: 0 auto;
        }

        .card {
            width: 230px;
            height: 350px;
            border-radius: 10px;
            overflow: hidden;
            padding: 20px;
            background: none;
            border: none;
            cursor: pointer;
            position: relative;
            margin-top: 30px;

        }

        .card img {
            width: 100%;
            height: 100%;
            cursor: pointer;
            border-radius: 9px;
            filter: brightness(50%);
            transition: filter 0.3s ease;
            margin-bottom: 20px;

        }

        .card img:hover {
            filter: brightness(80%);
        }

        @media (max-width: 480px) {

            .fundo1,
            .fundo2,
            .fundo3,
            .fundo4,
            .fundo5 {
                height: 260px;
                width: 320px;
                margin-left: 80px;
                margin-bottom: 0;
                top: 9px;
            }



            .titulo1,
            .titulo2,
            .titulo3,
            .titulo4 {
                font-size: 24px;
                margin-left: 10px;
            }

            .titulo2 {
                font-size: 20px;
            }

            .card {
                width: 125px;
                height: auto;
                margin-top: 20px;
            }

            .navbar {
                position: fixed;
                top: 0;
                left: 0;
                z-index: 9999;
            }
        }

        .custom-swal-popup {
            width: 900px;
            max-width: 90%;
            padding: 10px;
            height: auto;
            background-color: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(15px);
        }

        .livro-detalhes {
            display: flex;
            align-items: flex-start;
        }

        .livro-detalhes img {
            width: 200px;
            height: auto;
            margin-right: 20px;
        }

        .sinopse-container {
            flex: 1;
            font-size: 19px;
            font-family: 'Quicksand', sans-serif;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            padding: 10px;
        }

        @media (max-width: 768px) {
            .sinopse-container {
                overflow-y: auto;
                max-height: 200px;
            }

            .navbar {
                position: fixed;
                top: 0;
                left: 0;
                z-index: 9999;
            }
        }

        .sinopse-conteudo {
            font-size: 17px;
            text-align: justify;
            width: 100%;
            font-family: 'Quicksand', sans-serif;
            margin: 0;
        }

        .link-direita {
            color: #304878;
            text-decoration: none;
            margin-top: 20px;
            font-family: 'Quicksand', sans-serif;
            border-bottom: 2px solid #304878;
            padding-bottom: 50px;
        }

        @media (max-width: 768px) {
            .livro-detalhes {
                flex-direction: column;
                align-items: center;
            }

            .livro-detalhes img {
                margin-right: 0;
                margin-left: 0;
                margin-bottom: 20px;
            }

            .sinopse-container {
                margin-right: 0;
                overflow-y: auto;
            }

            .carousel-control-prev,
            .carousel-control-next {
                display: block;
                margin-top: 80px
            }

            .navbar {
                position: fixed;
                top: 0;
                left: 0;
                z-index: 9999;
            }
        }
    </style>
</head>

<body style="background-color:#e8e8e8;">
    <video class="video" autoplay muted loop>
        <source src="../img/home1.mp4" type="video/mp4">
        Seu navegador não suporta o elemento de vídeo.
    </video>

    <div class="fundo1" role="banner">
        <h1 class="titulo1" id="relíquias2024">Lançamentos de 2024</h1>
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <?php
                include_once '../class/Livro.php';

                $livro = new Livro();
                $livros = $livro->listar();

                if (is_array($livros) && count($livros) > 0) {
                    $chunks = array_chunk($livros, 5); // Divide os livros em grupos de 3
                    foreach ($chunks as $index => $chunk) {
                        $activeClass = $index === 0 ? 'active' : '';
                        echo '<div class="carousel-item ' . $activeClass . '">';
                        echo '<div class="card-container">';
                        foreach ($chunk as $livro) {
                            $imgSrc = !empty($livro['imagem']) ? '../img/' . htmlspecialchars($livro['imagem'], ENT_QUOTES, 'UTF-8') : 'caminho/para/imagem/placeholder.jpg';
                            $sinopse = !empty($livro['sinopse']) ? htmlspecialchars($livro['sinopse'], ENT_QUOTES, 'UTF-8') : 'Sinopse não disponível';
                            $link = !empty($livro['link']) ? htmlspecialchars($livro['link'], ENT_QUOTES, 'UTF-8') : '#';

                            echo '<div class="card" role="button" tabindex="0" aria-label="Detalhes do livro ' . htmlspecialchars($livro['titulo_livro'], ENT_QUOTES, 'UTF-8') . '" onclick="mostrarDetalhes(`' . addslashes($livro['imagem']) . '`, `' . addslashes($livro['sinopse']) . '`, `' . addslashes($livro['link']) . '`, `' . htmlspecialchars($livro['titulo_livro'], ENT_QUOTES, 'UTF-8') . '`)">';
                            echo '<img src="' . $imgSrc . '" alt="' . htmlspecialchars($livro['titulo_livro'], ENT_QUOTES, 'UTF-8') . '">';
                            echo '</div>';
                        }
                        echo '</div>';
                        echo '</div>';
                    }
                } else {
                    echo "<p>Nenhum livro encontrado.</p>";
                }
                ?>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Próximo</span>
            </a>
        </div>
    </div>

    <div class="fundo2" role="banner">
        <h1 class="titulo1" id="livros14">Livros para +14</h1>
        <div id="carouselLivros14" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <?php
                // Código para os livros para +14
                $livro = new Livro();
                $livros = $livro->listarr(); // Lista todos os livros para +14

                if (is_array($livros) && count($livros) > 0) {
                    $chunks = array_chunk($livros, 5); // Divide os livros em grupos de 3
                    foreach ($chunks as $index => $chunk) {
                        $activeClass = $index === 0 ? 'active' : '';
                        echo '<div class="carousel-item ' . $activeClass . '">';
                        echo '<div class="card-container">';
                        foreach ($chunk as $livro) {
                            $imgSrc = !empty($livro['imagem']) ? '../img/' . htmlspecialchars($livro['imagem'], ENT_QUOTES, 'UTF-8') : 'caminho/para/imagem/placeholder.jpg';
                            $sinopse = !empty($livro['sinopse']) ? htmlspecialchars($livro['sinopse'], ENT_QUOTES, 'UTF-8') : 'Sinopse não disponível';
                            $link = !empty($livro['link']) ? htmlspecialchars($livro['link'], ENT_QUOTES, 'UTF-8') : '#';

                            echo '<div class="card" role="button" tabindex="0" aria-label="Detalhes do livro ' . htmlspecialchars($livro['titulo_livro'], ENT_QUOTES, 'UTF-8') . '" onclick="mostrarDetalhes(`' . addslashes($livro['imagem']) . '`, `' . addslashes($livro['sinopse']) . '`, `' . addslashes($livro['link']) . '`, `' . htmlspecialchars($livro['titulo_livro'], ENT_QUOTES, 'UTF-8') . '`)">';
                            echo '<img src="' . $imgSrc . '" alt="' . htmlspecialchars($livro['titulo_livro'], ENT_QUOTES, 'UTF-8') . '">';
                            echo '</div>';
                        }
                        echo '</div>';
                        echo '</div>';
                    }
                } else {
                    echo "<p>Nenhum livro encontrado.</p>";
                }
                ?>
            </div>
            <a class="carousel-control-prev" href="#carouselLivros14" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#carouselLivros14" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Próximo</span>
            </a>
        </div>
    </div>

    <div class="fundo3" role="banner">
        <h1 class="titulo3" id="livrosterror">Livros de Terror</h1>
        <div id="carouselLivrosterror" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <?php
                // Código para os livros subgenero terror
                $livro = new Livro();
                $livros = $livro->listarrr(); // Lista todos os livros subgenero terror

                if (is_array($livros) && count($livros) > 0) {
                    $chunks = array_chunk($livros, 5); // Divide os livros em grupos de 3
                    foreach ($chunks as $index => $chunk) {
                        $activeClass = $index === 0 ? 'active' : '';
                        echo '<div class="carousel-item ' . $activeClass . '">';
                        echo '<div class="card-container">';
                        foreach ($chunk as $livro) {
                            $imgSrc = !empty($livro['imagem']) ? '../img/' . htmlspecialchars($livro['imagem'], ENT_QUOTES, 'UTF-8') : 'caminho/para/imagem/placeholder.jpg';
                            $sinopse = !empty($livro['sinopse']) ? htmlspecialchars($livro['sinopse'], ENT_QUOTES, 'UTF-8') : 'Sinopse não disponível';
                            $link = !empty($livro['link']) ? htmlspecialchars($livro['link'], ENT_QUOTES, 'UTF-8') : '#';

                            echo '<div class="card" role="button" tabindex="0" aria-label="Detalhes do livro ' . htmlspecialchars($livro['titulo_livro'], ENT_QUOTES, 'UTF-8') . '" onclick="mostrarDetalhes(`' . addslashes($livro['imagem']) . '`, `' . addslashes($livro['sinopse']) . '`, `' . addslashes($livro['link']) . '`, `' . htmlspecialchars($livro['titulo_livro'], ENT_QUOTES, 'UTF-8') . '`)">';
                            echo '<img src="' . $imgSrc . '" alt="' . htmlspecialchars($livro['titulo_livro'], ENT_QUOTES, 'UTF-8') . '">';
                            echo '</div>';
                        }
                        echo '</div>';
                        echo '</div>';
                    }
                } else {
                    echo "<p>Nenhum livro encontrado.</p>";
                }
                ?>
            </div>
            <a class="carousel-control-prev" href="#carouselLivrosterror" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#carouselLivrosterror" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Próximo</span>
            </a>
        </div>
    </div>

    <div class="fundo4" role="banner">
        <h1 class="titulo4" id="livros13">Livros para Crianças</h1>
        <div id="carouselLivros13" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <?php
                // Código para os livros kids
                $livro = new Livro();
                $livros = $livro->listarrrr(); // Lista todos os livros kids

                if (is_array($livros) && count($livros) > 0) {
                    $chunks = array_chunk($livros, 5); // Divide os livros em grupos de 3
                    foreach ($chunks as $index => $chunk) {
                        $activeClass = $index === 0 ? 'active' : '';
                        echo '<div class="carousel-item ' . $activeClass . '">';
                        echo '<div class="card-container">';
                        foreach ($chunk as $livro) {
                            $imgSrc = !empty($livro['imagem']) ? '../img/' . htmlspecialchars($livro['imagem'], ENT_QUOTES, 'UTF-8') : 'caminho/para/imagem/placeholder.jpg';
                            $sinopse = !empty($livro['sinopse']) ? htmlspecialchars($livro['sinopse'], ENT_QUOTES, 'UTF-8') : 'Sinopse não disponível';
                            $link = !empty($livro['link']) ? htmlspecialchars($livro['link'], ENT_QUOTES, 'UTF-8') : '#';

                            echo '<div class="card" role="button" tabindex="0" aria-label="Detalhes do livro ' . htmlspecialchars($livro['titulo_livro'], ENT_QUOTES, 'UTF-8') . '" onclick="mostrarDetalhes(`' . addslashes($livro['imagem']) . '`, `' . addslashes($livro['sinopse']) . '`, `' . addslashes($livro['link']) . '`, `' . htmlspecialchars($livro['titulo_livro'], ENT_QUOTES, 'UTF-8') . '`)">';
                            echo '<img src="' . $imgSrc . '" alt="' . htmlspecialchars($livro['titulo_livro'], ENT_QUOTES, 'UTF-8') . '">';
                            echo '</div>';
                        }
                        echo '</div>';
                        echo '</div>';
                    }
                } else {
                    echo "<p>Nenhum livro encontrado.</p>";
                }
                ?>
            </div>
            <a class="carousel-control-prev" href="#carouselLivros13" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#carouselLivros13" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Próximo</span>
            </a>
        </div>
    </div>

    <div class="fundo4" role="banner">
        <h1 class="titulo4" id="livros18">Livros para +18</h1>
        <div id="carouselLivros18" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <?php
                // Código para os livros kids
                $livro = new Livro();
                $livros = $livro->listarrrr18(); // Lista todos os livros kids

                if (is_array($livros) && count($livros) > 0) {
                    $chunks = array_chunk($livros, 5); // Divide os livros em grupos de 3
                    foreach ($chunks as $index => $chunk) {
                        $activeClass = $index === 0 ? 'active' : '';
                        echo '<div class="carousel-item ' . $activeClass . '">';
                        echo '<div class="card-container">';
                        foreach ($chunk as $livro) {
                            $imgSrc = !empty($livro['imagem']) ? '../img/' . htmlspecialchars($livro['imagem'], ENT_QUOTES, 'UTF-8') : 'caminho/para/imagem/placeholder.jpg';
                            $sinopse = !empty($livro['sinopse']) ? htmlspecialchars($livro['sinopse'], ENT_QUOTES, 'UTF-8') : 'Sinopse não disponível';
                            $link = !empty($livro['link']) ? htmlspecialchars($livro['link'], ENT_QUOTES, 'UTF-8') : '#';

                            echo '<div class="card" role="button" tabindex="0" aria-label="Detalhes do livro ' . htmlspecialchars($livro['titulo_livro'], ENT_QUOTES, 'UTF-8') . '" onclick="mostrarDetalhes(`' . addslashes($livro['imagem']) . '`, `' . addslashes($livro['sinopse']) . '`, `' . addslashes($livro['link']) . '`, `' . htmlspecialchars($livro['titulo_livro'], ENT_QUOTES, 'UTF-8') . '`)">';
                            echo '<img src="' . $imgSrc . '" alt="' . htmlspecialchars($livro['titulo_livro'], ENT_QUOTES, 'UTF-8') . '">';
                            echo '</div>';
                        }
                        echo '</div>';
                        echo '</div>';
                    }
                } else {
                    echo "<p>Nenhum livro encontrado.</p>";
                }
                ?>
            </div>
            <a class="carousel-control-prev" href="#carouselLivros18" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#carouselLivros18" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Próximo</span>
            </a>
        </div>
    </div>

    <div class="fundo4" role="banner">
        <h1 class="titulo4" id="livrosromance">Livros de Romance</h1>
        <div id="carouselLivrosromance" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <?php
                // Código para os livros kids
                $livro = new Livro();
                $livros = $livro->listarrrra(); // Lista todos os livros kids

                if (is_array($livros) && count($livros) > 0) {
                    $chunks = array_chunk($livros, 5); // Divide os livros em grupos de 3
                    foreach ($chunks as $index => $chunk) {
                        $activeClass = $index === 0 ? 'active' : '';
                        echo '<div class="carousel-item ' . $activeClass . '">';
                        echo '<div class="card-container">';
                        foreach ($chunk as $livro) {
                            $imgSrc = !empty($livro['imagem']) ? '../img/' . htmlspecialchars($livro['imagem'], ENT_QUOTES, 'UTF-8') : 'caminho/para/imagem/placeholder.jpg';
                            $sinopse = !empty($livro['sinopse']) ? htmlspecialchars($livro['sinopse'], ENT_QUOTES, 'UTF-8') : 'Sinopse não disponível';
                            $link = !empty($livro['link']) ? htmlspecialchars($livro['link'], ENT_QUOTES, 'UTF-8') : '#';

                            echo '<div class="card" role="button" tabindex="0" aria-label="Detalhes do livro ' . htmlspecialchars($livro['titulo_livro'], ENT_QUOTES, 'UTF-8') . '" onclick="mostrarDetalhes(`' . addslashes($livro['imagem']) . '`, `' . addslashes($livro['sinopse']) . '`, `' . addslashes($livro['link']) . '`, `' . htmlspecialchars($livro['titulo_livro'], ENT_QUOTES, 'UTF-8') . '`)">';
                            echo '<img src="' . $imgSrc . '" alt="' . htmlspecialchars($livro['titulo_livro'], ENT_QUOTES, 'UTF-8') . '">';
                            echo '</div>';
                        }
                        echo '</div>';
                        echo '</div>';
                    }
                } else {
                    echo "<p>Nenhum livro encontrado.</p>";
                }
                ?>
            </div>
            <a class="carousel-control-prev" href="#carouselLivrosromance" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#carouselLivrosromance" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Próximo</span>
            </a>
        </div>
    </div>

    <script>
        function mostrarDetalhes(imagem, sinopse, link, titulo) {
            // Bloqueia o scroll da página enquanto o modal estiver aberto
            document.body.style.overflow = 'hidden';
            document.documentElement.style.overflow = 'hidden'; // Bloqueia também o scroll no html

            Swal.fire({
    title: titulo,
    html: `<div class="livro-detalhes">
                <img src="../img/${imagem}" alt="Imagem do Livro">
                <div class="sinopse-container">
                    <strong>Sinopse:</strong>
                    <div class="sinopse-conteudo">${sinopse}</div>
                </div>
            </div>`,
    footer: `<a href="${link}" target="_blank" class="link-direita" style="outline: none !important; text-decoration: none !important; font-size: 20px; color: #007bff; border: none; text-decoration: none !important;">
                Saiba mais do livro clicando aqui
            </a>`,
    showConfirmButton: false,
    showCloseButton: true,
    customClass: {
        popup: 'custom-swal-popup',
        title: 'custom-swal-title' // A classe personalizada para o título
    },
    didOpen: () => {
        // Certifique-se de que o scroll ainda está desabilitado durante o modal
        document.body.style.overflow = 'hidden';
        document.documentElement.style.overflow = 'hidden';
    },
    willClose: () => {
        // Restaura o scroll da página após o fechamento do modal
        document.body.style.overflow = '';
        document.documentElement.style.overflow = ''; // Restaura o scroll do html
    }
});


            // Remover outline, box-shadow, border e qualquer estilo de foco no link
            const style = document.createElement('style');
            style.innerHTML = `
        .swal2-footer a:focus, .swal2-footer a:active {
            outline: none !important;
            box-shadow: none !important;
            border: none !important;
        }

        /* Forçar a centralização e ajuste do título */
        @media (max-width: 768px) {
            .swal2-title.custom-swal-title {
                font-size: 18px !important; /* Ajuste o tamanho como preferir */
                display: block !important; /* Garante que o título se comporte como bloco */
                text-align: center !important; /* Centraliza o texto */
                margin: 0 auto !important; /* Adiciona margem automática para centralizar */
            }
        }
    `;
            document.head.appendChild(style);
        }
    </script>
</body>

</html>