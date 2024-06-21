document.addEventListener('DOMContentLoaded', () => {
    const form = document.querySelector('.contact-form form');
    const fileInput = document.querySelector('#file');
    const submitButton = document.querySelector('.contact-form button');

    form.addEventListener('submit', (e) => {
        e.preventDefault();

        // Validação Simples
        const name = document.querySelector('#name').value.trim();
        const email = document.querySelector('#email').value.trim();
        const message = document.querySelector('#message').value.trim();
        
        if (!name || !email || !message) {
            alert('Por favor, preencha todos os campos obrigatórios.');
            return;
        }

        // Validação de Email
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailPattern.test(email)) {
            alert('Por favor, insira um email válido.');
            return;
        }

        // Verificar tipo de arquivo
        const allowedExtensions = /(\.jpg|\.jpeg|\.png|\.pdf)$/i;
        if (fileInput.files.length > 0 && !allowedExtensions.exec(fileInput.value)) {
            alert('Por favor, envie apenas arquivos de imagem (jpg, jpeg, png) ou PDFs.');
            fileInput.value = '';
            return;
        }

        // Simular envio
        alert('Mensagem enviada com sucesso!');
        form.reset();
    });

    // Chat ao vivo (simulação)
    const liveChatButton = document.querySelector('.live-chat button');
    liveChatButton.addEventListener('click', () => {
        alert('Chat ao vivo iniciado! Um de nossos atendentes estará com você em breve.');
    });
});
