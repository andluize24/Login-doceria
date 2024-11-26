<?php
// Configuração do banco de dados
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'dados_doceria';

// Conectar ao banco de dados
$conn = new mysqli($host, $user, $password, $dbname);

// Verificar a conexão
if ($conn->connect_error) {
    die("Erro ao conectar ao MySQL: " . $conn->connect_error);
}

// Dados do formulário
$email = $_POST['email'] ?? '';
$senha = $_POST['senha'] ?? '';

// Inserir dados na tabela
$sql = "INSERT INTO usuarios (email, senha) VALUES ('$email', '$senha')";
if ($conn->query($sql) === TRUE) {
    echo "Cadastro realizado com sucesso!";
} else {
    echo "Erro ao cadastrar: " . $conn->error;
}

// Fechar a conexão
$conn->close();
?>