<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "usuarios_loja";

$conn = new mysqli($servidor, $usuario, $senha, $banco);

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

$nome = trim($_POST["nome"]);
$email = trim($_POST["email"]);
$senha = password_hash($_POST["senha"], PASSWORD_DEFAULT);

// Validar os campos antes de inserir
if (!empty($nome) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')";

    if ($conn->query($sql) === TRUE) {
        echo "Cadastro realizado com sucesso!";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "Preencha todos os campos corretamente!";
}

$conn->close();
?>


