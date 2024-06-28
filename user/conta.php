<?php
// upload.php

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['profile-pic'])) {
    $target_dir = "../imagens/";
    $target_file = $target_dir . basename($_FILES["profile-pic"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Verifique se o arquivo é uma imagem real
    $check = getimagesize($_FILES["profile-pic"]["tmp_name"]);
    if($check !== false) {
        $uploadOk = 1;
    } else {
        echo "O arquivo não é uma imagem.";
        $uploadOk = 0;
    }

    // Verifique se o arquivo já existe
    if (file_exists($target_file)) {
        echo "Desculpe, o arquivo já existe.";
        $uploadOk = 0;
    }

    // Verifique o tamanho do arquivo
    if ($_FILES["profile-pic"]["size"] > 500000) {
        echo "Desculpe, seu arquivo é muito grande.";
        $uploadOk = 0;
    }

    // Permitir certos formatos de arquivo
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
        echo "Desculpe, apenas arquivos JPG, JPEG, PNG e GIF são permitidos.";
        $uploadOk = 0;
    }

    // Verifique se $uploadOk está definido como 0 por um erro
    if ($uploadOk == 0) {
        echo "Desculpe, seu arquivo não foi enviado.";
    // Se tudo estiver ok, tente fazer o upload do arquivo
    } else {
        if (move_uploaded_file($_FILES["profile-pic"]["tmp_name"], $target_file)) {
            echo "O arquivo ". htmlspecialchars( basename( $_FILES["profile-pic"]["name"])). " foi enviado.";
            // Atualize o caminho da imagem de perfil no banco de dados do usuário aqui
        } else {
            echo "Desculpe, houve um erro ao enviar seu arquivo.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha Conta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="../css/ctt.css">
</head>
<body>
    <?php 
    include('../static/menu.php');
    ?>
    <main>
        <section class="profile-info">
            <h2>Informações do Perfil</h2>
            <div class="profile-details">
                <div class="profile-image">
                   <img src="../imagens/avatar.png" alt="100" height="80px">
                </div>
            </div>
            <!-- Outras informações do perfil aqui -->
        </section>

        <section class="account-settings">
            <h2>Informações da Conta</h2>
            <div class="profile-text">
                    <p><strong>Nome:</strong> Maria da Silva</p>
                    <p><strong>Email:</strong> maria.silva@email.com</p>
                    <p><strong>Telefone:</strong> (11) 91234-5678</p>
                </div>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Minha Empresa. Todos os direitos reservados.</p>
    </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</html>
