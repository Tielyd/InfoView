<?php
include("conexaoBD.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nomeCurso = $_POST['nomeCurso'];

    // Inserir o curso no banco de dados
    $sql = "INSERT INTO curso (nomeCurso) VALUES ('$nomeCurso')";

    if ($conn->query($sql) === TRUE) {
        echo "Curso cadastrado com sucesso!";
    } else {
        echo "Erro ao cadastrar o curso: " . $conn->error;
    }

    $conn->close();
}
?>
