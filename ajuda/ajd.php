<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato - Empresa</title>
    <link rel="stylesheet" href="ajd.css">
</head>
<body>
    <header>
        <div class="logo">Empresa</div>
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">Sobre</a></li>
                <li><a href="services.html">Serviços</a></li>
                <li><a href="contact.html">Contato</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="contact-intro">
            <h1>Fale Conosco</h1>
            <p>Estamos aqui para ajudar! Preencha o formulário abaixo para entrar em contato.</p>
        </section>

        <section class="contact-form">
            <form action="submit_form.php" method="post" enctype="multipart/form-data">
                <label for="name">Nome Completo</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>

                <label for="phone">Telefone</label>
                <input type="tel" id="phone" name="phone">

                <label for="subject">Assunto</label>
                <select id="subject" name="subject" required>
                    <option value="suporte">Suporte Técnico</option>
                    <option value="duvidas">Dúvidas sobre Produtos</option>
                    <option value="reclamacoes">Reclamações</option>
                    <option value="sugestoes">Sugestões</option>
                    <option value="outros">Outros</option>
                </select>

                <label for="message">Mensagem</label>
                <textarea id="message" name="message" rows="4" required></textarea>

                <label for="file">Adicione imagens ou documentos</label>
                <input type="file" id="file" name="file">

                <fieldset>
                    <legend>Preferência de Contato</legend>
                    <label><input type="checkbox" name="contact_preference" value="phone"> Telefone</label>
                    <label><input type="checkbox" name="contact_preference" value="email"> Email</label>
                    <label><input type="checkbox" name="contact_preference" value="whatsapp"> WhatsApp</label>
                </fieldset>

                <fieldset>
                    <legend>Horário Preferencial para Contato</legend>
                    <label><input type="radio" name="contact_time" value="morning"> Manhã (8h - 12h)</label>
                    <label><input type="radio" name="contact_time" value="afternoon"> Tarde (12h - 18h)</label>
                    <label><input type="radio" name="contact_time" value="evening"> Noite (18h - 22h)</label>
                </fieldset>

                <div class="captcha">
                    <!-- Implementar Captcha aqui -->
                </div>

                <button type="submit">Enviar Mensagem</button>
            </form>
        </section>

        <section class="contact-info">
            <h2>Informações de Contato Direto</h2>
            <p><strong>Endereço:</strong> Rua Exemplo, 123, Bairro, Cidade, Estado, CEP</p>
            <p><strong>Telefone:</strong> (00) 1234-5678</p>
            <p><strong>Email:</strong> contato@empresa.com</p>
            <p><strong>Horário de Atendimento:</strong> Segunda a Sexta, 8h - 18h</p>
        </section>

        <section class="map">
            <h2>Localização</h2>
            <!-- Inserir Google Maps aqui -->
        </section>

        <section class="faq">
            <h2>Perguntas Frequentes</h2>
            <!-- Lista de FAQ -->
        </section>

        <section class="live-chat">
            <button>Chat ao Vivo</button>
            <!-- Implementar chat ao vivo -->
        </section>

        <section class="social-media">
            <h2>Siga-nos nas Redes Sociais</h2>
            <a href="https://facebook.com">Facebook</a>
            <a href="https://instagram.com">Instagram</a>
            <a href="https://linkedin.com">LinkedIn</a>
            <a href="https://twitter.com">Twitter</a>
        </section>
    </main>

    <footer>
        <div class="footer-links">
            <a href="privacy.html">Política de Privacidade</a>
            <a href="terms.html">Termos de Uso</a>
            <a href="about.html">Sobre Nós</a>
        </div>
        <div class="newsletter">
            <label for="newsletter-email">Assine nossa Newsletter</label>
            <input type="email" id="newsletter-email" name="newsletter-email">
            <button type="submit">Inscrever-se</button>
        </div>
        <p>© 2024 Empresa. Todos os direitos reservados.</p>
    </footer>

    <script src="ajd.js"></script>
</body>
</html>
