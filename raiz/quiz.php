<?php include_once 'navbar.php'; ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Quiz</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bad+Script&family=Caveat:wght@400..700&family=Edu+VIC+WA+NT+Beginner:wght@400..700&family=Josefin+Slab:ital,wght@0,100..700;1,100..700&family=Nanum+Gothic&family=Shadows+Into+Light&family=Shadows+Into+Light+Two&display=swap" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
    <style>
    body {
       
      background-color: #51215b;
   width: 100%;
   height: 100%;
   font-family: "Quicksand", sans-serif;

    background: linear-gradient(to right, rgba(0, 0, 0, 0.9), rgba(0, 0, 0, 0.6), transparent), #51215b url(../img/cabrito.png);

    }

    .cor1 {
        background-color: #6a1f59;
        background-image: linear-gradient(to left, rgba(0, 0, 0, 0.9), rgba(0, 0, 0, 0.6), transparent), #6a1f59 url(../img/cabrito.png);

        
    }

    .cor2 {
        background-color: #432561;
    }

    .cor3 {
        background-color: #2f6d83;
    }

    .background-img {
        background-color: transparent;
        padding: 5px;
        width: 280px;
        height: 180px;
        margin: 5px;
        border-radius: 10px;
        overflow: hidden;
        position: relative;
        object-fit: cover;
        transform: scale(1.0); 
    
    }

    .background-img1 {
        background-color: transparent;
        padding: 5px;
        width: 300px;
        height: 200px;
        margin: 5px;
        border-radius: 10px;
        overflow: hidden;
        position: relative;
        object-fit: cover;
        transform: scale(1.0); 
    
    }

    .background-img2 {
        background-color: transparent;
        padding: 5px;
        width: 320px;
        height: 220px;
        margin: 5px;
        border-radius: 10px;
        overflow: hidden;
        position: relative;
        object-fit: cover;
        transform: scale(1.0); 
    
    }


    

    #imagensLivros {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 30px;  /* Aumente o espaçamento entre as imagens */
    perspective: 2000px;  /* Aumente a perspectiva para um efeito mais forte */
    margin-top: 50px;  /* Aumente a margem superior para mais espaçamento */
    padding: 20px;
    overflow: hidden;  /* Esconde qualquer parte da imagem que ultrapasse o carrossel */
}

.imagemLivro {
    width: 300px;  /* Aumenta o tamanho das imagens */
    height: 400px;
    object-fit: cover;
    transition: transform 0.5s ease-in-out;  /* Animação suave */
    cursor: pointer;
    transform-style: preserve-3d;
    border-radius: 15px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
}

.imagemLivro:hover {
    transform: rotateY(25deg); /* Efeito de rotação ao passar o mouse */
}


    .respostaBotao {
        background-color: transparent;
        margin-left: 70px;
        display: flexbox;
        flex-direction: column;
        align-items: center;
        margin-bottom: 40px;
        margin: top 7px;
        border: none;
    }

    .legenda {
        font-size: 22px;
        text-align: center;
        margin-top: 10px;
        color: transparent;
        font-weight: bold;
        font-family: system-ui;
        margin-left: 20px;
        margin-bottom: 5px;
    }

    #pergunta {
        color: #fff;
        text-shadow: -1px -1px 0 #565656;
        font-size: 85px;
        margin-top: 40px;
        font-family: "Caveat", cursive;
    }

    .livro-imagem {
        border-radius: 0;
        width: 150px;
        height: 220px;
        margin: 10px;
    }

    .quadrado {
        position: relative;
        width: 1250px;
        height: 100%;
        background-color: none;
        border-radius: 50px;
        border: none;
    
    }

    #progresso {
        position: relative;
        top: -18px;
        left: 50%;
        transform: translateX(-50%);
        font-size: 34px;
        color: #fff;
        text-align: center;
        background-color: transparent;
        width: 350px;
        height: 50px;
        font-family: "Caveat", cursive;
        z-index: 1;
        border-bottom: 2px solid #fff;
    
    }


    .duvida {
        position: fixed;
        bottom: 20px;
        right: 20px;
        border: none;
        background: transparent;
        cursor: pointer;
        z-index: 100;
        padding: 0;
        margin: 0;
    }

    .duvida img {
        transition: transform 0.2s;
         width: 50px;
        height: 50px;
    }

    .duvida img:active {
        transform: scale(0.95);
    }

    .background-img, .background-img2, .background-img3 {
        cursor: pointer; 
    }
    p{
        font-size: 15px;
        text-align: center;
        font-family: "Quicksand", sans-serif;    
        margin-bottom: 45px;
    }
    li{
        font-family: "Quicksand", sans-serif;
        margin-top: 15px;
    }
    #respostasSelecionadasTexto {
    font-size: 18px;         
    color: #fff;             
    font-style: italic;      
    text-align: center; 
    font-family: "Quicksand", sans-serif;    
    margin-bottom: 30px;
  
}
#imagensLivros {
    display: flex;               
    justify-content: center;     
    flex-wrap: wrap;             
    gap: 20px;                   
    margin-top: 20px;     
           
}

#imagensLivros img {
    position: relative;         
    width: 200px;                
    height: auto;                
    border-radius: 8px;          
    transition: transform 0.3s ease, box-shadow 0.3s ease; 
    z-index: 1;     
    background-color: rgba(0, 0, 0, 0.4); /* Cor preta com opacidade */
            
}

#imagensLivros img::before {
    position: absolute;                            
    width: 100%;                 
    height: 100%;                
    background-color: rgba(0, 0, 0, 1); 
    border-radius: 8px;         
    opacity: 0;                
    transition: opacity 0.5s ease; 
    z-index: -1;                 
}

#imagensLivros img:hover {
    transform: scale(1.10);      
    box-shadow: 0 6px 12px rgba(0, 0, 0, 1); 
}

#imagensLivros img:hover::before {
    opacity: 1;                  
}

.swal2-icon {
    margin-top: 0;
    width: 60px; /* Ajuste o valor conforme necessário */
    height: 60px; /* Ajuste o valor conforme necessário */
}

@media (max-width: 768px) {
        body {
            background-size: cover;
            margin-left: 10px
        }

        .navbar {
        position: fixed; 
        top: 0; 
        left: 0;
        z-index: 9999; 
    }


        .background-img, .background-img1, .background-img2 {
            width: 200px;
            height: 120px;
        }

        .respostaBotao {
            margin-left: 0;
            align-items: center;
        }
        #respostasSelecionadasTexto {
            font-size: 16px; 
            margin-left: 15px        
        }
  

        #pergunta {
            font-size: 33px;
            margin-top: 30px;
            margin-left: 30px
        }

        .livro-imagem {
            width: 120px;
            height: 180px;
        }

        .quadrado {
            width: 100%;
            height: auto;
        }

        #progresso {
            width: 70%;
            font-size: 26px;
            padding: 10px;
        }

        #imagensLivros {
            gap: 10px;
            margin-left: 40px
        }

        #imagensLivros img {
            width: 150px;
            
        }

        p {
            font-size: 14px;
        }

        .duvida img {
            width: 40px;
            height: 40px;
        }

        .legenda {
            font-size: 18px;
        }

        li {
            font-size: 14px;
        }
    }
    </style>

</head>


<body>

    <div class="container">
        <div class="quadrado" style="text-align: center;  margin-top: 55px;">
            <div id="progresso"></div>
            <br>

            <div style="text-align: center;" id="pergunta"></div>


            <div style="text-align: center;  margin-top: 55px;">
                <div id="botoesResposta">
                    <div id="botaoEsquerda"></div>
                    <div id="botaoDireita"></div>
                </div>
            </div>
            <div class="card-container">
            
            <?php
include_once '../class/Livro.php';

function pegarImagensPorGenero($genero) {
    $imagens = [];  
    $livro = new Livro();
    $livros = $livro->listarGenero($genero);

    foreach ($livros as $livro) {
        
        $img = ($livro['imagem']) ? '../img/' . htmlspecialchars($livro['imagem'], ENT_QUOTES, 'UTF-8') : '/img/placeholder.jpg';
        $imagens[] = $img;  
    }

    return $imagens; 
}

// Função para pegar imagens por subgênero
function pegarImagensPorSubgenero($subgenero) {
    $imagens = [];  // Array para armazenar as imagens
    $livro = new Livro();
    $livros = $livro->listarSubgenero($subgenero);

    foreach ($livros as $livro) {
        // Verifica se a imagem existe, caso contrário, usa uma imagem placeholder
        $img = ($livro['imagem']) ? '../img/' . htmlspecialchars($livro['imagem'], ENT_QUOTES, 'UTF-8') : '/img/placeholder.jpg';
        $imagens[] = $img;  // Armazena a imagem no array
    }

    return $imagens;  // Retorna o array de imagens
}
function pegarImagensPorCaracteristicas($caracteristicas) {
    $imagens = [];  // Array para armazenar as imagens
    $livro = new Livro();
    $livros = $livro->listarCaracteristicas($caracteristicas);

    foreach ($livros as $livro) {
        // Verifica se a imagem existe, caso contrário, usa uma imagem placeholder
        $img = ($livro['imagem']) ? '../img/' . htmlspecialchars($livro['imagem'], ENT_QUOTES, 'UTF-8') : '/img/placeholder.jpg';
        $imagens[] = $img;  // Armazena a imagem no array
    }

    return $imagens;  // Retorna o array de imagens
}

// Definindo gêneros e subgêneros
$generoRomance = 'romanc';  
$generoTerror = 'terror';
$generoFantasia = 'fantas'; 
$generoMisterio = 'mister'; 
$generoKids = 'kids'; 
$generoOutros = 'outros'; 

$subgeneroRomance = 'romanc';  
$subgeneroTerror = 'terror';
$subgeneroFantasia = 'fantas'; 
$subgeneroMisterio = 'mister'; 
$subgeneroFiccao = 'ficcao'; 
$subgeneroOutros = 'outros'; 

$caracteristicasGravidez = 'gravid';  
$caracteristicasReligiao = 'religi';
$caracteristicasPlot = 'PLOT T'; 
$caracteristicasAdolescente = 'adoles'; 
$caracteristicasFinal = 'final'; 
$caracteristicasSlow = 'SLOW B'; 

// Pegando imagens para cada gênero
$imagensRomance = pegarImagensPorGenero($generoRomance);
$imagensTerror = pegarImagensPorGenero($generoTerror);
$imagensFantasia = pegarImagensPorGenero($generoFantasia); 
$imagensMisterio = pegarImagensPorGenero($generoMisterio); 
$imagensKids = pegarImagensPorGenero($generoKids); 
$imagensOutros = pegarImagensPorGenero($generoOutros); 

// Pegando imagens para cada subgênero
$imagenssubRomance = pegarImagensPorSubgenero($subgeneroRomance);
$imagenssubTerror = pegarImagensPorSubgenero($subgeneroTerror);
$imagenssubFantasia = pegarImagensPorSubgenero($subgeneroFantasia); 
$imagenssubMisterio = pegarImagensPorSubgenero($subgeneroMisterio); 
$imagenssubFiccao = pegarImagensPorSubgenero($subgeneroFiccao); 
$imagenssubOutros = pegarImagensPorSubgenero($subgeneroOutros); 

$imagenscaracteristicasGravidez = pegarImagensPorCaracteristicas($caracteristicasGravidez);
$imagenscaracteristicasReligiao = pegarImagensPorCaracteristicas($caracteristicasReligiao);
$imagenscaracteristicasPlot = pegarImagensPorCaracteristicas($caracteristicasPlot); 
$imagenscaracteristicasAdolescente = pegarImagensPorCaracteristicas($caracteristicasAdolescente); 
$imagenscaracteristicasFinal = pegarImagensPorCaracteristicas($caracteristicasFinal); 
$imagenscaracteristicasSlow = pegarImagensPorCaracteristicas($caracteristicasSlow); 

// Se você precisar concatenar os arrays em strings
$imgRString = implode(',', $imagensRomance);
$imgTString = implode(',', $imagensTerror);
$imgFString = implode(',', $imagensFantasia);
$imgMString = implode(',', $imagensMisterio);
$imgKString = implode(',', $imagensKids);
$imgOString = implode(',', $imagensOutros);

$imgsubRString = implode(',', $imagenssubRomance);
$imgsubTString = implode(',', $imagenssubTerror);
$imgsubFString = implode(',', $imagenssubFantasia);
$imgsubMString = implode(',', $imagenssubMisterio);
$imgsubFiString = implode(',', $imagenssubFiccao);
$imgsubOString = implode(',', $imagenssubOutros);

$imgscGString = implode(',', $imagenscaracteristicasGravidez);
$imgscRString = implode(',', $imagenscaracteristicasReligiao);
$imgscPString = implode(',', $imagenscaracteristicasPlot);
$imgscAString = implode(',', $imagenscaracteristicasAdolescente);
$imgscFString = implode(',', $imagenscaracteristicasFinal);
$imgscCString = implode(',', $imagenscaracteristicasSlow);
?>


</div>

<button class="duvida" onclick="showHelp()">
            <img  src="../img/pff.png" ></button>
        </div>
        
            
           
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.12.4/dist/sweetalert2.all.min.js"></script>
        <script>

            const imagensRomance = "<?php echo $imgRString; ?>".split(',');
            const imagensTerror = "<?php echo $imgTString; ?>".split(',');
            const imagensFantasia = "<?php echo $imgFString; ?>".split(',');
            const imagensMisterio = "<?php echo $imgMString; ?>".split(',');
            const imagensKids = "<?php echo $imgKString; ?>".split(',');
            const imagensOutros = "<?php echo $imgOString; ?>".split(',');
           
            const imagenssubRomance = "<?php echo $imgsubRString; ?>".split(',');
            const imagenssubTerror = "<?php echo $imgsubTString; ?>".split(',');
            const imagenssubFantasia = "<?php echo $imgsubFString; ?>".split(',');
            const imagenssubMisterio = "<?php echo $imgsubMString; ?>".split(',');
            const imagenssubFiccao = "<?php echo $imgsubFiString; ?>".split(',');
            const imagenssubOutros = "<?php echo $imgsubOString; ?>".split(',');
           
            const imagenscaracteristicasGravidez = "<?php echo $imgscGString; ?>".split(',');
            const imagenscaracteristicasReligiao = "<?php echo $imgscRString; ?>".split(',');
            const imagenscaracteristicasPlot = "<?php echo $imgscPString; ?>".split(',');
            const imagenscaracteristicasAdolescente = "<?php echo $imgscAString; ?>".split(',');
            const imagenscaracteristicasFinal = "<?php echo $imgscFString; ?>".split(',');
            const imagenscaracteristicasSlow = "<?php echo $imgscCString; ?>".split(',');
            
            const teste = [];

            var livroEscolhido = [];
            var listaLivrosFavoritos = [];
            var listaSiteLivrosFavoritos = [];

            var perguntas = [{
                    progresso: "Questão 1 de 3",
                    pergunta: "Qual é o seu gênero favorito? ",
                    ajuda: `
                    <p>Gênero é como um grupo que agrupa vários livros que compartilham temas, estilos ou estruturas semelhantes.</p>
                    <ul style="list-style-type: none; padding-left: 0; text-align: left; font-size: 15px">
                        <li><span style="font-size: 16px; font-weight: bold; ">Romance:</span> Histórias ficcionais que exploram a vida e as emoções dos personagens.</li>
                        <li><span style="font-size: 16px; font-weight: bold; ">Fantasia:</span> Histórias que acontecem em mundos imaginários com elementos mágicos, como criaturas fantásticas.</li>
                        <li><span style="font-size: 16px; font-weight: bold; ">Kids (Infantil):</span> Histórias destinadas a crianças, com linguagens e histórias adaptadas para a idade.</li>
                        <li><span style="font-size: 16px; font-weight: bold; ">Mistério:</span> Histórias que envolvem crimes ou enigmas que precisam ser resolvidos.</li>
                        <li><span style="font-size: 16px; font-weight: bold; ">Terror:</span> Histórias que buscam assustar ou causar medo nos leitores.</li>
                        <li><span style="font-size: 16px; font-weight: bold; ">Outros:</span> Quando o gênero que procura não se encontra nos listados acima.</li>
                    </ul>
                    `,
                    respostas: [{
                            imagem: "<img src='../img/imagem1.png' class='background-img'>",
                            legenda: "Romance"
                        },
                        {
                            imagem: "<img src='../img/imagem4.png' class='background-img'>",
                            legenda: "Fantasia"
                        },
                        {
                            imagem: "<img src='../img/imagem2.png' class='background-img'>",
                            legenda: "Kids"
                        },
                        {
                            imagem: "<img src='../img/imagem5.png' class='background-img'>",
                            legenda: "Mistério"
                        },
                        {
                            imagem: "<img src='../img/imagem6.png' class='background-img'>",
                            legenda: "Terror"
                        },
                        {
                            imagem: "<img src='../img/imagem3.png' class='background-img'>",
                            legenda: "Outros"
                        }
                    ]
                },
                {
                    progresso: "Questão 2 de 3",
                    pergunta: "Qual o seu subgênero favorito?",
                    ajuda: `
                    <p>Dentro de cada gênero, existem categorias ainda mais específicas, chamadas subgêneros. Eles ajudam a detalhar e especificar ainda mais o tipo de história que o livro conta.</p>
                    <ul style="list-style-type: none; padding-left: 0; text-align: left; font-size: 15px">
                        <li><span style="font-size: 16px; font-weight: bold; ">Mistério:</span> Histórias que giram em torno de crimes, enigmas ou problemas intrigantes que precisam ser solucionados.</li>
                        <li><span style="font-size: 16px; font-weight: bold; ">Romance:</span>  Histórias que focam em relacionamentos amorosos e emocionais entre os personagens.</li>
                        <li><span style="font-size: 16px; font-weight: bold; ">Terror:</span>  Histórias projetadas para assustar e criar uma atmosfera de medo e tensão.</li>
                        <li><span style="font-size: 16px; font-weight: bold; ">Fantasia:</span> Histórias que acontecem em mundos imaginários, cheios de magia e criaturas fantásticas.</li>
                        <li><span style="font-size: 16px; font-weight: bold; ">Ficção Científica:</span> Histórias que exploram cenários futuros, tecnologias avançadas e conceitos científicos.</li>
                        <li><span style="font-size: 16px; font-weight: bold; ">Outroa:</span> Quando o subgênero que procura não está listado aqui.</li>
                    </ul>
                    `,
                    respostas: [{
                            imagem: "<img src='../img/imagem5.png' class='background-img'>",
                            legenda: "Mistério"
                        },
                        {
                            imagem: "<img src='../img/imagem1.png' class='background-img'>",
                            legenda: "Romance"
                        },
                        {
                            imagem: "<img src='../img/imagem6.png' class='background-img'>",
                            legenda: "Terror"
                        },
                        {
                            imagem: "<img src='../img/imagem4.png' class='background-img'>",
                            legenda: "Fantasia"
                        },
                        {
                            imagem: "<img src='../img/imagem7.png' class='background-img'>",
                            legenda: "Ficção Científica"
                        },
                        {
                            imagem: "<img src='../img/imagem3.png' class='background-img'>",
                            legenda: "Outros"
                        }
                    ]
                },
                {
                    progresso: "Questão 3 de 3",
                    pergunta: "Qual a característica ideal? ",
                    ajuda: `
                    <p>Nos livros tem características especifica que estamos procurando, elas ajudam a especificar exatamente o que está procurando.</p>
                    <ul style="list-style-type: none; padding-left: 0; text-align: left; font-size: 15px">
                        <li><span style="font-size: 16px; font-weight: bold; ">Gravidez:</span> História gira em torno de uma palta familiar.</li>
                        <li><span style="font-size: 16px; font-weight: bold; ">Religião:</span> Histórtia gira em torno de religião.</li>
                        <li><span style="font-size: 16px; font-weight: bold; ">Plot Twist:</span> Quando durante a história há uma reviravolta inesperada.</li>
                        <li><span style="font-size: 16px; font-weight: bold; ">Adolescente:</span> História acontece em um ambiente adolescente como escolas, universidades e etc.</li>
                        <li><span style="font-size: 16px; font-weight: bold; ">Final Feliz:</span> Quando a hitória acaba com um final feliz (lembrando que um final feliz não é necessariamente um final alegre).</li>
                        <li><span style="font-size: 16px; font-weight: bold; ">Slow Burn:</span> Quando o romance entre os personagens se desenvolve lentamente.</li>
                    </ul>
                    `,
                    respostas: [{
                            imagem: "<img src='../img/imagem8.png' class='background-img1'>",
                            legenda: "Gravidez"
                        },
                        {
                            imagem: "<img src='../img/imagem9.png' class='background-img1'>",
                            legenda: "Religioso"
                        },
                        {
                            imagem: "<img src='../img/imagem10.png' class='background-img1'>",
                            legenda: "Plot Twist"
                        },
                        {
                            imagem: "<img src='../img/imagem11.png' class='background-img1'>",
                            legenda: "Adolescente"
                        },
                        {
                            imagem: "<img src='../img/imagem12.png' class='background-img1'>",
                            legenda: "Final Feliz"
                        },
                        {
                            imagem: "<img src='../img/imagem13.png' class='background-img2'>",
                            legenda: "Slow Burn"
                        }
                    ]
                }
            ];




            var cores = ['cor1', 'cor2', 'cor3'];
            var indiceCorAtual = 0;
            var indicePerguntaAtual = 0;
            var respostasSelecionadas = [];
            var resultado = [];
            var perguntaElement = document.getElementById('pergunta');
            var progressoElement = document.getElementById('progresso');
            var botaoEsquerda = document.getElementById('botaoEsquerda');
            var botaoDireita = document.getElementById('botaoDireita');
            var inactivityTimer; // Variável para armazenar o temporizador de inatividade
var tooltipTimer; // Variável para armazenar o temporizador do tooltip
var tooltipExibido = false; // Flag para verificar se o tooltip já foi exibido para a pergunta atual

// Função que inicia o temporizador de inatividade
function startInactivityTimer() {
    // Limpa qualquer temporizador anterior de tooltip ou inatividade
    clearTimeout(tooltipTimer);
    clearTimeout(inactivityTimer);

    console.log("Inatividade timer iniciado"); // Debugging
    // Define o temporizador para 5 segundos de inatividade
    inactivityTimer = setTimeout(showTooltip, 10000);
}

function showTooltip() {
    console.log("Exibindo tooltip, pergunta atual: " + indicePerguntaAtual); // Debugging
    if (tooltipExibido || (indicePerguntaAtual < 0 || indicePerguntaAtual > 2)) {
        return; // Não exibe o tooltip se já foi exibido ou se não está em uma das perguntas desejadas
    }

    tooltipExibido = true; // Marca que o tooltip foi exibido

    // Cria e estiliza o tooltip
    const tooltip = document.createElement('div');
    tooltip.id = 'tooltip';
    tooltip.innerText = 'Está com dúvidas? Clique aqui.';
    tooltip.style.position = 'fixed';
    tooltip.style.bottom = '80px';
    tooltip.style.right = '10px';
    tooltip.style.backgroundColor = 'rgba(255, 255, 255, 0.1)';
    tooltip.style.color = '#fff';
    tooltip.style.padding = '10px';
    tooltip.style.borderRadius = '5px';
    tooltip.style.boxShadow = '0 0 6px rgba(255, 255, 255, 0.6)';
    tooltip.style.zIndex = '1000';

    // Criação da setinha do tooltip
    const triangle = document.createElement('div');
    triangle.style.position = 'absolute';
    triangle.style.bottom = '-10px';
    triangle.style.left = '90%';
    triangle.style.transform = 'translateX(-50%)';
    triangle.style.width = '0';
    triangle.style.height = '0';
    triangle.style.borderLeft = '5px solid transparent';
    triangle.style.borderRight = '5px solid transparent';
    triangle.style.borderTop = '10px solid rgba(255, 255, 255, 0.1)';

    tooltip.appendChild(triangle);
    document.body.appendChild(tooltip);

    // Define o temporizador para remover o tooltip após 3 segundos
    tooltipTimer = setTimeout(() => {
        tooltip.remove();
        tooltipExibido = false; // Permite exibir o tooltip novamente na próxima pergunta
    }, 5000);
}


// Função para exibir a próxima pergunta e lidar com temporizadores
function exibirProximaPergunta() {
    console.log("Exibindo pergunta nº: " + (indicePerguntaAtual + 1)); // Debugging

    if (indicePerguntaAtual < perguntas.length) {
        var perguntaAtual = perguntas[indicePerguntaAtual];

        progressoElement.textContent = perguntaAtual.progresso;
        perguntaElement.textContent = perguntaAtual.pergunta;

        botaoEsquerda.innerHTML = "";
        botaoDireita.innerHTML = "";

        var numRespostas = perguntaAtual.respostas.length;
        var metade = Math.ceil(numRespostas / 2);

        for (var i = 0; i < numRespostas; i++) {
            var botao = document.createElement('button');
            botao.className = 'respostaBotao';
            botao.innerHTML = perguntaAtual.respostas[i].imagem;
            var legenda = document.createElement('div');
            legenda.textContent = perguntaAtual.respostas[i].legenda;
            legenda.className = 'legenda';
            botao.appendChild(legenda);
            botao.addEventListener('click', responderPergunta);

            if (i < metade) {
                botaoEsquerda.appendChild(botao);
            } else {
                botaoDireita.appendChild(botao);
            }
        }

        // Cancela qualquer tooltip ou temporizador de inatividade anterior
        clearTimeout(tooltipTimer);
        clearTimeout(inactivityTimer);

        // Exibe o tooltip após 5 segundos de inatividade em todas as páginas
        if (!tooltipExibido) {
            startInactivityTimer();
        }
    } else {
        fimDoQuiz(); // Finaliza o quiz se não houver mais perguntas
    }
}








            function showHelp() {
                var perguntaAtual = perguntas[indicePerguntaAtual];
                let larguraTela = window.innerWidth;

                let larguraSwal = larguraTela < 768 ? '80vh' : '600px';  

                Swal.fire({
                    title: 'Ajuda',
                    top: 0,
                    html: perguntaAtual.ajuda,
                    width: larguraSwal, // Ajuste dinâmico da largura
                    padding: "3em",
                    color: "#fff",
                    background: `rgba(87, 34, 75, 0.95)`,
                    icon: "question",
                    backdrop: `rgba(87, 34, 75, 0.3)`,
                    confirmButtonText: 'OK!',
                    confirmButtonColor: 'rgba(140, 47, 119, 1)',
                    iconColor: '#fff',
                    });
               
            } 
          

// Inicialize o array para armazenar imagens selecionadas
var livroEscolhido = [];

// Função para adicionar imagens sem duplicatas
function adicionarImagensSemDuplicacao(imagens) {
    imagens.forEach(function(imagem) {
        if (livroEscolhido.indexOf(imagem) === -1) {
            livroEscolhido.push(imagem); // Adiciona imagem se não estiver presente
        }
    });
}

// Chame a função para cada conjunto de imagens
adicionarImagensSemDuplicacao(imagensRomance);
adicionarImagensSemDuplicacao(imagenssubRomance);
adicionarImagensSemDuplicacao(imagensFantasia);
adicionarImagensSemDuplicacao(imagenssubFantasia);
adicionarImagensSemDuplicacao(imagensMisterio);
adicionarImagensSemDuplicacao(imagenssubMisterio);
adicionarImagensSemDuplicacao(imagensTerror);
adicionarImagensSemDuplicacao(imagenssubTerror);
adicionarImagensSemDuplicacao(imagensOutros);
adicionarImagensSemDuplicacao(imagenssubOutros);

// O restante do seu código...
function responderPergunta() {
    var respostaIndex = Array.from(document.querySelectorAll('.respostaBotao')).indexOf(this);
    var respostaSelecionada = perguntas[indicePerguntaAtual].respostas[respostaIndex].legenda;

    respostasSelecionadas.push(respostaSelecionada);

    if (indicePerguntaAtual === 0) {
        // Lógica para a primeira pergunta
        
        if (respostaSelecionada === 'Romance') {
            resultado = resultado.concat(imagensRomance);

        } else if (respostaSelecionada === 'Fantasia') {
            resultado = resultado.concat(imagensFantasia);

        } else if (respostaSelecionada === 'Kids') {
            resultado = resultado.concat(imagensKids);

        } else if (respostaSelecionada === 'Mistério') {
            resultado = resultado.concat(imagensMisterio);

        } else if (respostaSelecionada === 'Terror') {
            resultado = resultado.concat(imagensTerror);
        } else if (respostaSelecionada === 'Outros') {
            resultado = resultado.concat(imagensOutros);

        }

    } else if (indicePerguntaAtual === 1) {
        // Lógica para a segunda pergunta
        if (respostaSelecionada === 'Romance') {
            resultado = resultado.concat(imagenssubRomance);

        } else if (respostaSelecionada === 'Fantasia') {
            resultado = resultado.concat(imagenssubFantasia);

        } else if (respostaSelecionada === 'Ficção Científica') {
            resultado = resultado.concat(imagenssubFiccao);

        } else if (respostaSelecionada === 'Mistério') {
            resultado = resultado.concat(imagenssubMisterio);

        } else if (respostaSelecionada === 'Terror') {
            resultado = resultado.concat(imagenssubTerror);
        } else if (respostaSelecionada === 'Outros') {
            resultado = resultado.concat(imagenssubOutros);

        }

    } else if (indicePerguntaAtual === 2) {
        // Lógica para a terceira pergunta
        if (respostaSelecionada === 'Gravidez') {
            resultado = resultado.concat(imagenscaracteristicasGravidez);

        } else if (respostaSelecionada === 'Religioso') {
            resultado = resultado.concat(imagenscaracteristicasReligiao);

        } else if (respostaSelecionada === 'Plot Twist') {
            resultado = resultado.concat(imagenscaracteristicasPlot);

        } else if (respostaSelecionada === 'Adolescente') {
            resultado = resultado.concat(imagenscaracteristicasAdolescente);

        } else if (respostaSelecionada === 'Final Feliz') {
            resultado = resultado.concat(imagenscaracteristicasFinal);
        } else if (respostaSelecionada === 'Slow Burn') {
            resultado = resultado.concat(imagenscaracteristicasSlow);

        }
    }
    var cor = cores[indiceCorAtual];
    document.body.className = cor;
    indiceCorAtual = (indiceCorAtual + 1) % cores.length;

    indicePerguntaAtual++;
    exibirProximaPergunta();
}


// Função para finalizar o quiz
function fimDoQuiz() {
    // Lógica para ocultar botões e exibir resultados
    document.getElementById('botoesResposta').style.display = 'none';
    document.querySelector('.duvida').style.display = 'none';
    progressoElement.textContent = "FIM DO QUIZ!";
    perguntaElement.textContent = "Seus livros compatíveis:";

    var respostasSelecionadasTexto = "Livros de " + respostasSelecionadas.join(" ou ");
    var respostasDiv = document.createElement('div');
    respostasDiv.id = 'respostasSelecionadasTexto';
    respostasDiv.textContent = respostasSelecionadasTexto;

    perguntaElement.insertAdjacentElement('afterend', respostasDiv);

    var containerImagens = document.createElement('div');
    containerImagens.id = 'imagensLivros';

    resultado = removerDuplicatas(resultado); 

    resultado.forEach(src => {
        const imgElement = document.createElement('img');
        imgElement.src = src;
        imgElement.alt = 'Imagem do livro';
        imgElement.style.filter = 'brightness(0.5)'; // Aplica um filtro mais escuro
        imgElement.style.cursor = 'zoom-in'; // Altera o cursor para lupa

        imgElement.addEventListener('mouseenter', () => {
            imgElement.style.filter = 'brightness(1)'; // Clareia a imagem
        });

        imgElement.addEventListener('mouseleave', () => {
            imgElement.style.filter = 'brightness(0.5)'; // Escurece a imagem ao sair do mouse
        });

        containerImagens.appendChild(imgElement);
    });

    respostasDiv.insertAdjacentElement('afterend', containerImagens);
}

function removerDuplicatas(array) {
    return array.filter((item, index) => array.indexOf(item) === index);
}

exibirProximaPergunta();


        </script>
    </div>


</body>

</html>