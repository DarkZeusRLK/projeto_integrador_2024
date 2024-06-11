<?php
    include('static/conexao.php');

        
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Início - </title>
    <link rel="stylesheet" href="css/style.css">
     <!-- ===== Link Swiper's CSS ===== -->
     <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <!-- ===== Fontawesome CDN Link ===== -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"/>
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
  body{
    background-color: #fff; /* Define a cor de fundo branca */
  background-image: url("Imagens/200w.gif"); /* Substitua 'sua-imagem.jpg' pelo caminho da sua imagem */
  background-repeat: no-repeat; /* Evita que a imagem de fundo seja repetida */
  background-position: center center;
  background-size: cover; /* Ajusta o tamanho da imagem de fundo para cobrir completamente o elemento pai */
  background-position-x: center;
  background-position-y: top;

  }
  
</style>
  </head>
<body>
<nav class="navbar">
  <div class="logo">
    <img id="logo" src="Imagens/logo.jpg" alt="Logo">   
    
  </div>
  <h1 class="text-logo"><b>SEM NOME DEFINIDO AINDA</b></h1>
  <ul class="topics">
    <li><a href="page/contato.php">Contato</a></li>
    <li><a href="page/patrocinadores.php">Patrocinadores</a></li>
    <li><a href="page/ajuda.php">Ajuda</a></li>
  </ul>
  <div class="account">
  <div class="avatar">
    <img src="Imagens/avatar.png" alt="Avatar">
  </div>
  <div class="dropdown">
    <ul>
      <li><a href="#">Settings</a></li>
      <li><a href="#">Help</a></li>
      <li><a href="#">Logout</a></li>
    </ul>
  </div>
</div>
</nav>

    <div class="container">
       <p class="text">Bem vindo ao SEM NOME DEFINIDO AINDA</p>
       
    <div class="parte2">
    <section>
    
    <div class="swiper mySwiper container">
      <div class="swiper-wrapper content">
        <div class="swiper-slide card">
          <div class="card-content">
            <div class="image">
             <img src="images/img1.jpg" alt=""> 
            </div>
            <div class="media-icons">
              <i class="fab fa-facebook"></i>
              <i class="fab fa-twitter"></i>
              <i class="fab fa-github"></i>
            </div>
            <div class="name-profession">
              <span class="name">Someone Name</span>
              <span class="profession">Web Developer</span>
            </div>
            <div class="rating">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
              <i class="far fa-star"></i>
            </div>
            <div class="button">
              <button class="aboutMe">About Me</button>
              <button class="hireMe">Hire Me</button>
            </div>
          </div>
        </div>
        <div class="swiper-slide card">
          <div class="card-content">
            <div class="image">
              <img src="images/img2.jpg" alt=""> 
            </div>
            <div class="media-icons">
              <i class="fab fa-facebook"></i>
              <i class="fab fa-twitter"></i>
              <i class="fab fa-github"></i>
            </div>
            <div class="name-profession">
              <span class="name">Someone Name</span>
              <span class="profession">Web Developer</span>
            </div>
            <div class="rating">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
              <i class="far fa-star"></i>
            </div>
            <div class="button">
              <button class="aboutMe">About Me</button>
              <button class="hireMe">Hire Me</button>
            </div>
          </div>
        </div>
        <div class="swiper-slide card">
          <div class="card-content">
            <div class="image">
           <img src="images/img3.jpg" alt=""> 
            </div>
            <div class="media-icons">
              <i class="fab fa-facebook"></i>
              <i class="fab fa-twitter"></i>
              <i class="fab fa-github"></i>
            </div>
            <div class="name-profession">
              <span class="name">Someone Name</span>
              <span class="profession">Web Developer</span>
            </div>
            <div class="rating">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
              <i class="far fa-star"></i>
            </div>
            <div class="button">
              <button class="aboutMe">About Me</button>
              <button class="hireMe">Hire Me</button>
            </div>
          </div>
        </div>
        <div class="swiper-slide card">
          <div class="card-content">
            <div class="image">
            <img src="images/img4.jpg" alt=""> 
            </div>
            <div class="media-icons">
              <i class="fab fa-facebook"></i>
              <i class="fab fa-twitter"></i>
              <i class="fab fa-github"></i>
            </div>
            <div class="name-profession">
              <span class="name">Someone Name</span>
              <span class="profession">Web Developer</span>
            </div>
            <div class="rating">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
              <i class="far fa-star"></i>
            </div>
            <div class="button">
              <button class="aboutMe">About Me</button>
              <button class="hireMe">Hire Me</button>
            </div>
          </div>
        </div>
        <div class="swiper-slide card">
          <div class="card-content">
            <div class="image">
              <img src="images/img5.jpg" alt=""> 
            </div>
            <div class="media-icons">
              <i class="fab fa-facebook"></i>
              <i class="fab fa-twitter"></i>
              <i class="fab fa-github"></i>
            </div>
            <div class="name-profession">
              <span class="name">Someone Name</span>
              <span class="profession">Web Developer</span>
            </div>
            <div class="rating">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
              <i class="far fa-star"></i>
            </div>
            <div class="button">
              <button class="aboutMe">About Me</button>
              <button class="hireMe">Hire Me</button>
            </div>
          </div>
        </div>
        <div class="swiper-slide card">
          <div class="card-content">
            <div class="image">
            <img src="images/img6.jpg" alt=""> 
            </div>
            <div class="media-icons">
              <i class="fab fa-facebook"></i>
              <i class="fab fa-twitter"></i>
              <i class="fab fa-github"></i>
            </div>
            <div class="name-profession">
              <span class="name">Someone Name</span>
              <span class="profession">Web Developer</span>
            </div>
            <div class="rating">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
              <i class="far fa-star"></i>
            </div>
            <div class="button">
              <button class="aboutMe">About Me</button>
              <button class="hireMe">Hire Me</button>
            </div>
          </div>
        </div>
        <div class="swiper-slide card">
          <div class="card-content">
            <div class="image">
             <img src="images/img7.jpg" alt=""> 
            </div>
            <div class="media-icons">
              <i class="fab fa-facebook"></i>
              <i class="fab fa-twitter"></i>
              <i class="fab fa-github"></i>
            </div>
            <div class="name-profession">
              <span class="name">Someone Name</span>
              <span class="profession">Web Developer</span>
            </div>
            <div class="rating">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
              <i class="far fa-star"></i>
            </div>
            <div class="button">
              <button class="aboutMe">About Me</button>
              <button class="hireMe">Hire Me</button>
            </div>
          </div>
        </div>
        <div class="swiper-slide card">
          <div class="card-content">
            <div class="image">
           <img src="images/img8.jpg" alt=""> 
            </div>
            <div class="media-icons">
              <i class="fab fa-facebook"></i>
              <i class="fab fa-twitter"></i>
              <i class="fab fa-github"></i>
            </div>
            <div class="name-profession">
              <span class="name">Someone Name</span>
              <span class="profession">Web Developer</span>
            </div>
            <div class="rating">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
              <i class="far fa-star"></i>
            </div>
            <div class="button">
              <button class="aboutMe">About Me</button>
              <button class="hireMe">Hire Me</button>
            </div>
          </div>
        </div>
        <div class="swiper-slide card">
          <div class="card-content">
            <div class="image">
            <img src="images/img9.jpg" alt=""> 
            </div>
            <div class="media-icons">
              <i class="fab fa-facebook"></i>
              <i class="fab fa-twitter"></i>
              <i class="fab fa-github"></i>
            </div>
            <div class="name-profession">
              <span class="name">Someone Name</span>
              <span class="profession">Web Developer</span>
            </div>
            <div class="rating">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
              <i class="far fa-star"></i>
            </div>
            <div class="button">
              <button class="aboutMe">About Me</button>
              <button class="hireMe">Hire Me</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
  </section>
  </div>
  <!-- Swiper JS -->
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 3,
      spaceBetween: 30,
      slidesPerGroup: 3,
      loop: true,
      loopFillGroupWithBlank: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  </script>
    </div>
    <div class="borda">
      <?php
        include("static/footer.php");
      ?>
    </div>
</body>
<script src="javascript/script.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/MorphSVGPlugin.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</html>