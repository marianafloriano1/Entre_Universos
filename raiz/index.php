<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php include_once 'cabecalho.php'; ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../img/libros.png" type="image/png">
    <!-- Incluindo o CSS do Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Estilos do botão de acessibilidade */
        .accessibility-btn {
            position: fixed;
            top: 120px;
            right: 0; 
            background: rgba(255, 255, 255, 0.4);
            color: white;
            padding: 10px;
            box-shadow: 0 0 6px rgba(255, 255, 255, 0.5);
            cursor: pointer;
            z-index: 9999;
            transition: background-color 0.3s, transform 0.3s; 
            border-radius: 100%;
            height: 50px;
            width: 50px;
        }

        .accessibility-btn:hover {
            background-color: transparent; 
            transform: scale(1.1); 
        }

        .accessibility-btn svg {
            width: 30px;
            height: 30px;
            fill: white;
        }

        /* Estilos do menu de acessibilidade */
        .accessibility-menu {
            position: fixed;
            top: 145px; 
            right: 5px; 
            background-color: rgba(0, 0, 0, 0.7); 
            color: white;
            border-radius: 12px;
            padding: 15px;
            display: none;
            z-index: 9998;
            width: 250px;
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.2); 
            opacity: 0;
            transform: translateX(100%);
            transition: opacity 0.3s ease, transform 0.3s ease-in-out;
        }

        .accessibility-menu.show {
            display: block;
            opacity: 1;
            transform: translateX(0); 
        }

        .accessibility-menu button {
            background-color: transparent;
            color: white;
            border: 1px solid white;
            padding: 12px;
            border-radius: 8px;
            width: 100%;
            margin-bottom: 10px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        .accessibility-menu button:hover {
            background-color: rgba(255, 255, 255, 0.3);
        }

        .accessibility-menu button:focus {
            outline: none;
        }

        /* Estilos para os filtros de contraste e daltonismo */
        .increase-contrast {
            filter: contrast(150%) !important;
        }

        .protanopia {
            filter: contrast(1) saturate(0.5) hue-rotate(-10deg);
        }

        .deuteranopia {
            filter: contrast(1) saturate(0.5) hue-rotate(90deg);
        }

        .tritanopia {
            filter: contrast(1) saturate(0.5) hue-rotate(180deg);
        }

    </style>
    <title>Seu Site</title>
</head>

<body>

    <div class="container<?php echo (empty($pagina) || $pagina == "index") ? '-fluid' : ''; ?>">
        <div class="row mt-3">
            <?php
                $pagina = filter_input(INPUT_GET, 'p');
                
                if (empty($pagina) || $pagina == "index") {
                    include_once 'primeira.php';
                } else {
                    if (file_exists($pagina . '.php')) {
                        include_once $pagina . '.php';
                    } else {
                        ?>
                        <div class="alert alert-danger" role="alert">
                            Erro 404, página não encontrada!
                        </div>
                        <?php
                    }
                }
            ?>
        </div>
    </div>

    <!-- Botão de Acessibilidade -->
    <div class="accessibility-btn" onclick="toggleMenu()">
        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368">
            <path d="M480-720q-33 0-56.5-23.5T400-800q0-33 23.5-56.5T480-880q33 0 56.5 23.5T560-800q0 33-23.5 56.5T480-720ZM360-80v-520q-60-5-122-15t-118-25l20-80q78 21 166 30.5t174 9.5q86 0 174-9.5T820-720l20 80q-56 15-118 25t-122 15v520h-80v-240h-80v240h-80Z"/>
        </svg>
    </div>

    <!-- Menu de Acessibilidade -->
    <div class="accessibility-menu" id="accessibilityMenu">
        <button onclick="increaseFontSize()">Aumentar Fonte</button>
        <button onclick="decreaseFontSize()">Diminuir Fonte</button>
        <button onclick="toggleContrast()">Ajustar Contraste</button>
        <button onclick="applyProtanopia()">Protanopia</button>
        <button onclick="applyDeuteranopia()">Deuteranopia</button>
        <button onclick="applyTritanopia()">Tritanopia</button>
        <button onclick="resetAccessibility()">Restaurar</button>
        <button onclick="toggleFreezeVideo()">Congelar Fundo</button>
    </div>

    <?php include_once 'plugins.php'; ?>
    <!-- Incluindo o jQuery e o Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        // Exibe ou oculta o menu de acessibilidade
        function toggleMenu() {
            var menu = document.getElementById('accessibilityMenu');
            menu.classList.toggle('show');
        }

        // Variável global para o tamanho da fonte
        var fontSize = 100;

        // Aumenta ou diminui o tamanho da fonte para todos os elementos especificados e qualquer elemento com um ID
function adjustFontSize(sizeChange) {
    // Seleciona h1, h2, h3, h4, h5, h6, p, a e todos os elementos com IDs
    const elements = document.querySelectorAll('h1, h2, h3, h4, h5, h6, p, a, [id]');
    
    elements.forEach(el => {
        let currentSize = window.getComputedStyle(el).fontSize;
        let newSize = parseFloat(currentSize) + sizeChange;
        el.style.fontSize = newSize + 'px';
    });
}

// Função para aumentar o tamanho da fonte
function increaseFontSize() {
    adjustFontSize(2); // Aumenta 2px para todos os elementos
}

// Função para diminuir o tamanho da fonte
function decreaseFontSize() {
    adjustFontSize(-2); // Diminui 2px para todos os elementos
}

// Função para redefinir o tamanho da fonte para o padrão
function resetFontSize() {
    const elements = document.querySelectorAll('h1, h2, h3, h4, h5, h6, p, a, [id]');
    elements.forEach(el => {
        el.style.fontSize = ''; // Remove estilo inline para restaurar o padrão do CSS
    });
}


        // Ajusta o contraste
        function toggleContrast() {
            document.body.classList.toggle('increase-contrast');
        }

        // Aplica o filtro de Protanopia
        function applyProtanopia() {
            resetFilters();
            document.body.classList.add('protanopia');
        }

        // Aplica o filtro de Deuteranopia
        function applyDeuteranopia() {
            resetFilters();
            document.body.classList.add('deuteranopia');
        }

        // Aplica o filtro de Tritanopia
        function applyTritanopia() {
            resetFilters();
            document.body.classList.add('tritanopia');
        }

        // Remove todos os filtros de daltonismo
        function resetFilters() {
            document.body.classList.remove('protanopia', 'deuteranopia', 'tritanopia');
        }

        // Restaura a acessibilidade ao estado normal
        function resetAccessibility() {
            resetFilters();
            document.body.classList.remove('increase-contrast');
            resetFontSize();
        }
// Variável para controlar o estado do vídeo
let isVideoFrozen = false;

// Alterna entre congelar e descongelar o vídeo
function toggleFreezeVideo() {
    const video = document.querySelector('video'); // Seleciona o vídeo na página
    if (video) {
        isVideoFrozen = !isVideoFrozen;
        if (isVideoFrozen) {
            video.pause(); // Pausa o vídeo para "congelá-lo"
            video.classList.add('frozen'); // Aplica o estilo de vídeo congelado
        } else {
            video.play(); // Retoma a reprodução do vídeo
            video.classList.remove('frozen'); // Remove o estilo de vídeo congelado
        }
    } else {
        alert('Nenhum vídeo encontrado na página!');
    }
}


    </script>
</body>

</html>
