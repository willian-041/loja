<?php
/*conexão com o banco*/
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "usuarios_loja";

$conn = new mysqli($servidor,$usuario,$senha,$banco);

/*verifica conexão*/
if ($conn->connect_error) {
    die("Falha na conexão:" . $conn->connect_error);
}
/*pega os dados do formulário*/
$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = password_hash($_POST["senha"], PASSWORD_DEFAULT);

/*insere os dados na tabela*/
$sql = "INSET  INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')"; 

if ($conn->query($sql)=== TRUE) {
    echo "Cadastro realizado com sucesso!";
} else {
    echo "Eroo:" . $sql . "br" . $conn -> error;
}

/*fecha conexão*/
$conn -> close();
?>

