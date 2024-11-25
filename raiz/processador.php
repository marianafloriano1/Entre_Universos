<?php
// processa_quiz.php
header('Content-Type: application/json');

// Conexão com o banco de dados (ajuste conforme necessário)
$servername = "localhost";
$username = "seu_usuario";
$password = "sua_senha";
$dbname = "seu_banco_de_dados";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Recebendo os dados do formulário
$genero = $_POST['genero'];
$subgenero = $_POST['subgenero'];
$caracteristica = $_POST['caracteristica'];

// Consultando o banco de dados
$sql = "SELECT titulo, capa FROM livros WHERE genero = ? AND subgenero = ? AND caracteristica = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $genero, $subgenero, $caracteristica);
$stmt->execute();
$result = $stmt->get_result();

$livros = [];
while ($row = $result->fetch_assoc()) {
    $livros[] = $row;
}

$stmt->close();
$conn->close();

// Retornando os dados em formato JSON
echo json_encode($livros);
?>
