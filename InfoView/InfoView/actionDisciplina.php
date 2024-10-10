<?php
include("conexaoBD.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cursoId = $_POST['curso'];
    $nomeDisciplina = $_POST['nomeDisciplina'];

    // Inserir a disciplina no banco de dados associada ao curso
    $sql = "INSERT INTO disciplina (nomeDisciplina, idCurso) VALUES ('$nomeDisciplina', '$cursoId')";

    if ($conn->query($sql) === TRUE) {
        echo "Disciplina cadastrada com sucesso!";
    } else {
        echo "Erro ao cadastrar a disciplina: " . $conn->error;
    }

    $conn->close();
}
?>
