<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Serviços</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar Profissional</title>
    <link rel="stylesheet" href="css/luiz.css">
</head>
<body>
    <header class="navbar">
        <div class="logo">
            <img src="logo.png" alt="Logo">
        </div>
        <ul class="topics">
            <li><a href="#">Home</a></li>
            <li><a href="#">Sobre</a></li>
            <li><a href="#">Serviços</a></li>
        </ul>
    </header>
</body>
</html>

    <main>
        <form id="contactForm" action="submit_service.php" method="post">
            <div class="svgContainer">
                <div>
                    <svg class="mySVG" viewBox="0 0 200 200">
                        <!-- SVG Content -->
                    </svg>
                </div>
            </div>
            <div class="inputGroup">
                <label for="n">Nome Completo</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="inputGroup">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="inputGroup">
                <label for="phone">Telefone</label>
                <input type="text" id="phone" name="phone" required>
            </div>
            <div class="inputGroup">
                <label for="service">Serviço Oferecido</label>
                <input type="text" id="service" name="service" required>
            </div>
            <div class="inputGroup">
                <label for="description">Descrição do Serviço</label>
                <textarea id="description" name="description" rows="4" required></textarea>
            </div>
            <div class="inputGroup">
                <label for="location">Localização</label>
                <input type="text" id="location" name="location" required>
            </div>
            <button type="submit">Cadastrar Serviço</button>
        </form>
    </main>
    <footer id="footer-contato">
        <p>&copy; 2024 Localizador de Espaços de Trabalho. Todos os direitos reservados.</p>
    </footer>
</body>
</html>
