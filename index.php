<?php
include('static/conexao.php');

if (!isset($_SESSION)) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Início - IvaíTour</title>
    <link rel="shortcut icon" href="Imagens/logo (1).png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <!-- ===== Link Swiper's CSS ===== -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <!-- ===== Fontawesome CDN Link ===== -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #fff;
            background-image: url("Imagens/Vegetação.gif");
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
            background-position-x: center;
            background-position-y: top;
        }
    </style>
</head>

<body>
    <nav class="navbar">
        <div class="logo">
            <img id="logo" src="Imagens/logo (1).png" alt="Logo">
        </div>
        <h1 class="text-logo"><b><a class="text-title" href="index.php">IvaíTour</a></b></h1>
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
                    <?php
                        if(isset($_SESSION['nome'])){
                            echo "<li><a href='#'>Configurações</a></li>";
                        }
                    ?>
                    <li><a href="#">Ajuda</a></li>
                    <?php
                    if (isset($_SESSION["id_usuario"])) {
                        echo "<li><a href='#'>Sair</a></li>";
                    } else {
                        echo "<li><a href='user/login.php'>Entrar</a></li>";
                    }
                    ?>
                </ul>
            </div>
        </div>
    </nav>


    <div class="container">
        <p class="text">Bem vindo ao <p class="text2">IVAÍTOUR</p></p>
    </div>


    <div class="teste">
        <div class="quadrado">
            <h1 class="text-quadrado">Pontos Turísticos</h1>
            <h2 class="text2-quadrado">Sua encosta de 800 metros garante uma vista incrível do vale, sem falar no belíssimo pôr do sol, que garantirá ao turista um belo registro fotográfico. Situada em propriedade particular, a Caverna Terra Boa é cercada pelo mistério de ter servido como esconderijo para o Marechal Lott, durante o regime militar.Cachoeira, grutas, cavernas. Rio Branco do Ivaí é um prato cheio para o turista que aprecia passeios na natureza, regados a muita história e cultura local. Não deixe de experimentar os sabores da gastronomia local.A relíquia legítima de São Francisco de Assis, na Paróquia Imaculada Conceição, atrai fiéis e torna-se um exemplo de renovação da fé presente na cidade.</h2>
            <div class="card" style="width: 30rem; height: 30rem">
                <img class="img-fluid" id="card-1" src="Imagens/Rio_branco_do_ivai.jpg" alt="...">
            </div>
        </div>
    </div>

        <div class="teste2">
            <div class="quadrado2">
                <h2 class="text2-quadrado2"> Situada no terceiro planalto paranaense, distante 340 quilômetros de Curitiba, a vila de Faxinal do Céu destaca-se pela paisagem diferenciada repleta de córregos, lagos e araucárias (vegetação natural da região) e por abrigar uma grande coleção de plantas exóticas e ornamentais de diversos lugares do mundo, principalmente da Ásia e América do Norte. A ênfase é para as coníferas e folhosas caducifólias, numa área de 16 ha (160.000 m2) denominada Horto Faxinai do Céu. A história do lugar começou com a construção da maior usina da Copei em 1975, na região do médio Iguaçu, município de Pinhão, na época conhecida como Usina de Foz do Areia</h2>
                <div class="card" style="width: 30rem; height: 30rem">
                    <img class="img-fluid" id="card-1" src="Imagens/Faxinal_do_ceu.jpg" alt="...">
                </div>
            </div>
        </div>


            <!-- Parte de avaliações -->
            <div class="parte2">
                <section class="reviews">
                    <div class="swiper mySwiper container">
                        <div class="swiper-wrapper content">
                            <div class="swiper-slide card">
                                <div class="card-content">
                                    <div class="image">
                                        <img src="Imagens/bandido.jpg" alt="">
                                    </div>
                                    <div class="media-icons">
                                        <i class="fab fa-facebook"></i>
                                        <i class="fab fa-twitter"></i>
                                        <i class="fab fa-github"></i>
                                    </div>
                                    <div class="name-profession">
                                        <span class="profession">Matheus Vital</span>
                                    </div>
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                    <p>Um dos melhores sistemas web que já vi!! Extremamente Funcional e adaptável, excelente nota 10!!</p>
                                    <div class="button">
                                        <button class="aboutMe">Sobre Mim</button>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide card">
                                <div class="card-content">
                                    <div class="image">
                                        <img src="Imagens/veio.jpg" alt="">
                                    </div>
                                    <div class="media-icons">
                                        <i class="fab fa-facebook"></i>
                                        <i class="fab fa-twitter"></i>
                                        <i class="fab fa-github"></i>
                                    </div>
                                    <div class="name-profession">
                                        <span class="profession">Joaquim Pedro</span>
                                    </div>
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <p>Excelente site, uma coisa funcional e rápida de se aprender a usar!!</p>
                                    <div class="button">
                                        <button class="aboutMe">Sobre Mim</button>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide card">
                                <div class="card-content">
                                    <div class="image">
                                        <img src="Imagens/jovem.webp" alt="">
                                    </div>
                                    <div class="media-icons">
                                        <i class="fab fa-facebook"></i>
                                        <i class="fab fa-twitter"></i>
                                        <i class="fab fa-github"></i>
                                    </div>
                                    <div class="name-profession">
                                        <span class="profession">Luiz Eduardo</span>
                                    </div>
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                    <p>Um dos melhores sistemas web que já vi!! Extremamente Funcional e adaptável, excelente nota 10!!</p>
                                    <div class="button">
                                        <button class="aboutMe">Sobre Mim</button>
                                    </div>
                                </div>
                            </div>
                            <!-- Mais avaliações aqui -->
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </section>
            </div>

            <div class="borda">
                <?php
                include("static/footer.php");
                ?>
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
            <script src="javascript/script.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>

</html>