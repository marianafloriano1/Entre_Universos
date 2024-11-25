<?php
$message = ''; 
$alertType = '';

if (filter_input(INPUT_POST, 'btnsalvar')) {
    $nome = filter_input(INPUT_POST, 'txtnome', FILTER_SANITIZE_STRING);
    $descricao = filter_input(INPUT_POST, 'txtdescricao', FILTER_SANITIZE_STRING);
    $rating = filter_input(INPUT_POST, 'rating', FILTER_VALIDATE_INT);

    if ($nome === false || $nome === '' || $descricao === false || $descricao === '' || $rating === false || $rating < 1 || $rating > 5) {
        $message = 'Por favor, preencha todos os campos!';
        $alertType = 'error';
    } else {
      
        include_once '../class/Categoria.php';
        $cat = new Categoria();
    
        
        $cat->setNome($nome);
        $cat->setDescricao($descricao);
        $cat->setRating($rating);
    
       
        $result = $cat->salvar();
        if ($result === true) {
            
            $message = $result; 
            $alertType = 'error '; 
        } else {
           
            $message = 
            $alertType = 'success';
        }
    }
}
?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Criar Avaliação</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.12.4/dist/sweetalert2.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="../css/responsive.css">
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Bad+Script&family=Caveat:wght@400..700&family=Edu+VIC+WA+NT+Beginner:wght@400..700&family=Josefin+Slab:ital,wght@0,100..700;1,100..700&family=Nanum+Gothic&family=Shadows+Into+Light&family=Shadows+Into+Light+Two&display=swap" rel="stylesheet">
    <style>
        h1 {
    color: #fff;
    text-align: center;
    font-size: 44px;
    font-family: "Caveat", cursive;
}

p {
    color: #fff;
    text-align: center;
    font-size: 34px;
    font-family: "Caveat", cursive;
}

i {
    cursor: pointer;
}

#selected {
    color: #ffdc4a;
}

#unselected {
    color: white;
}

.stars i.fa-star {
    font-size: 30px;
}

.stars {
    display: flex;
    justify-content: center;
    margin-bottom: 30px;
}

.button-container {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-bottom: 50px;
}

label {
    margin-top: 45px;
    font-family: "Quicksand", sans-serif;
    color: #fff;
    
}

button {
    background-color: #896aba;
    color: #fff;
    font-family: "Quicksand", sans-serif;

}

img {
    margin-left: 479px;
    width: 120px;
    height: 120px;
    margin-bottom: 20px;
}

body {
    background: transparent;
}

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

.form-control::placeholder {
    color: #fff !important;
    font-family: "Quicksand", sans-serif;
}

/* Responsividade para telas menores que 768px */
@media (max-width: 768px) {
    h1 {
        font-size: 36px;
    }

    p {
        font-size: 18px;
        
    }

    .stars i.fa-star {
        font-size: 25px;
    }

    img {
        margin-left: auto;
        margin-right: auto;
        display: block;
        width: 100px;
        height: 100px;
    }
    label{
        font-size: 12px
    }
}

/* Responsividade para telas menores que 480px */
@media (max-width: 480px) {
    h1 {
        font-size: 28px;
    }

    p {
        font-size: 22px;
        margin-top: 15px;
    }
    label{
        margin-top: -30px;
    }

    .stars i.fa-star {
        font-size: 25px;
    }

    img {
        width: 80px;
        height: 80px;
    }

    .button-container {
        flex-direction: row;
        margin-top: -50px;
    }
    form{
        height: 700px;
    }
    #btnsalvar{
        border: 1px solid rgba(255, 255, 255, 0.3);
        color: #fff;
    }
}

    </style>
</head>
<body>
<video class="video" autoplay muted loop>
        <source src="../img/desfoque.mp4" type="video/mp4">
    </video>
    <div class="container">
        <div class="col-sm-12 mb-4">
            
        </div>
        <div class="col-sm-12">
            
            <div style="margin-top:55px; border-radius: 15px; background-color: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(15px); margin-top: 60px;">
                <form method="post" name="frmsalvar" id="frmsalvar" class="m-3" >
                <a class="btn btn" href="?p=categoria/listar" style="background-color: none; color: #fff; width:70px; margin-top: 20px; border: 1px solid rgba(255, 255, 255, 0.3); font-size: 18px"><i class="bi bi-arrow-return-left"></i></a>
                    <br>
                    <img src="../img/libros.png">
                <h1>Faça sua resenha</h1>
            <p>Nos conte o que achou de cada livro e deixe a suas estrelas!</p>
            <br>
                    <div class="form-group">
                    <div class="stars">
                        <i class="fa fa-star star-1"></i>
                        <i class="fa fa-star star-2"></i>
                        <i class="fa fa-star star-3"></i>
                        <i class="fa fa-star star-4"></i>
                        <i class="fa fa-star star-5"></i>
                    </div>
                    <input type="hidden" name="rating" id="rating" value="0">
                        <label for="txtnome" class="col-sm-2 col-form-label">
                            Título do Livro
                        </label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="txtnome" name="txtnome" placeholder="Digite o título do livro:" maxlength="50" minlength="3" style="font-family: Quicksand, sans-serif; color:#fff; background-color:rgba(255, 255, 255, 0.1); margin-top:15px; height:50px; border: none;" />
                        </div>
                    </div>           
                    <div class="form-group">
                        <label for="txtdescricao" class="col-sm-2 col-form-label">Descrição do Livro</label>
                        <div class="col-sm-12">
                            <textarea class="form-control" rows="3" name="txtdescricao" placeholder="O que você achou:" style="background-color:rgba(255, 255, 255, 0.1); color:#fff; font-family: Quicksand, sans-serif; height:90px; border: none;margin-bottom:90px"></textarea>
                        </div>
                    </div>
                    
                    <div class="button-container">
                        <button type="submit" class="btn btn m-3" name="btnsalvar" id="btnsalvar" value="Salvar" style="background-color: none; color: #fff; width:150px; border: 1px solid rgba(255, 255, 255, 0.3);">Enviar Resenha</button>
                        
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script>
        function changeStarColor(ratingArg) {
            let rating = ratingArg;
            $(".stars i").each(function(index) {
                if (index < rating) {
                    $(this).attr("id", "selected");
                } else {
                    $(this).attr("id", "unselected");
                }
            });
            $("#rating").val(rating); 
        }

        let selectedRating = 0;

        $(".stars i").hover(function() {
            let starClass = parseInt($(this).attr("class").split("star-")[1]);
            changeStarColor(starClass);
        }, function() {
            if (selectedRating == 0) {
                changeStarColor(0);
            } else {
                changeStarColor(selectedRating);
            }
        });

        $(".stars i").click(function() {
            let starClass = parseInt($(this).attr("class").split("star-")[1]);
            changeStarColor(starClass);
            selectedRating = starClass;
        });

        
        document.addEventListener('DOMContentLoaded', function() {
            <?php if ($message): ?>
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
                        window.location.href = '?p=categoria/listar';
                    }
                   
                });
            <?php endif; ?>
        });
    </script>
    
</body>  
</html>
