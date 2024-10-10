<?php
// Inicia a sessão
session_start();

// Conexão com o banco de dados
include("conexaoBD.php");

// Verifica se o ID do curso foi passado na URL
if (!isset($_GET['idCurso'])) {
    die("Curso não especificado.");
}

$idCurso = intval($_GET['idCurso']);

// Carregar os relatórios para o curso
$query = "SELECT * FROM relatorio WHERE idCurso = ?";
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, 'i', $idCurso);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

// Exibir os relatórios
while ($relatorio = mysqli_fetch_assoc($result)) {
    echo "<h3>" . htmlspecialchars($relatorio['descricao']) . "</h3>";
    // Adicione mais campos conforme necessário
}

// Fecha a conexão
mysqli_stmt_close($stmt);
mysqli_close($conn);
?>
