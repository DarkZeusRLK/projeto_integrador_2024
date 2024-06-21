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
        body {
            background-color: #fff;
            background-image: url("Imagens/200w.gif");
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
            background-position-x: center;
            background-position-y: top;
        }
        .middle-content {
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 8px;
            margin: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .middle-content h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .middle-content p {
            text-align: justify;
            line-height: 1.6;
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
        <li><a href="ajuda/ajd.php">Ajuda</a></li>
    </ul>
    <div class="account">
        <div class="avatar">
            <img src="Imagens/avatar.png" alt="Avatar">
        </div>
        <div class="dropdown">
            <ul>
                <li><a href="#">Configurações</a></li>
                <li><a href="ajuda/ajd.php">Ajuda</a></li>
                <li><a href="#">Sair</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <p class="text">Bem vindo ao SEM NOME DEFINIDO AINDA</p>
</div>

<!-- Parte do meio (conteúdo explicativo) -->
<div class="middle-content">
    <h2>Como Melhorar a Publicidade de Sua Empresa</h2>
    <p>A publicidade eficaz é fundamental para o crescimento de qualquer empresa. Aqui estão algumas dicas importantes para melhorar a publicidade da sua empresa:</p>
    <h3>1. Conheça Seu Público-Alvo</h3>
    <p>Entender quem são seus clientes potenciais é crucial. Realize pesquisas de mercado para identificar as necessidades, desejos e comportamentos do seu público-alvo. Isso permitirá criar campanhas publicitárias mais direcionadas e eficazes.</p>
    <h3>2. Utilize Múltiplos Canais de Comunicação</h3>
    <p>Não dependa de um único canal para promover sua empresa. Utilize uma combinação de mídias sociais, e-mail marketing, SEO, publicidade paga, entre outros. Isso aumenta suas chances de alcançar um público mais amplo.</p>
    <h3>3. Crie Conteúdo de Qualidade</h3>
    <p>O conteúdo é rei. Invista na criação de conteúdo relevante e de alta qualidade que atraia e engaje seu público. Isso pode incluir blogs, vídeos, infográficos e postagens em redes sociais.</p>
    <h3>4. Use Anúncios Pagos de Forma Inteligente</h3>
    <p>Os anúncios pagos, como Google Ads e Facebook Ads, podem ser muito eficazes se usados corretamente. Defina seu orçamento, escolha palavras-chave relevantes e segmente seu público com precisão.</p>
    <h3>5. Monitore e Analise Seus Resultados</h3>
    <p>Utilize ferramentas de análise para monitorar o desempenho das suas campanhas publicitárias. A partir dos dados coletados, ajuste suas estratégias para melhorar continuamente os resultados.</p>
    <h3>6. Invista em SEO</h3>
    <p>Otimização para motores de busca (SEO) ajuda sua empresa a aparecer nos resultados orgânicos do Google. Trabalhe com palavras-chave relevantes, otimize seu site e crie backlinks de qualidade.</p>
    <h3>7. Interaja com Seu Público</h3>
    <p>Interaja com seus clientes nas redes sociais e outras plataformas. Responda a comentários, mensagens e avaliações. Isso mostra que sua empresa se importa com os clientes e está disposta a ouvi-los.</p>
    <h3>8. Ofereça Promoções e Descontos</h3>
    <p>Promoções e descontos atraem clientes e incentivam compras. Use essas estratégias em momentos estratégicos para aumentar as vendas e fidelizar clientes.</p>
</div>

<!-- Parte de avaliações -->
<div class="parte2">
    <section>
        <div class="swiper mySwiper container">
            <div class="swiper-wrapper content">
                <div class="swiper-slide card">
                    <div class="card-content">
                        <div class="image">
                            <img src="Imagens/].jfif" alt=""> 
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/MorphSVGPlugin.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>
</html>
