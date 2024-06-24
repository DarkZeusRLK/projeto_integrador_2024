<?php
include('../static/conexao.php');

$mensagem = ''; // Inicializa a variável de mensagem

if (isset($_POST['bt_nome'])) {
    $email = $_POST['bt_email'];
    $senha = password_hash($_POST['bt_senha'], PASSWORD_DEFAULT);
    $nome = $_POST['bt_nome'];
    $telefone = $_POST['bt_tel'];

    // Verifique se o email já está cadastrado
    $verificar_email = "SELECT * FROM cadastro WHERE email = ?";
    if ($stmt_verificar = $mysqli->prepare($verificar_email)) {
        $stmt_verificar->bind_param("s", $email);
        $stmt_verificar->execute();
        $result = $stmt_verificar->get_result();

        if ($result->num_rows > 0) {
            // Email já cadastrado, retorne uma mensagem de erro específica
            echo "error_email_exists";
            exit; // Certifique-se de que nenhum conteúdo adicional seja enviado
        } else {
            // Insira os dados no banco de dados
            $query = "INSERT INTO cadastro (nome, email, senha, telefone) VALUES (?, ?, ?, ?)";
            if ($stmt = $mysqli->prepare($query)) {
                $stmt->bind_param("ssss", $nome, $email, $senha, $telefone);
                if (!$stmt->execute()) {
                    echo "error_insert: " . $stmt->error;
                }
                $stmt->close();
            } else {
                echo "error_prepare_insert: " . $mysqli->error;
            }
        }
        $stmt_verificar->close();
    } else {
        echo "error_prepare_select: " . $mysqli->error;
    }
}
$mysqli->close();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.16/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.16/dist/sweetalert2.all.min.js"></script>
    <link rel="stylesheet" href="../css/globals.css" />
    <link rel="stylesheet" href="../css/cadastro.css" />
    <style>
        /* Estilo para a notificação */
        .notification {
            display: none;
            position: fixed;
            top: 0;
            left: 50%;
            transform: translateX(-50%);
            background-color: #4CAF50;
            color: white;
            text-align: center;
            padding: 10px;
            width: 300px;
            border-radius: 5px;
            z-index: 1000;
        }
    </style>
</head>
<body>
<nav class="navbar">
    <div class="logo">
        <img id="logo" src="../Imagens/logo (1).png" alt="Logo">   
    </div>
    <h1 class="text-logo"><b><a class="text-title" href="../index.php">IVAÍTOUR</a></b></h1>
    <ul class="topics">
        <li><a href="page/contato.php">Contato</a></li>
        <li><a href="page/patrocinadores.php">Patrocinadores</a></li>
        <li><a href="page/ajuda.php">Ajuda</a></li>
    </ul>
    <div class="account">
        <div class="avatar">
            <img src="../Imagens/avatar.png" alt="Avatar">
        </div>
        <div class="dropdown">
            <ul>
                <li><a href="#">Configurações</a></li>
                <li><a href="#">Ajuda</a></li>
                <?php
                    if (isset($_SESSION["nome"])) {
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
    <form action="../index.php" method="post">
        <div class="div">
           <h1 id="login_h1">Login de Clientes</h1>
            <div class="overlap-group">
                <label class="text-wrapper">Nome completo:</label>
                <input name="bt_nome" type="text" class="rectangle" />
            </div>
            <div class="overlap"> 
                <label class="text-wrapper">Telefone:</label>
                <input name="bt_tel" type="text" class="rectangle" placeholder="123-456-7890" />
            </div>
            <div class="overlap email-overlap">
                <label class="text-wrapper-2">Email:</label>
                <input name="bt_email" type="email" class="rectangle-2" />
            </div>
            <div class="overlap-2">
                <label class="text-wrapper-3">Senha:</label>
                <input name="bt_senha" type="password" class="rectangle-3" />
            </div> 
            
            <div class="div-wrapper">
                <button type="submit" class="text-wrapper-4">CADASTRAR</button>
            </div>
        </div>
    </form>
</div>
<br>
<br>
<div class="borda">

</div>
<?php
include("../static/footer.php");
?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</html>
