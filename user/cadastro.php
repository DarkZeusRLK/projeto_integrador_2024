<?php
include("../static/conexao.php");

if (isset($_POST['email']) && isset($_POST['senha'])) {
  $nome = $mysqli->real_escape_string($_POST['nome']);
  $telefone = $mysqli->real_escape_string($_POST['tel']);
  $email = $mysqli->real_escape_string($_POST['email']);
  $senha = $mysqli->real_escape_string($_POST['senha']);

  if (empty($email) || empty($senha)) {
    echo 'Preencha todos os campos.';
  } else {
    $sql_code = "SELECT * FROM cadastro WHERE email = '$email'";
    $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL" . $mysqli->error);
    $usuario = $sql_query->fetch_assoc();

    if ($usuario !== null && password_verify($senha, $usuario['senha'])) {
      if (!isset($_SESSION)) {
        session_start();
      }
      
      $_SESSION['id_usuario'] = $usuario['id_usuario'];
      $_SESSION['nome'] = $usuario['nome'];
      $_SESSION['telefone'] = $usuario['telefone'];
      $_SESSION['email'] = $usuario['email'];
      $_SESSION['senha'] = $usuario['senha'];

      echo 'success'; // Somente agora retorna 'success' se o login for bem-sucedido.
    } else {
      echo 'error'; // Retorna 'error' se o login falhar.
    }
  }
}
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
    <form action="cadastro.php" method="post">
        <div class="div">
            <img class="cadastro-de-clientes" src="https://c.animaapp.com/PLVHvckZ/img/cadastro-de-clientes.png" />
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
                <br>
                <br>
                <br>
                <br>
                <br>
                <p id="registre">Já possui uma conta? <a id="registre2" href="login.php">Entrar</a></p>
            </div> 
            
            <div class="div-wrapper">
                <button type="submit" class="text-wrapper-4">CADASTRAR</button>
            </div>
        </div>
    </form>
    <script>
          // Manipule o evento de envio do formulário
$('#cadastro').on('submit', function (e) {
    e.preventDefault(); // Impede o envio padrão do formulário

    // Coleta os dados do formulário
    var formData = $(this).serialize();

    // Faça uma solicitação AJAX para enviar os dados ao servidor
    $.ajax({
        type: 'POST',
        url: 'cadastro.php',
        data: formData,
        success: function (response) {
            if (response.trim() === 'success') { // Use trim para remover espaços em branco adicionais
                // Redirecione para a página de login após o cadastro bem-sucedido
                Swal.fire({
                    title: 'Sucesso',
                    text: 'Cadastro criado com sucesso!',
                    icon: 'success',
                    confirmButtonText: 'OK'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = 'login.php';
                    }
                });
            } else if (response.trim() === 'error_email_exists') {
                // Exiba uma notificação de erro específica para e-mail duplicado
                Swal.fire({
                    title: 'Erro',
                    text: 'E-mail já cadastrado. Por favor, use outro e-mail.',
                    icon: 'error',
                    confirmButtonText: 'OK'
                });
            } else {
                // Exiba uma notificação de erro padrão
                Swal.fire({
                    title: 'Erro',
                    text: 'Erro no cadastro!',
                    icon: 'error',
                    confirmButtonText: 'OK'
                });
            }
        },
        error: function () {
            Swal.fire({
                title: 'Erro',
                text: 'Erro na comunicação com o servidor.',
                icon: 'error',
                confirmButtonText: 'OK'
            });
        }
    });
});
            </script>
            <!-- Adicione a div para exibir a notificação -->
            <div id="notification" class="notification">
                <?php echo $mensagem; ?>
            </div>
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
