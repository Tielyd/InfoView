<?php include("header.php"); ?>
<?php


// Configurações do curso
$curso = "Curso de Informática";
$disciplinas = [
    'Segunda-feira' => ['Programação', 'Matemática'],
    'Terça-feira' => ['Banco de Dados', 'Redes de Computadores'],
    'Quarta-feira' => ['Sistemas Operacionais', 'Algoritmos'],
    'Quinta-feira' => ['Engenharia de Software', 'Teoria da Computação'],
    'Sexta-feira' => ['Desenvolvimento Web', 'Segurança da Informação']
];

// Obtém a data atual
$dataAtual = new DateTime();
$semanaAtual = $dataAtual->format("W");

// Função para exibir o calendário
function exibirCalendario($semana, $disciplinas) {
    echo "<h2>Relatório Semanal</h2>";
    echo "<table border='1'>";
    echo "<tr><th>Dia da Semana</th><th>Disciplinas</th></tr>";
    
    foreach ($disciplinas as $dia => $materias) {
        echo "<tr>";
        echo "<td>{$dia}</td>";
        echo "<td>" . implode(', ', $materias) . "</td>";
        echo "</tr>";
    }
    
    echo "</table>";
}

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatório Semanal - <?= $curso ?></title>
    <link rel="stylesheet" href="style.css"> <!-- Opcional -->
</head>
<body>
    <div class="container">
        <h1><?= $curso ?></h1>
        <h2>Semana <?= $semanaAtual ?></h2>
        <?php exibirCalendario($semanaAtual, $disciplinas); ?>
    </div>
</body>
</html>


<?php include "footer.php"; ?>