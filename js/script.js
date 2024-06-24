document.addEventListener('DOMContentLoaded', function() {
    const textContent = document.querySelector('.text-content p');
    const librasImage = document.getElementById('librasImage');

    textContent.innerHTML = textContent.innerText.split(' ').map(word => {
        return `<span class="translatable">${word}</span>`;
    }).join(' ');

    document.querySelectorAll('.translatable').forEach(word => {
        word.addEventListener('mouseover', function() {
            // Troque o src para a imagem apropriada da palavra em Libras
            const imagePath = `libras_images/${this.innerText.toLowerCase()}.png`;
            librasImage.src = imagePath;
            librasImage.style.display = 'block';
        });

        word.addEventListener('mouseout', function() {
            librasImage.style.display = 'none';
        });
    });
});
