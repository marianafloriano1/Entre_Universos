<?php
include_once '../class/Livro.php';
include_once '../class/Conectar.php';

$codigo_livro = filter_input(INPUT_GET, 'codigo_livro', FILTER_VALIDATE_INT);

$livro = new Livro();
$Sucesso = false;

function handleImageUpload()
{
    if (isset($_FILES["imagem"]) && $_FILES["imagem"]["error"] === UPLOAD_ERR_OK) {
        $fileTmpPath = $_FILES["imagem"]["tmp_name"];
        $fileName = $_FILES["imagem"]["name"];
        $fileNameCmps = explode(".", $fileName);
        $fileExtension = strtolower(end($fileNameCmps));

        $allowedExtensions = array("jpg", "jpeg", "png", "gif");
        if (in_array($fileExtension, $allowedExtensions)) {
            $newFileName = md5(time() . $fileName) . '.' . $fileExtension;
            $uploadFileDir = '../img/';
            $dest_path = $uploadFileDir . $newFileName;

            if (move_uploaded_file($fileTmpPath, $dest_path)) {
                return $newFileName;  // Aqui você retorna o caminho correto
            } else {
                return false;
            }
        } else {
            return false;
        }
    } else {
        return false;
    }
}


$alertType = '';
$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $imagem = handleImageUpload();

    $livro->setImagem($imagem);
    $livro->codigo_autor = filter_input(INPUT_POST, 'codigo_autor', FILTER_SANITIZE_STRING) ?? '';
    $livro->genero = filter_input(INPUT_POST, 'genero', FILTER_SANITIZE_STRING) ?? '';
    $livro->subgenero = filter_input(INPUT_POST, 'subgenero', FILTER_SANITIZE_STRING) ?? '';
    $livro->titulo_livro = filter_input(INPUT_POST, 'titulo_livro', FILTER_SANITIZE_STRING) ?? '';
    $livro->ano_livro = filter_input(INPUT_POST, 'ano_livro', FILTER_SANITIZE_STRING) ?? '';
    $livro->editora = filter_input(INPUT_POST, 'editora', FILTER_SANITIZE_STRING) ?? '';
    $livro->classificacao = filter_input(INPUT_POST, 'classificacao', FILTER_SANITIZE_STRING) ?? '';
    $livro->sinopse = filter_input(INPUT_POST, 'sinopse', FILTER_SANITIZE_STRING) ?? '';
    $livro->caracteristicas = filter_input(INPUT_POST, 'caracteristicas', FILTER_SANITIZE_STRING) ?? '';
    $livro->link = filter_input(INPUT_POST, 'link', FILTER_SANITIZE_URL) ?? '';

    if ($imagem !== false && !empty($livro->genero) && !empty($livro->subgenero) && !empty($livro->titulo_livro) && !empty($livro->ano_livro) && !empty($livro->editora) && !empty($livro->classificacao) && !empty($livro->sinopse)) {
        if (isset($codigo_livro) && !empty($codigo_livro)) {
            $result = $livro->update($codigo_livro);
        } else {
            $result = $livro->salvar();
        }

        if ($result) {
            $alertType = 'success';
            $message = 'Livro salvo com sucesso!';
        } else {
            $alertType = 'error';
            $message = 'Erro ao salvar o livro.';
        }
    } else {
        $alertType = 'error';
        $message = 'Preencha todos os campos obrigatórios.';
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
    <link
        href="https://fonts.googleapis.com/css2?family=Bad+Script&family=Caveat:wght@400..700&family=Edu+VIC+WA+NT+Beginner:wght@400..700&family=Josefin+Slab:ital,wght@0,100..700;1,100..700&family=Nanum+Gothic&family=Shadows+Into+Light&family=Shadows+Into+Light+Two&display=swap"
        rel="stylesheet">

    <style>
        body {
            font-family: "Quicksand", sans-serif;
            color: #fff;
            padding: 10px 20px;
            position: relative;
            top: 100px;
            align-items: center
        }
        .btn-voltar {
            background-color: none; 
            border: 1px solid rgba(255, 255, 255, 0.3);
            color: white;
            padding: 5px 20px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin-left: -50px;
            position: relative; 
            top: -50px; 
        }

        .btn-voltar:hover {
            color: #565656;
        }

        .containerr {
            box-shadow: 0 0 15px rgba(0, 0, 0, 1);
            background-color: transparent;
            width: 1050px;
            height: 750px;
            margin-left: 500px;
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
            padding: 10px 10px 10px 10px;
        }

        .video {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            object-fit: cover;
            z-index: -1;
            filter: hue-rotate(44deg) grayscale(40%) brightness(0.9) contrast(120%);
        }

        .texto1 {
            color: #fff;
            font-size: 45px;
            text-align: right;
            max-width: 800px;
            margin-left: 20px;
            flex-shrink: 0;
            z-index: 10000;
            font-family: "Caveat", cursive;

        }

        .teste {
            color: #fff;
            font-size: 92px;
            font-weight: bold;
            text-align: right;
            margin-bottom: 40px;
            font-family: "Caveat", cursive;
            margin-right: 100px;
            margin-top: 70px;
        }

        .teste1 {
            font-family: "Quicksand", sans-serif;
            font-size: 18px;
            margin-bottom: 200px;
            text-align: justify;
        }

        form {
            position: relative;
            z-index: 2;
            width: 1030px;
            height: 720px;
            border-radius: 5px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            background-color: rgba(255, 255, 255, 0);
            backdrop-filter: blur(15px);
            box-shadow: 0 0 0 rgba(255, 255, 255, 0.5);
            padding: 90px 90px 90px 90px;
        }

        .form-control {
            background-color: transparent;
            border: solid 0.5px #fff;
            border-radius: 12px;
            height: 30px;
            color: #fff !important;
        }

        .titulo {
            margin-top: 53px;
        }

        .select {
            margin-top: 53px;
            height: 35px
        }


        textarea.form-control {
            resize: vertical;
            max-width: none;
            width: 860px;
        }

        h1 {
            color: #fff;
            font-weight: bold;
            text-align: center;
            font-size: 32px;
            margin-top: 65px;
            font-family: "Caveat", cursive;

        }

        .form-group label {
            color: #fff;
            font-size: 30px;
            font-weight: bold;
            margin-left: 20px;
            font-family: "Caveat", cursive;
            width: 800px;

        }

        .form-group {
            margin-bottom: 15px;
            font-family: "Quicksand", sans-serif;
        }

        .form-group input[type="file"] {
            padding: 8px 15px;
            font-size: 16px;
            margin-right: 6px;
            margin-top: 20px;
            border: none;
        }

        .botao {
            background-color: transparent;
            border-radius: 10px;
            color: #fff;
            border: 1px solid white;
            font-size: 18px;
            width: 120px;
            font-family: "Quicksand", sans-serif;
            position: fixed;
            z-index: 1000;
            /* Garante que o botão fique visível acima de outros elementos */
        }

        .botao-proximo {
            bottom: 20px;
            /* Distância do fundo da tela */
            right: 20px;
            /* Distância da borda direita da tela */
        }

        .botao-anterior {
            bottom: 20px;
            /* Distância do fundo da tela */
            left: 20px;
            /* Distância da borda esquerda da tela */
        }

        .form-control::placeholder {
            color: #fff !important;
            font-size: 16px;
            font-family: "Quicksand", sans-serif;
        }

        a {
            color: #fff;
            text-decoration: none;
            font-family: "Quicksand", sans-serif;
        }

        option {
            color: #000;
            /* Corrigi a cor */
            font-weight: bold;
            font-family: "Quicksand", sans-serif;
            font-size: 18px;
            background: rgba(255, 255, 255, 0.7);
            /* Fundo translúcido */
            backdrop-filter: blur(5px);
            /* Efeito de desfoque */
            -webkit-backdrop-filter: blur(5px);
            /* Suporte para navegadores baseados em WebKit */
            border: none;
            margin-top: 20px;
        }

        p {
            font-size: 14px;
            font-family: "Quicksand", sans-serif;
            margin-top: 5px;
        }

        #charCount {
            color: #fff;
            font-size: 16px;
            margin-top: 5px;
            font-family: "Quicksand", sans-serif;
        }

        /* Media Query para telas de 768px */
        @media (max-width: 768px) {
            .containerr {
                width: 100%;
                margin: 0;
                padding: 10px;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                height: 700px;
            }

            .texto1 {
                font-size: 35px;
                text-align: center;
                margin: 20px 0;
                margin-top: -20px;

            }

            .teste {
                margin-top: 40px;
                font-size: 40px;
                text-align: center;
                margin: 20px 0;

            }

            .teste1 {
                font-size: 16px;
                margin-bottom: 40px;
                text-align: justify;

            }

            form {
                width: 100%;
                padding: 40px;
                height: 700px;
            }

            .form-control {
                font-size: 14px;
                height: 32px;

            }

            .titulo {
                margin-top: 5px;
                margin-bottom: -20px;
            }

            .select {
                margin-top: 3px;
            }


            .form-group label {
                font-size: 25px;
                text-align: start;

            }

            .botao {
                font-size: 16px;
                width: 100px;
                position: fixed;
                bottom: 10px;
                margin-top: 10px;
            }


            .botao-proximo {
                bottom: 20px;
                /* Distância do fundo da tela */
                right: 20px;
                /* Distância da borda direita da tela */
            }

            .botao-anterior {
                bottom: 20px;
                /* Distância do fundo da tela */
                left: 20px;
                /* Distância da borda esquerda da tela */
            }

            .form-row {
                width: 100%;

            }

            .form-group {
                width: 100%;
            }

            .form-group label {
                margin-left: 0;
                display: block;
                /* Faz o label ser exibido em bloco */
                margin-bottom: 0;
                /* Adiciona um espaço entre os labels */
            }

            textarea.form-control {
                resize: vertical;
                max-width: none;
                width: 260px;
            }

            .form-group input,
            .form-group select {
                width: 100%;

            }

        }
    </style>
</head>

<body>
    s
    <video class="video" autoplay muted loop>
        <source src="../img/yuri.mp4" type="video/mp4">
    </video>
    <div class="containerr">


        <form method="post" name="frmsalvar" id="frmsalvar" enctype="multipart/form-data">
            <div class="form-page1" id="page1" style="display: block;">
            <a class="btn-voltar" href="?p=livro/consultar"><i class="bi bi-arrow-return-left"></i></a>

                <div class="texto1">
                    <p class="teste">Cadastre Seu Livro!</p>
                    <p class="teste1">Dê mais visibilidade ao seu livro! Preencha o cadastro e apresente sua obra no nosso
                        site. Essa é sua chance de atrair novos leitores e conectar sua história com quem
                        mais se interessa por ela.<br><br><B>Faça seu livro brilhar entre os universos!</B></p>

                </div>
                <div class="form-row mb-1">


                </div>
                <button type="button" class="botao botao-proximo" onclick="navigate('next')">Próximo</button>
            </div>




            <div class="form-page2" id="page2" style="display: none;">
                <div class="form-row mb-4">
                    <div class="form-group col-md-4">
                        <label for="genero" style="position: relative;">Selecione:</label>

                        <label for="genero"></label>
                        <select name="genero" id="genero" class="form-control" style="background-color:transparent; font-size: 16px; height: 35px ">
                            
                            <option value="">Gênero</option>
                            <option value="ROMANCE" <?= isset($genero) && $genero === 'ROMANCE' ? 'selected' : '' ?>>Romance
                            </option>
                            <option value="MISTÉRIO" <?= isset($genero) && $genero === 'MISTÉRIO' ? 'selected' : '' ?>>
                                Mistério</option>
                            <option value="TERROR" <?= isset($genero) && $genero === 'TERROR' ? 'selected' : '' ?>>Terror
                            </option>
                            <option value="FANTASIA" <?= isset($genero) && $genero === 'FANTASIA' ? 'selected' : '' ?>>
                                Fantasia</option>
                            <option value="KIDS" <?= isset($genero) && $genero === 'KIDS' ? 'selected' : '' ?>>Kids</option>
                            <option value="OUTROS" <?= isset($genero) && $genero === 'OUTROS' ? 'selected' : '' ?>>Outros
                            </option>
                        </select>
                    </div>

                    <div class="form-group col-md-4">
                        <label for="subgenero"></label>
                        <select name="subgenero" id="subgenero" class="form-control select"
                            style="background-color:transparent; ">
                            <option value="">Sub-Gênero</option>
                            <option value="MISTÉRIO"
                                <?= isset($subgenero) && $subgenero === 'MISTÉRIO' ? 'selected' : '' ?>>Mistério</option>
                            <option value="FANTASIA"
                                <?= isset($subgenero) && $subgenero === 'FANTASIA' ? 'selected' : '' ?>>Fantasia</option>
                            <option value="ROMANCE" <?= isset($subgenero) && $subgenero === 'ROMANCE' ? 'selected' : '' ?>>
                                Romance</option>
                            <option value="FICÇÃO CIENTÍFICA"
                                <?= isset($subgenero) && $subgenero === 'FICÇÃO CIENTÍFICA' ? 'selected' : '' ?>>Ficção
                                Científica</option>
                            <option value="TERROR" <?= isset($subgenero) && $subgenero === 'TERROR' ? 'selected' : '' ?>>
                                Terror</option>
                            <option value="OUTROS" <?= isset($subgenero) && $subgenero === 'OUTROS' ? 'selected' : '' ?>>
                                Outros</option>
                        </select>
                    </div>

                    <div class="form-group col-md-4">
                        <label for="caracteristicas"></label>
                        <select name="caracteristicas" id="caracteristicas" class="form-control select"
                            style="background-color:transparent;">
                            <option value="">Características</option>
                            <option value="GRAVIDEZ"
                                <?= isset($caracteristicas) && $caracteristicas === 'GRAVIDEZ' ? 'selected' : '' ?>>Gravidez
                            </option>
                            <option value="ADOLESCENTE"
                                <?= isset($caracteristicas) && $caracteristicas === 'ADOLESCENTE' ? 'selected' : '' ?>>
                                Adolescente</option>
                            <option value="RELIGIOSA"
                                <?= isset($caracteristicas) && $caracteristicas === 'RELIGIOSA' ? 'selected' : '' ?>>
                                Religiosa</option>
                            <option value="FINAL FELIZ"
                                <?= isset($caracteristicas) && $caracteristicas === 'FINAL FELIZ' ? 'selected' : '' ?>>Final
                                Feliz</option>
                            <option value="PLOT TWIST"
                                <?= isset($caracteristicas) && $caracteristicas === 'PLOT TWIST' ? 'selected' : '' ?>>Plot
                                Twist</option>
                            <option value="SLOW BURN"
                                <?= isset($caracteristicas) && $caracteristicas === 'SLOW BURN' ? 'selected' : '' ?>>Slow
                                Burn</option>
                        </select>
                    </div>
                </div>
                <div class="form-row mb-4">
                    <div class="form-group col-md-6">
                        <label for="ano_livro">Insira as informações:</label>

                        <label for="ano_livro"></label>
                        <input type="text" class="form-control " id="ano_livro" name="ano_livro"
                            placeholder="Digite o ano do seu livro"
                            style="background-color:transparent; color:#fff !important " maxlength="4" minlength="4"
                            value="<?= isset($ano_livro) ? htmlspecialchars($ano_livro) : "" ?>" />
                    </div>
                    <div class="form-group col-md-6">
                        <label for="titulo_livro"></label>
                        <input type="text" class="form-control titulo" id="titulo_livro" name="titulo_livro"
                            placeholder="Digite o título"
                            style="background-color:transparent; color:white; " maxlength="80" minlength="3"
                            value="<?= isset($titulo_livro) ? htmlspecialchars($titulo_livro) : "" ?>" />
                    </div>
                </div>

                <div class="form-row mb-4">

                    <div class="form-group col-md-6">
                        <label for="editora"></label>
                        <input type="text" class="form-control" id="editora" name="editora" placeholder="Digite sua editora"
                            style="background-color:transparent; color:white; " maxlength="80" minlength="3"
                            value="<?= isset($editora) ? htmlspecialchars($editora) : "" ?>" />
                    </div>
                    <div class="form-group col-md-6">
                        <label for="classificacao"></label>
                        <input type="text" class="form-control" id="classificacao" name="classificacao"
                            placeholder="Digite a classificação" style="background-color:transparent; color:white; "
                            maxlength="80" minlength="2"
                            value="<?= isset($classificacao) ? htmlspecialchars($classificacao) : "" ?>" />
                        <p>*Digite o mínimo de idade necessária (ex: 14, 16, 10 ou 01)</p>
                    </div>
                </div>
                <button type="button" class="botao botao-anterior" onclick="navigate('previous')">Anterior</button>
                <button type="button" class="botao botao-proximo" onclick="navigate('next')">Próximo</button>

            </div>
            <div class="form-page3" id="page3" style="display: none;">
                <div class="form-row mb-4">

                    <div class="form-group w-100 ">
                        <input type="file" accept="image/*" name="imagem" id="imagem" class="form-control">
                        <p>*Arquive a capa do seu livro</p>

                    </div>
                    <div class="form-group w-100">
                        <label for="link"></label>
                        <input type="url" class="form-control" id="link" name="link" placeholder="Digite o link"
                            style="background-color:transparent; color:#fff; border-color: #fff;  "
                            value="<?= isset($link) ? htmlspecialchars($link) : '' ?>" />
                        <p>*Coloque o site de compra onde o seu livro está disponivel ou o link do seu Instagram</p>

                    </div>
                </div>

                <div class="form-row ">


                    <div class="form-group " style="margin-top: -40px;">
                        <label for="sinopse" style="position: relative;">Sinopse:</label>
                        <textarea class="form-control" id="sinopse" name="sinopse" placeholder="Digite a sinopse" rows="10"
                            style="border: 1px solid #fff; border-radius: 5px; background-color: transparent;  position: relative"
                            maxlength="900"><?= isset($sinopse) ? htmlspecialchars($sinopse) : "" ?></textarea>
                        <div id="charCount" style="color: #fff; font-size: 14px; margin-top: 5px;">
                            0 / 900 caracteres
                        </div>
                    </div>
                </div>
                <button type="button" class="botao botao-anterior" onclick="navigate('previous')">Anterior</button>

                <input type="submit" class="botao botao-proximo" name="<?= isset($codigo_livro) ? 'btneditar' : 'btnsalvar' ?>"
                    value="<?= isset($codigo_livro) ? 'Editar' : 'Salvar' ?>"
                    style="font-family: Madimi One, sans-serif; font-size:18px;" />
        </form>



    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            <?php if ($alertType === 'success'): ?>
                Swal.fire({
                    icon: 'success',
                    title: '<?= $message ?>',
                    background: '#fff',
                    iconColor: 'green',
                    timer: 2000,
                    timerProgressBar: true,
                    position: "top",
                    width: 400,
                    showConfirmButton: false,
                    willClose: () => {
                        window.location.href = '?p=home';
                    }
                });
            <?php elseif ($alertType === 'error'): ?>
                Swal.fire({
                    icon: 'error',
                    title: 'Erro!',
                    background: '#fff',
                    iconColor: 'red',
                    text: '<?= $message ?>',
                    width: 400,
                    timer: 2000,
                    timerProgressBar: true,
                    position: "top",
                    showConfirmButton: false
                });
            <?php endif; ?>
        });

        document.addEventListener('DOMContentLoaded', function() {
            const sinopseTextarea = document.getElementById('sinopse');
            const charCountDiv = document.getElementById('charCount');
            const maxLength = 900;

            // Initialize character count
            function updateCharCount() {
                const currentLength = sinopseTextarea.value.length;
                charCountDiv.textContent = `${currentLength} / ${maxLength} caracteres`;
            }

            // Event listener for input event
            sinopseTextarea.addEventListener('input', function() {
                updateCharCount();
            });

            // Initial update
            updateCharCount();
        });

        let currentPageIndex = 0;


        const pages = ['page1', 'page2', 'page3'];


        function showPage(index) {
            pages.forEach(page => {
                document.getElementById(page).style.display = 'none';
            });

            document.getElementById(pages[index]).style.display = 'block';
        }


        function navigate(direction) {
            if (direction === 'next') {
                if (currentPageIndex < pages.length - 1) {
                    currentPageIndex++;
                }
            } else if (direction === 'previous') {
                if (currentPageIndex > 0) {
                    currentPageIndex--;
                }
            }

            showPage(currentPageIndex);
        }

        document.addEventListener('DOMContentLoaded', function() {
            showPage(currentPageIndex);
        });
    </script>
</body>

</html>