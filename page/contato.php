<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>
    <link rel="stylesheet" href="../css/style.css">
    <style>
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
    <nav id="navbar-contato" class="navbar">
        <div class="logo">
            <img src="logo.png" alt="Logo">
        </div>
        <div class="text-logo">
            <p>Contato</p>
        </div>
        <ul class="topics">
            <li><a href="#">Home</a></li>
            <li><a href="#">Sobre</a></li>
            <li><a href="#">Serviços</a></li>
            <li><a href="#">Contato</a></li>
        </ul>
        <div class="account">
            <div class="avatar">
                <img src="avatar.png" alt="Avatar">
            </div>
            <div class="dropdown">
                <ul>
                    <li><a href="#">Perfil</a></li>
                    <li><a href="#">Configurações</a></li>
                    <li><a href="#">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        <section">
            <div class="card">
                <div class="card-content">
                    <div class="svgContainer">
                        <div>
                            <img class="mySVG" src="contact.svg" alt="Contact SVG">
                        </div>
                    </div>
                    <h2>Entre em Contato Conosco</h2>
                    <form id="contactForm">
                        <div class="inputGroup">
                            <label for="name">Nome</label>
                            <input type="text" id="name" name="name" required>
                        </div>
                        <div class="inputGroup">
                            <label for="email">E-mail</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div class="inputGroup">
                            <label for="message">Mensagem</label>
                            <textarea id="message" name="message" rows="5" required></textarea>
                        </div>
                        <button type="submit">Enviar</button>
                    </form>
                </div>
            </div>
        </section>
    </main>

    <footer class="footer">
        <p>© 2024 Todos os direitos reservados.</p>
    </footer>

</body>

</html>
