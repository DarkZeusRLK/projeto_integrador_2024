<?php
    include('static/conexao.php');


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Início - </title>
</head>
<body>
<div vw class="enabled">
        <div vw-access-button class="active"></div>
        <div vw-plugin-wrapper>
            <div class="vw-plugin-top-wrapper"></div>
        </div>
    </div>
    <div class="card">
        <div class="text-content">
            <p>Este é um exemplo de texto onde cada palavra será traduzida em Libras ao passar o mouse.</p>
            <p>Teste</p>
            <br>
            <p>Teste 2</p>
        </div>
        <div class="libras-doll">
            <img src="boneco.png" alt="Boneco em Libras" id="librasImage">
        </div>
    </div>
    <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
    <script>
        new window.VLibras.Widget('https://vlibras.gov.br/app');
    </script>
</body>
</html>