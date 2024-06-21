<?php
include("static/conexao.php");

$conn = new mysqli($hostname, $usuario, $senha, $bancodedados);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Inserir os dados do formulário no banco de dados
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['name'];
    $email = $_POST['email'];
    $telefone = $_POST['phone'];
    $servico = $_POST['service'];
    $descricao = $_POST['description'];
    $localizacao = $_POST['location'];

    $sql = "INSERT INTO servicos (nome, email, telefone, servico, descricao, localizacao) VALUES ('$nome', '$email', '$telefone', '$servico', '$descricao', '$localizacao')";

    if ($conn->query($sql) === TRUE) {
        echo "Serviço cadastrado com sucesso!";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
