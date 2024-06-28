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

    // Verificar se houve um envio de arquivo
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["profile-pic"])) {
        $target_dir = "../uploads/";
        $target_file = $target_dir . basename($_FILES["profile-pic"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Verifica se o arquivo é uma imagem real ou um arquivo de imagem falsa
        if (isset($_POST["submit"])) {
            $check = getimagesize($_FILES["profile-pic"]["tmp_name"]);
            if ($check !== false) {
                echo "Arquivo é uma imagem - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "Arquivo não é uma imagem.";
                $uploadOk = 0;
            }
        }

        // Verifique se o arquivo já existe
        if (file_exists($target_file)) {
            echo "Desculpe, o arquivo já existe.";
            $uploadOk = 0;
        }

        // Verifica o tamanho do arquivo
        if ($_FILES["profile-pic"]["size"] > 500000) {
            echo "Desculpe, seu arquivo é muito grande.";
            $uploadOk = 0;
        }

        // Permitir apenas certos formatos de arquivo
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif") {
            echo "Desculpe, apenas arquivos JPG, JPEG, PNG e GIF são permitidos.";
            $uploadOk = 0;
        }

        // Verifica se $ uploadOk está definido como 0 por um erro
        if ($uploadOk == 0) {
            echo "Desculpe, seu arquivo não foi carregado.";
            // se tudo estiver correto, tenta carregar o arquivo
            mensagem
