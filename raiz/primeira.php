<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400..700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
        <!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        <!--========== BOX ICONS ==========-->
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

        <!--========== CSS ==========-->
        <link rel="stylesheet" href="assets/css/styles.css">

        <title>Entre Universos</title>

        <style>

/*===== VARIABLES CSS =====*/
:root {
  --header-height: 2.4rem; /* Anterior: 3rem */

  /*========== Colors ==========*/
  --first-color: #321859;
  --title-color: #fff;
  --text-color: #fff;
  --body-color: #FEFBFB;
  --container-color: #FFF;

  /*========== Font and typography ==========*/
  --body-font: 'Poppins', sans-serif;
  --biggest-font-size: 1.6rem; /* Anterior: 2rem */
  --h2-font-size: 1rem; /* Anterior: 1.25rem */
  --h3-font-size: 0.9rem; /* Anterior: 1.125rem */
  --normal-font-size: 0.75rem; /* Anterior: .938rem */
  --small-font-size: 0.65rem; /* Anterior: .813rem */

  /*========== Font weight ==========*/
  --font-semi-bold: 600;
  --font-bold: 700;

  /*========== Margenes ==========*/
  --mb-1: .4rem; /* Anterior: .5rem */
  --mb-2: .8rem; /* Anterior: 1rem */
  --mb-3: 1.2rem; /* Anterior: 1.5rem */
  --mb-4: 1.6rem; /* Anterior: 2rem */
  --mb-5: 2rem; /* Anterior: 2.5rem */
  --mb-6: 2.4rem; /* Anterior: 3rem */

  /*========== z index ==========*/
  --z-tooltip: 10;
  --z-fixed: 100;
}

@media screen and (min-width: 968px) {
  :root {
    --biggest-font-size: 2.4rem; /* Anterior: 3rem */
    --h2-font-size: 1.4rem; /* Anterior: 1.75rem */
    --h3-font-size: 1rem; /* Anterior: 1.25rem */
    --normal-font-size: 0.8rem; /* Anterior: 1rem */
    --small-font-size: 0.7rem; /* Anterior: .875rem */
  }
}

/*========== BASE ==========*/
*, ::before, ::after {
  box-sizing: border-box;
}

html {
  scroll-behavior: smooth;
}
.footer__description{
  font-size: 18px
}

.teste{
  font-size: 40px;
  color: #321859;
}


body {
  margin: var(--header-height) 0 0 0;
  font-family: "Quicksand", sans-serif;    
  font-size: var(--normal-font-size);
  background-color: var(--body-color);
  color: var(--text-color);
  line-height: 1.6;
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  height: 100vh; 
}

.scroll-top {
    position: fixed;
    bottom: 30px;
    text-align: end;
    align-items: end;
    background-color: transparent;
    color: white;
    border: none;
    padding: 10px;
    font-size: 30px;
    display: none; /* Inicialmente escondido */
    z-index: 1000; /* Para garantir que fique acima de outros elementos */
    
}



.video-background {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;
  z-index: -1;
}

h1, h2, h3, ul, p {
  margin: 0;
}

h1, h2, h3 {
  font-weight: var(--font-semi-bold);
  color: var(--title-color);
}

ul {
  padding: 0;
  list-style: none;
}

a {
  text-decoration: none;
}

img {
  max-width: 100%;
  height: auto;
}

/*========== CLASS CSS ==========*/
.section {
  padding: 3.2rem 0 1.6rem; /* Anterior: 4rem 0 2rem */
}

.section-title, .section-title-center {
  font-size: var(--h2-font-size);
  color: var(--title-color);
  text-align: center;
  margin-bottom: var(--mb-3);
}

/*========== LAYOUT ==========*/
.l-main {
  overflow: hidden;
}

.bd-container {
  max-width: 100%;
  width: calc(100% - 2rem);
  margin: 0 var(--mb-3);
}

.card {
  background-color: transparent;
  border: 2px rgba(255, 255, 255, 0.2);
  box-shadow: 0 0 5px rgba(255 , 255, 255, 0.5);
  backdrop-filter: blur(15px);
  margin: 12px auto; /* Anterior: 15px */
  height: auto; /* Permite que a altura se ajuste ao conteúdo */
  max-width: 360px; /* Anterior: 450px */
  transition: transform 0.3s;
}

.card:hover {
  transform: scale(1.05);
}

.card-body {
  padding: 12px; /* Anterior: 15px */
}

.card-title {
  font-family: "Caveat", cursive;
  font-weight: bold;
  font-size: 20px; /* Anterior: 25px */
}

.card-text {
  font-size: 14px; /* Anterior: 16px */
}

.bd-grid {
  display: grid;
  gap: 1.2rem; /* Anterior: 1.5rem */
}

.l-header {
  width: 100%;
  position: fixed;
  top: 0;
  left: 0;
  z-index: var(--z-fixed);
  background-color: transparent;
  transition: background-color 0.3s;
  backdrop-filter: blur(10px);
  border-radius: 5px;
  box-shadow: 0 0 15px rgba(255, 255, 255, 0.5);
}

/*========== NAV ==========*/
.nav {
  height: var(--header-height);
  display: flex;
  justify-content: space-between;
  align-items: center;
  background-color: transparent;
  position: relative;
}

.nav__menu {
  position: fixed;
  top: 0;
  left: -100%;
  width: 250px;
  height: 100%;
  background-color: var(--first-color);
  transition: left 0.3s ease;
  z-index: var(--z-fixed);
  padding-top: var(--header-height);
}

.nav__menu.show {
  left: 0;
}

.nav__logo{
  font-family: "Caveat", cursive;
  font-size: 30px;
}

.nav__logo:hover{
  color:  #321859;
}

.nav__toggle {
  font-size: 1.2rem; /* Anterior: 1.5rem */
  cursor: pointer;
  z-index: var(--z-fixed);
}

@media screen and (min-width: 768px) {
  .nav__menu {
    position: static;
    left: 0;
    width: auto;
    height: auto;
    background-color: transparent;
    padding-top: 0;
  }
  
  .nav__toggle {
    display: none;
  }
}

.nav__item {
  margin-bottom: var(--mb-3);
  font-size:18px
}

.nav__link, .nav__logo, .nav__toggle {
  color: var(--title-color);
  font-weight: var(--font-semi-bold);
}

.nav__link:hover{
  color:  #321859;
}

/*========== HOME ==========*/
.home__container {
  row-gap: .4rem; /* Anterior: .5rem */
}

.home__img {
  width: 100%;
  justify-self: center;
}

.home__title {
  font-size: 35px; /* Anterior: 30px */
  font-weight: var(--font-bold);
  margin-bottom: var(--mb-2);
}

.home__title2 {
  font-size: 26px; /* Anterior: 30px */
  font-weight: var(--font-bold);
  margin-bottom: var(--mb-2);
}

.home__description {
  margin-bottom: var(--mb-3);
  font-size: 23px; /* Anterior: 20px */
}
.home__description2 {
  margin-bottom: var(--mb-3);
  font-size: 20px; /* Anterior: 20px */
}

/*========== BUTTONS ==========*/
.button {
  display: inline-block;
  background-color: transparent;
  transition: background-color 0.3s;
  backdrop-filter: blur(10px);
  border-radius: 5px;
  box-shadow: 0 0 15px rgba(255, 255, 255, 0.5);
  color: #fff;
  padding: 0.8rem 1.2rem; /* Anterior: 1rem 1.5rem */
  border-radius: .4rem; /* Anterior: .5rem */
  font-weight: var(--font-semi-bold);
  transition: .3s;
  font-size: 16px
}

.button:hover {
  background-color: transparent;
}

.button-link {
  background: none;
  padding: 0;
  color: #321859;
}

.button:hover {
  background-color: transparent;
  color:  #321859;
}

/*========== SHARE ==========*/
.share__data {
  text-align: center;
}

.share__description {
  margin-bottom: var(--mb-2);
}

.share__img {
  width: 100%;
  justify-self: center;
}

/*========== DECORATION ==========*/
.decoration__container {
  grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
}

.decoration__data {
  text-align: center;
  padding: 0.8rem 0.8rem 1.6rem; /* Anterior: 1rem 1rem 2rem */
  background-color: var(--container-color );
  box-shadow: 0 2px 6px rgba(65,11,16,.15);
  border-radius: 1rem;
}

.decoration__data:hover {
  box-shadow: 0 3px 12px rgba(65,11,16,.15);
}



.decoration__imgg {
  font-size: 120%; /* Anterior: 150% */
  color: #fff;
  margin-left: 150px;
}

.decoration__title {
  font-size: var(--h3-font-size);
  margin-bottom: var(--mb-1);
  color: #161212;
}

/*========== ACCESSORIES ==========*/
.accessory__container {
  display: grid;  
  grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
  gap: 4.4rem; /* Anterior: 5.5rem */
  position: relative;
  padding: .2rem .6rem .6rem; /* Anterior: .25rem .75rem .75rem */
  border-radius: 1rem;
}

.accessory__content:hover {
  box-shadow: 0 3px 12px rgba(65, 11, 16, .15);
}

/*========== SEND GIFT ==========*/
.send {
  padding: 1.6rem 0.8rem;
}

.send__container {
  background-color: transparent;
  transition: background-color 0.3s;
  backdrop-filter: blur(10px);
  box-shadow: 0 0 15px rgba(255, 255, 255, 0.5);
  padding: 1.6rem;
  border-radius: 1.2rem;
}

.send__title, .send__description {
  color: #fff;
  font-size: 2rem;
  margin-bottom: 0.8rem;
  text-align: center;
}

.send__description {
  text-align: center;
  margin-bottom: var(--mb-4);
  font-size: 1rem;
}

.send__content {
  text-align: center;
  margin-bottom: 1.6rem;
}

.send__img {
  width: 100%;
  max-width: 480px;
  margin: 0 auto;
}



@media screen and (max-width: 768px) {
  .send__title {
    font-size: 0.8rem; /* Anterior: 1.0rem */
  }

  .send__description {
    font-size: 0.7rem; /* Anterior: 0.9rem */
  }

  .send__content {
    text-align: center;
    margin-bottom: 1.6rem; /* Anterior: 2rem */
  
  }

  .send__container {
    padding: 0.8rem; /* Anterior: 1rem */
    width: 80%;
    margin: 0;
    height: 400px; /* Anterior: 490px */
  }

  .carousel-item {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
  }

  .card {
    width: 20px; /* Anterior: 300px */
    height: auto;
    bottom: 40px
  }

  .decoration__imgg{
    font-size: 14px;
    top: 90px
  }

  .send__img {
    width: 100%;
    max-width: 480px; /* Anterior: 600px */
    margin: 0 auto;
  }
}

@media screen and (max-width: 576px) {
  .card {
    max-width: 100%;
  }

  .carousel-item {
    flex-direction: column;
    align-items: center;
  }
}

/*========== FOOTER ==========*/
.footer__container {
  grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
}

footer {
  width: 100%;
  height: auto;
  background-color: rgba(0,0,0, 0.4);
  transition: background-color 0.3s;
  border-radius: 10px;
  margin-top: 120px; /* Anterior: 150px */
}

.footer__logo {
  color: var(--title-color);
}

.footer__title {
  margin-bottom: var(--mb-2);
}

.footer__logo, .footer__title {
  font-size: 20px;
}

.footer__link {
 display: inline-block;
  margin-bottom: .6rem; /* Anterior: .75rem */
  color: var(--text-color);
  font-size: 18px
}

.footer__link:hover {
  color: #321859;
}

/*========== MEDIA QUERIES ==========*/
@media screen and (max-width: 768px) {
    .carousel-control-prev,
    .carousel-control-next {
        display: none; /* Oculta as setinhas em telas menores que 768px */
    }
    .accessory__container {
        display: grid; /* Usar grid para layout */
        grid-template-columns: repeat(2, 1fr); /* Duas colunas de igual largura */
        gap: 1rem; /* Espaçamento entre as colunas */
    }

    .accessory__content {
        width: auto; /* Permite que a largura se ajuste automaticamente */
        max-width: none; /* Remove o limite de largura */
    }

    .send__title{
      font-size: 20px;
    }
    

  .send__description {
    font-size: 0.7rem; /* Anterior: 0.9rem */
  }

  .send__content {
    text-align: center;
    margin-bottom: 0.2rem; /* Anterior: 2rem AQUIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIII*/
  }

  .send__container {
    padding: 0.8rem; /* Anterior: 1rem */
    width: 80%;
    margin: 0;
    height: 400px; /* Anterior: 490px */
  }

  .carousel-item {
    display: relative;
    justify-content: center;
    align-items: center;
    width: 100%;
    height: 250px;
    margin-top: 45px /* Anterior: 2rem AQUIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIII*/
  }

  .card {
    width: 100%;
    max-width: 300px; /* Anterior: 300px */
    margin: 0 auto;
    height: 180px    /* Anterior: 2rem AQUIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIII*/
  }

  .send__img {
    width: 100%;
    max-width: 480px; /* Anterior: 600px */
    margin: 0 auto;
  }

    .send__description{
      font-size: 17px;
    }

    .decoration__img{
      font-size: 24px;
    }

    .home__title, .home__title2{
      font-size: 20px;
    }

    .footer__description{
      font-size: 14px
    }

    .footer__logo, .footer__title {
  font-size: 18px;
}

.footer__link{
  font-size: 14px
}

    .home__description{
      font-size: 17px;
    }
    .button{
      font-size: 17px;
    }

    .nav__menu{
      background-color: rgba(40, 24, 79, 0.8);
      backdrop-filter: blur(25px);
    }
    .nav__list{
      background-color: rgba(40, 24, 79, 0.8);
      backdrop-filter: blur(25px);
      height: 900px;
    }
    .nav__item{
      margin-left: 20px;
      font-size: 20px;
    }

    .faq-answer{
      font-size: 17px;
    }
    .faq-question{
      font-size: 17px;
    }

    .container {
        flex-direction: column; /* Alinha os cards verticalmente */
        gap: 15px; /* Reduz o espaçamento entre os cards */
    }

    .card2 {
        width: 90%; /* Adapta a largura para caber em telas menores */
        height: auto; /* Permite altura dinâmica */
    }

    .card2 img {
        height: 200px; /* Reduz a altura da imagem */
    }

    .card-content {
        position: static; /* Remove posicionamento absoluto */
       
        text-align: center; /* Centraliza o texto */
    }

    .card-content h2 {
        font-size: 16px; /* Reduz o tamanho do título */
    }

    .card-content p {
        font-size: 12px; /* Reduz o tamanho do texto */
    }

    .card-left, .card-right {
        transform: scale(1); /* Remove escala dos cards laterais */
    }

    .card-center {
        transform: translateY(0); /* Remove efeito de subida */
        box-shadow: none; /* Remove sombra adicional */
    }

    .card-left:hover, .card-right:hover, .card-center:hover {
        transform: none; /* Remove efeitos de hover */
        box-shadow: none; /* Remove sombras de hover */
    }

    .section-title2 {
        margin-bottom: 50px; /* Ajusta espaçamento */
        font-size: 20px; /* Reduz o tamanho do título */
    }
}


@media screen and (min-width: 359px) {
  .home__img, .share__img, .send__img,.send__container {
    width: 100%;
  }


}

@media screen and (min-width: 576px) {
  .home__container, .share__container, .send__container {
    grid-template-columns: repeat(2,1fr);
    align-items: center;
  }

  .home__container, .send__container {
    padding: 4rem 0 0;
  }

  .home__img {
    order: 1;
  }

  .section-title-center, .share__data, .send__description {
    text-align: initial;
  }

  .home__img, .share__img, .send__img {
    width: 100%;
  }

  .share__img {
    order: -1;
  }
  
}

@media screen and (min-width: 768px) {
  body {
    margin: 0;
  }

  .section {
    padding-top: 5.6rem; /* Anterior: 7rem */
  }

  .nav {
    height: calc(var(--header-height) + 1.2rem); /* Anterior: 1.5rem */
  }

  .nav__list {
    display: flex;
    align-items: center;
  }

  .nav__item {
    margin-left: var(--mb-5);
    margin-bottom: 0;
  }

  .nav__toggle {
    font-size: 1.2rem; /* Anterior: 1.5rem */
    cursor: pointer;
    z-index: var(--z-fixed);
  }

  .change-theme {
    position: initial;
    margin-left: var(--mb-4);
  }

  .home__container, .send__container {
    padding: 5.6rem 2rem 0;
  }

  .share__container {
    padding: 0 2rem;
  }


  .accessory__container {
    grid-template-columns: repeat(3,180px);
    justify-content: center;
  }

  .accessory__content {
    width: 200px; /* Anterior: 260px */
  }

  .accessory__img {
    width: 200px; /* Anterior: 260px */
  }

  .accessory__title, .accessory__category {
    text-align: initial;
  }

  .accessory__button {
    padding: .6rem; /* Anterior: .75rem */
  }

  .send {
    background: none;
  }


  
}



/* PARA COMPUTADOR */

@media screen and (min-width: 968px) {
  .send__title {
    font-size: 2rem;  
    color: #fff;     
    text-align: center;
    margin-left: 400px;
    margin-bottom: 30px
  }

  .send__container {
    background-color: transparent;  /* Cor de fundo personalizada para 'send' */
    padding: 2rem;            
    width: 98%;
    height: 400px;
    
  }

  .send__description {
    font-size: 1.4rem;
   
    margin-left: 400px
  }




  .decoration__imgg{
    text-align: center;
    margin-left: 400px;
    font-size:  1.3rem;
  }

  .decoration__title{
    font-size: 18px
  }

  .decoration__img{
    font-size: 32px
  }
  .section-title{
    font-size: 28px;
    
  }

  
  
}


.container {
  max-width: 100%;
  margin: 0 auto;
  padding: 16px;
  background-color: transparent;
  margin-top: 80px; /* Anterior: 100px */
}

.faq {
  margin-top: 16px;
}

.faq-item {
  margin-bottom: 8px;
  box-shadow: 0 0 15px rgba(255, 255, 255, 0.3);
  border-radius: 5px;
}

.faq-question {
  background-color: transparent;
  padding: 12px;
  height: 72px;
  cursor: pointer;
  user-select: none;
  font-size: 18px;
}

.faq-answer {
  padding: 3px 12px;
  max-height: 0;
  opacity: 0;
  overflow: hidden;
  transition: max-height 0.3s ease, opacity 0.3s ease;
  display: block;
  box-shadow: 0 0 15px rgba(255, 255, 255, 0.1);
  height: 56px;
  font-size: 18px;
}

.faq-answer.show {
  max-height: 160px;
  opacity: 1;
}
.container {
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 20px;
}

.card2 {
    position: relative;
    width: 300px;
    height: 450px;  /* Aumenta a altura para acomodar o conteúdo abaixo da imagem */
    overflow: hidden;
    transition: transform 0.3s ease, box-shadow 0.3s ease, z-index 0.3s ease;
    border-radius: 10px;
}

.card2 img {
    width: 100%;
    height: 270px;  /* Reduz a altura da imagem para deixar espaço para o conteúdo abaixo */
    object-fit: cover;
    border-radius: 10px;
}

.card-content {
    position: absolute;
    bottom: 10px;
    left: 10px;
    color: white;
    z-index: 2;
    padding-top: 10px;  /* Distância entre a imagem e o texto */
    border-radius: 10px;
    width: 100%;  /* Ocupa toda a largura do card */
    padding: 10px;
}

.card-content h2 {
    margin: 0;
    font-size: 18px;
    font-weight: bold;
}

.card-content p {
    margin: 5px 0 0;
    font-size: 14px;
}

/* Card central */
.card-center {
    z-index: 2;
    transform: translateY(-20px);
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
}

.card-left, .card-right {
    transform: translateX(0) scale(0.9);
    z-index: 1;
}

/* Efeito ao passar o mouse */
.card-left:hover,
.card-right:hover {
    z-index: 3;
    transform: scale(1.05);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.4);
}

/* Efeito de subida no card do meio */
.card-center:hover {
    z-index: 3;
    transform: translateY(-40px); /* Sobe o card */
    box-shadow: 0 12px 25px rgba(0, 0, 0, 0.4);
}


.section-title2{
  margin-bottom: 100px;
  text-align: center;
}

.section-title3{
  margin-top: 70px;
  text-align: center;
  margin-bottom: 0
}
        </style>
    </head>
    <body>
      <div class="container-fluid">
        
    <video autoplay loop muted playsinline class="video-background">
        <source src="../img/video_teste.mp4" type="video/mp4">
        Seu navegador não suporta vídeos.
    </video>
        <!--========== SCROLL TOP ==========-->
        
        
        <!--========== HEADER ==========-->
        <header class="l-header" id="header">
            <nav class="nav bd-container">
                <a href="#" class="nav__logo">Entre Universos</a>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                      <li class="nav__item"><a href="#home" class="nav__link active-link">Início</a></li>
                      <li class="nav__item"><a href="#decoration" class="nav__link">O que encontrar</a></li>
                      <li class="nav__item"><a href="#duvida" class="nav__link">Perguntas</a></li>
                      

                        
                    </ul>
                </div>

                <div class="nav__toggle" id="nav-toggle">
    <i class='bx bx-grid-alt'></i>
</div>
            </nav>
        </header>

        <main class="l-main">
            <!--========== HOME ==========-->
            <section class="home" id="home">
                <div class="home__container bd-container bd-grid">
                    <div class="home__img">
                        <img src="assets/img/home.png" alt="">
                    </div>

                    <div class="home__data">
                        <h1 class="home__title">Seja bem-vindo, viajante de universos literários!</h1>
                        <p class="home__description">No Entre Universos você poderá encontrar o seu livro ideal e avaliá-lo!</p>
                        <a href="?p=home" class="button">Entrar</a>
                    </div>   
                </div>
            </section>

            <!--========== SHARE ==========-->
            <section class="share section bd-container" id="share">
                <div class="share__container bd-grid">
                    <div class="share__data">
                        <h2 class="home__title2">Autores, temos uma parte só para vocês!</h2>
                        <p class="home__description2">Aqui você poderá ter visibilidade publicando seu livro e o respectivo link de compra! Basta fazer o login:</p>
                        <a href="?p=autor/salvar" class="button">Cadastrar</a>
                    </div>

                    <div class="share__img">
                        <img src="assets/img/shared.png" alt="">
                    </div>
                </div>
            </section>

            <!--========== DECORATION ==========-->
            <section class="decoration section bd-container" id="decoration">
                <h2 class="section-title">O que vai encontrar?</h2>
                <div class="decoration__container bd-grid">
                    <div class="decoration__data">
                        <i class="bi bi-journal-check teste"></i>
                        <h3 class="decoration__title">Quiz Interativo</h3>
                        <a href="#accessory" class="button button-link">Saber Mais</a>
                    </div>

                    <div class="decoration__data">
                        <i class="bi bi-chat-left-text teste"></i>
                        <h3 class="decoration__title">Resenhas</h3>
                        <a href="#send_section" class="button button-link">Saber Mais</a>
                    </div>

                   
                </div>
            </section>

            <!--========== ACCESSORIES ==========-->
            <section class="accessory section bd-container" id="accessory">
                <h2 class="section-title2">Opções<br>Disponíveis</h2>

                <div class="container">
        <div class="card2 card-left">
            <img src="../img/so.png" alt="Card Esquerdo">
            <div class="card-content">
                <h2>Subgêneros</h2>
                <p>São divisões dentro de um gênero, como fantasia medieval ou fantasia urbana. Cada um tem seu estilo próprio. É como detalhes que deixam cada história ainda mais única!</p>
            </div>
        </div>
        <div class="card2 card-center">
            <img src="../img/co.png" alt="Card Central">
            <div class="card-content">
                <h2>Gêneros</h2>
                <p>É uma forma de organizar livros por tema e estilo, como aventura cheia de ação, fantasia com magia ou terror para dar medo. Assim, fica mais fácil escolher o tipo de história que você quer ler!</p>
            </div>
        </div>
        <div class="card2 card-right">
            <img src="../img/rro.png" alt="Card Direito">
            <div class="card-content">
                <h2>Características</h2>
                <p>São os pequenos detalhes que definem o livro, como os personagens, o clima e o jeito de contar a história, ou até mesmo plots twists. Elas ajudam a definir o estilo e o impacto de cada obra!</p>
            </div>
        </div>
    </div>
            </section>

            <!--========== SEND GIFT ==========-->
 
            <section class="send section" id="send_section">
    <div class="send__container bd-container bd-grid">
        <div class="send__content">
            <h2 class="section-title-center send__title">Avaliações</h2>
            <p class="send__description">O que acha de nos contar sua opinião sobre sua ultima leitura? Basta clicar no lápis para criar a sua avaliação!</p>
            <a href="?p=categoria/salvar" class="decoration__imgg">
                <i class="bi bi-pencil-fill"></i>
            </a>
        </div>

        <div class="send__img">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <?php
            include_once '../class/Categoria.php';
            $cat = new Categoria();
            $dados = $cat->listar(NULL);
            $active = 'active'; 
            $count = 0; // Contador para limitar a 2 avaliações

            if (!empty($dados)) {
                foreach ($dados as $mostrar) {
                    // Verifica se a tela é menor que 768px
                    if (isset($_SERVER['HTTP_USER_AGENT']) && preg_match('/Mobile|Android|iPhone|iPad/', $_SERVER['HTTP_USER_AGENT'])) {
                        // Exibe apenas uma avaliação em telas menores
                        if ($count < 1) {
                            ?>
                            <div class="carousel-item <?= $active ?>">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title"><?= $mostrar['nome'] ?></h5>
                                        <div class="card-text" id="descricaoTexto">
                                            <?php
                                            $descricao = $mostrar['descricao'];
                                            if (strlen($descricao) > 180) {
                                                echo substr($descricao, 0, 180) . '<span id="descricaoMais" style="display: none;">' . substr($descricao, 180) . '</span>';
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
                            $active = ''; // Remove a classe active após o primeiro item
                            $count++; // Incrementa o contador
                        }
                    } else {
                        // Exibe apenas as duas primeiras avaliações em telas maiores
                        if ($count < 4) {
                            ?>
                            <div class="carousel-item <?= $active ?>">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title"><?= $mostrar['nome'] ?></h5>
                                        <div class="card-text" id="descricaoTexto">
                                            <?php
                                            $descricao = $mostrar['descricao'];
                                            if (strlen($descricao) > 180) {
                                                echo substr($descricao, 0, 180) . '<span id="descricaoMais" style="display: none;">' . substr($descricao, 180) . '</span>';
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
                            $active = ''; // Remove a classe active após o primeiro item
                            $count++; // Incrementa o contador
                        }
                    }
                }
            }
            ?>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Próximo</span>
        </a>
    </div>
</div>
    </div>
</section>
<!--========== DUVIDAS FREQUENTES ==========-->
<h2 class="section-title3">Perguntas Frequentes</h2>
<div class="container" id="duvida">
    <div class="faq">
        <div class="faq-item">
            <div class="faq-question">O que é o Entre Universos? <span class="faq-icon"><i class="bi bi-plus" aria-hidden="true"></i></span></div>
            <div class="faq-answer">O Entre Universos é um site que visa ajudar leitores a encontrar sua próxima jornada com base em suas próprias escolhas. Nele, autores independentes ganham mais visibilidade ao disponibilizarem seus títulos no site.</div>
        </div>
        <div class="faq-item">
            <div class="faq-question">Como posso divulgar meus livros? <span class="faq-icon"><i class="bi bi-plus" aria-hidden="true"></i></span> </div>
            <div class="faq-answer">Basta fazer login como autor, ir até a página de cadastro do livro e preencher todas as informações necessárias para publicação.</div>
        </div>
        <div class="faq-item">
            <div class="faq-question">Como posso encontrar o livro que procuro? <span class="faq-icon"><i class="bi bi-plus" aria-hidden="true"></i></span> </div>
            <div class="faq-answer">Na seção de Quiz do site, você poderá responder a um breve questionário com suas preferências para a próxima leitura. Ao finalizá-lo, serão exibidos livros compatíveis com as suas escolhas.</div>
        </div>
        <div class="faq-item">
            <div class="faq-question">É possível usar pelo celular? <span class="faq-icon"><i class="bi bi-plus" aria-hidden="true"></i></span> </div>
            <div class="faq-answer">Sim, o nosso site é compatível com qualquer tamanho de tela.</div>
        </div>
    </div>
</div>


</main>

        <!--========== FOOTER ==========-->
        <footer class="footer section">
    <div class="footer__container bd-grid">
        <div class="footer__content">
            <h3 class="footer__title">
                <a href="#" class="footer__logo">Início</a>
            </h3>
            <p class="footer__description">Nosso site funciona como uma streaming de livros, ajudando leitores e autores independentes.</p>
        </div>

        <div class="footer__content">
            <h3 class="footer__title">Opções do Site</h3>
            <ul>
                <li><a href="#decoration" class="footer__link">O que temos</a></li>
                <li><a href="#accessory" class="footer__link">Quiz</a></li>
                <li><a href="#send_section" class="footer__link">Avaliações</a></li>
            </ul>
        </div>
    </div>
</footer>

        </div>
        <!--========== SCROLL REVEAL ==========-->
        <script src="https://unpkg.com/scrollreveal"></script>

        <!--========== MAIN JS ==========-->
        <script>
 /*==================== SHOW MENU ====================*/
 const showMenu = (toggleId, navId) => {
    const toggle = document.getElementById(toggleId),
          nav = document.getElementById(navId);
    
    if (toggle && nav) {
        toggle.addEventListener('click', () => {
            nav.classList.toggle('show'); // Adiciona ou remove a classe 'show'
        });
    }
}
showMenu('nav-toggle', 'nav-menu');

/*==================== REMOVE MENU MOBILE ====================*/
const navLink = document.querySelectorAll('.nav__link');

function linkAction() {
    // Remove a classe active-link de todos os links
    navLink.forEach(n => n.classList.remove('active-link'));
    
    // Adiciona a classe active-link ao link clicado
    this.classList.add('active-link');
    
    const navMenu = document.getElementById('nav-menu');
    navMenu.classList.remove('show-menu'); // Fecha o menu em dispositivos móveis
}

// Adiciona o evento de clique a cada link
navLink.forEach(n => n.addEventListener('click', linkAction));

/*==================== SCROLL SECTIONS ACTIVE LINK ====================*/
const sections = document.querySelectorAll('section[id]');

function scrollActive() {
    const scrollY = window.pageYOffset;

    sections.forEach(current => {
        const sectionHeight = current.offsetHeight;
        const sectionTop = current.offsetTop - 50;
        sectionId = current.getAttribute('id');

        if(scrollY > sectionTop && scrollY <= sectionTop + sectionHeight){
            document.querySelector('.nav__menu a[href*=' + sectionId + ']').classList.add('active-link');
        } else {
            document.querySelector('.nav__menu a[href*=' + sectionId + ']').classList.remove('active-link');
        }
    });
}
window.addEventListener('scroll', scrollActive);

/*==================== CHANGE BACKGROUND HEADER ====================*/ 
function scrollHeader(){
    const nav = document.getElementById('header')
    // When the scroll is greater than 200 viewport height, add the scroll-header class to the header tag
    if(this.scrollY >= 200) nav.classList.add('scroll-header'); else nav.classList.remove('scroll-header')
}
window.addEventListener('scroll', scrollHeader)

/*==================== SHOW SCROLL TOP ====================*/ 
function scrollTop(){
    const scrollTop = document.getElementById('scroll-top');
    // When the scroll is higher than 560 viewport height, add the show-scroll class to the a tag with the scroll-top class
    if(this.scrollY >= 560) scrollTop.classList.add('show-scroll'); else scrollTop.classList.remove('show-scroll')
}
window.addEventListener('scroll', scrollTop)


/*==================== SCROLL REVEAL ANIMATION ====================*/
const sr = ScrollReveal({
    distance: '30px',
    duration: 1800,
    reset: true,
});

sr.reveal(`.home__data, .home__img, 
           .decoration__data,
           .accessory__content,
           .footer__content`, {
    origin: 'top',
    interval: 200,
})

sr.reveal(`.share__img, .send__content`, {
    origin: 'left'
})

sr.reveal(`.share__data, .send__img`, {
    origin: 'right'
})

document.querySelectorAll('.faq-question').forEach(item => {
        item.addEventListener('click', () => {
            const answer = item.nextElementSibling;
            const icon = item.querySelector('i');

            // Alterna a classe show
            answer.classList.toggle('show');

            // Ajusta max-height para permitir a transição
            if (answer.classList.contains('show')) {
                answer.style.maxHeight = answer.scrollHeight + "px"; // Define a altura máxima para a altura real do conteúdo
                answer.style.opacity = 1; // Torna visível
                icon.classList.remove('bi-plus'); // Remove ícone de mais
                icon.classList.add('bi-dash'); // Adiciona ícone de menos
            } else {
                answer.style.maxHeight = 0; // Reseta a altura
                answer.style.opacity = 0; // Torna invisível
                icon.classList.remove('bi-dash'); // Remove ícone de menos
                icon.classList.add('bi-plus'); // Adiciona ícone de mais
            }
        });
    });

    // Mostrar o botão de scroll quando o usuário rolar para baixo
window.addEventListener('scroll', function() {
    const scrollTop = document.getElementById('scroll-top');
    if (this.scrollY >= 560) {
        scrollTop.style.display = 'block'; // Mostra o botão
    } else {
        scrollTop.style.display = 'none'; // Esconde o botão
    }
});

// Voltar ao topo da página ao clicar no botão
document.getElementById('scroll-top').addEventListener('click', function(e) {
    e.preventDefault(); // Previne o comportamento padrão do link
    window.scrollTo({
        top: 0,
        behavior: 'smooth' // Rolagem suave
    });
});
        </script>

        <!-- Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<a href="#" id="scroll-top" class="scroll-top">
    <i class="bi bi-arrow-up-circle"></i>
</a>
</body>
</html>