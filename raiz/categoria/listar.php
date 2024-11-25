<?php include_once 'navbar.php'; ?>

<?php
$colors = ['red', 'green', 'blue', 'outraCor', 'maisOutraCor']; // Adicione mais classes se necessário
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
<link href="https://fonts.googleapis.com/css2?family=Bad+Script&family=Caveat:wght@400..700&family=Edu+VIC+WA+NT+Beginner:wght@400..700&family=Josefin+Slab:ital,wght@0,100..700;1,100..700&family=Nanum+Gothic&family=Shadows+Into+Light&family=Shadows+Into+Light+Two&display=swap" rel="stylesheet">

<style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Quicksand', sans-serif;
            background-color: #000;
            color: #fff;
        }

        /* Main heading */
        h3 {
            margin-top: 35px;
            color: #fff;
            font-size: 60px;
            text-align: center;
            font-family: 'Caveat', cursive;
            text-shadow: -0.5px -0.5px 0 #000, 0.5px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;
        }

        /* Card Styles */
        .card {
            background-color: transparent;
            border: 2px rgba(255, 255, 255, 0.2);
            box-shadow: 0 0 5px rgba(255, 255, 255, 0.5);
            backdrop-filter: blur(15px);
            margin: 15px;
            
        }

        .card-body {
            padding: 15px;
        }

        .card-title {
            font-family: "Caveat", cursive;
            font-weight: bold;
            font-size: 25px;
        }

        .card-text {
            font-size: 16px;
        }

        #botaoLerMais {
            background-color: transparent;
            color: #fff;
            border: none;
            font-size: 14px;
            cursor: pointer;
            margin-top: 10px;
        }

        #botaoLerMais:hover {
            background-color: #f0f0f0;
            color: #000;
        }

        /* Flexbox for card layout */
        .row {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin-left: 10px
        }

        .col-md-4 {
            flex: 1 1 30%;
            margin-bottom: 20px;
        }

        

        .video {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            object-fit: cover;
            z-index: -1;
            filter: brightness(0.5);
        }

        .container {
            z-index: 1;
            position: relative;
            

        }

        #openChate{
            font-size: 18px;  
            color:#fff;
            background-color: transparent; 
            width: 140px; 
            height: 40px; 
            border: 2px solid #ffff; 
            border-radius: 10px;
            border: 2px rgba(255, 255, 255, 0.5); 
            box-shadow: 0 0 5px rgba(255, 255, 255, 1);
             backdrop-filter: blur(15px); 
             margin-top: 25px;
             position: absolute;
             margin-left: 800px;
        }

        /* Adicione isso ao final do seu CSS */
@media (max-width: 768px) {
    h3 {
        font-size: 40px; /* Reduz o tamanho do título */
    }

    /* Ajusta as colunas para ocuparem 100% da largura */
    .col-md-4 {
        flex: 1 1 100%; /* Ajusta para ocupar toda a largura em telas menores */
        margin-bottom: 15px;
    }

    
    #openChate {
        font-size: 16px;
        width: 120px; /* Deixa o botão com largura total */
        margin-left: 200px; /* Centraliza o botão */
        text-align: center;
        margin-top: -9px;
    }

    /* Ajusta o espaçamento e o alinhamento do conteúdo */
    .container2 {
        padding: 20px;
        margin-left: 30px
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

<body>
    <video class="video" autoplay muted loop>
        <source src="../img/esese.mp4" type="video/mp4">
    </video>
    <div class="container">
    
                <div class="container2">
                <a href="?p=categoria/salvar" class="btn" id="openChate">
                            <i class="bi bi-pencil-fill" style="margin-right: 2px"> Adicionar</i>
                        </a>
            <h3>Resenhas dos Livros</h3>
            <br><br>
            <div class="row">
                <?php
                include_once '../class/Categoria.php';
                $cat = new Categoria();
                $dados = $cat->listar(NULL);

                if (!empty($dados)) {
                    $colorIndex = 0;
                    foreach ($dados as $mostrar) {
                        $colorClass = $colors[$colorIndex % count($colors)];
                        $colorIndex++;
                ?>
                        <div class="col-md-4 mb-4">
                            <div class="card">
                                <div class="card-body <?= $colorClass ?>">
                                    <h5 class="card-title"><?= $mostrar['nome'] ?></h5>
                                    <div class="card-text" id="descricaoTexto">
                                        <?php
                                        $descricao = $mostrar['descricao'];
                                        $descricaoID = "descricaoMais" . $mostrar['id']; // ID único para cada descrição
                                        if (strlen($descricao) > 180) {
                                            echo substr($descricao, 0, 180) . '<span id="' . $descricaoID . '" style="display: none;">' . substr($descricao, 180) . '</span>';
                                            echo '<button id="botaoLerMais" onclick="mostrarMais(\'' . $descricaoID . '\', this)">Ler mais</button>';
                                        } else {
                                            echo $descricao;
                                        }
                                        ?>
                                    </div>
                                    <p class="card-text">
                                        <?php
                                        $fullStars = intval($mostrar['rating']);
                                        $emptyStars = 5 - $fullStars;

                                        for ($i = 0; $i < $fullStars; $i++) {
                                            echo '<i class="fas fa-star"></i>';
                                        }

                                        for ($i = 0; $i < $emptyStars; $i++) {
                                            echo '<i class="far fa-star"></i>';
                                        }
                                        ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                <?php
                    }
                }
                ?>
                <div id="chatContainer">
                    <div id="chatContent">
                        <iframe id="chatFrame" src="" frameborder="0" style="width:100%; height:100%;"></iframe>
                    </div>
                </div>
              
            </div>
        </div>
    </div>

    <script>
        function mostrarMais(descricaoID, botao) {
            var descricaoMais = document.getElementById(descricaoID);
            if (descricaoMais.style.display === "none") {
                descricaoMais.style.display = "inline";
                botao.innerHTML = "Ler menos";
            } else {
                descricaoMais.style.display = "none";
                botao.innerHTML = "Ler mais";
            }
        }
    </script>
</body>
</html>