<?php include "header.php"; ?>

<?php
    // Bloco para declaração de variáveis PHP
    $bancoDeDados = $filosofia1 = $geografia1 = $gestaoDeWebSites = $historia1 = $linguaEspanhola1 = $linguaPortuguesa3 = $matematica3 = $progWeb1 = $sociologia1 = "";
    $erroPreenchimento = false;

    // Verifica o método de requisição do formulário
    if($_SERVER["REQUEST_METHOD"] == "POST"){

        // Validação do campo bancoDeDados
        if(empty($_POST["bancoDeDados"])){
            echo "<div class='alert alert-warning text-center'>O campo <strong>BANCO DE DADOS</strong> é obrigatório!</div>";
            $erroPreenchimento = true;
        } else {
            $bancoDeDados = filtrar_entrada($_POST["bancoDeDados"]);
        }

        // Validação do campo filosofia1
        if(empty($_POST["filosofia1"])){
            echo "<div class='alert alert-warning text-center'>O campo <strong>filosofia1</strong> é obrigatório!</div>";
            $erroPreenchimento = true;
        } else {
            $filosofia1 = filtrar_entrada($_POST["filosofia1"]);
        }

        // Validação do campo geografia1
        if(empty($_POST["geografia1"])){
            echo "<div class='alert alert-warning text-center'>O campo <strong>geografia1</strong> é obrigatório!</div>";
            $erroPreenchimento = true;
        } else {
            $geografia1= filtrar_entrada($_POST["geografia1"]);
        }

        // Validação do campo gestaoDeWebSites
        if(empty($_POST["gestaoDeWebSites"])){
            echo "<div class='alert alert-warning text-center'>O campo <strong>GESTÃO DE WEB SITES</strong> é obrigatório!</div>";
            $erroPreenchimento = true;
        } else {
            $gestaoDeWebSites = filtrar_entrada($_POST["gestaoDeWebSites"]);
        }

        // Validação do campo historia1
        if(empty($_POST["historia1"])){
            echo "<div class='alert alert-warning text-center'>O campo <strong>HISTÓRIA</strong> é obrigatório!</div>";
            $erroPreenchimento = true;
        } else {
            $historia1 = filtrar_entrada($_POST["historia1"]);
        }

        // Validação do campo linguaEspanhola1
        if(empty($_POST["linguaEspanhola1"])){
            echo "<div class='alert alert-warning text-center'>O campo <strong>LÍNGUA ESPANHOLA</strong> é obrigatório!</div>";
            $erroPreenchimento = true;
        } else {
            $linguaEspanhola1 = filtrar_entrada($_POST["linguaEspanhola1"]);
        }

        // Validação do campo linguaPortuguesa3
        if(empty($_POST["linguaPortuguesa3"])){
            echo "<div class='alert alert-warning text-center'>O campo <strong>LÍNGUA PORTUGUESA</strong> é obrigatório!</div>";
            $erroPreenchimento = true;
        } else {
            $linguaPortuguesa3 = filtrar_entrada($_POST["linguaPortuguesa3"]);
        }

        // Validação do campo matematica3
        if(empty($_POST["matematica3"])){
            echo "<div class='alert alert-warning text-center'>O campo <strong>MATEMÁTICA</strong> é obrigatório!</div>";
            $erroPreenchimento = true;
        } else {
            $matematica3 = filtrar_entrada($_POST["matematica3"]);
        }

        // Validação do campo progWeb1
        if(empty($_POST["progWeb1"])){
            echo "<div class='alert alert-warning text-center'>O campo <strong>PROGRAMAÇÃO WEB</strong> é obrigatório!</div>";
            $erroPreenchimento = true;
        } else {
            $progWeb1= filtrar_entrada($_POST["progWeb1"]);
        }

        // Validação do campo sociologia1
        if(empty($_POST["sociologia1"])){
            echo "<div class='alert alert-warning text-center'>O campo <strong>sociologia1</strong> é obrigatório!</div>";
            $erroPreenchimento = true;
        } else {
            $sociologia1 = filtrar_entrada($_POST["sociologia1"]);
        }


        // Se não houverem erros de preenchimento, exibe os dados cadastrados!
        if(!$erroPreenchimento){

            // Armazena a QUERY na variável $inserirUsuario
            $inserirUsuario = "INSERT INTO relatorioInfo3 (bancoDeDados, filosofia1, geografia1, gestaoDeWebSites, historia1, linguaEspanhola1, linguaPortuguesa3, matematica3, progWeb1, sociologia1) VALUES ('$bancoDeDados', '$filosofia1','$geografia1', '$gestaoDeWebSites', '$historia1','$linguaEspanhola1', '$linguaPortuguesa3', '$matematica3', '$progWeb1', '$sociologia1')";

            // Inclui o arquivo de conexão com o banco de dados
            include "conexaoBD.php";

            // Utiliza a função mysqli_query() para executar a QUERY
            if(mysqli_query($conn, $inserirUsuario)){
                echo "
                    <div class='alert alert-success text-center'><strong>Relatório</strong> cadastrado com sucesso!</div>
                    <div class='container mt-3'>
                        <div class='table-responsive'>
                            <table class='table'>
                                <tr>
                                    <th>BANCO DE DADOS</th>
                                    <td>$bancoDeDados</td>
                                </tr>
                                <tr>
                                    <th>FILOSOFIA I</th>
                                    <td>$filosofia1</td>
                                </tr>
                                <tr>
                                    <th>GEOGRAFIA I</th>
                                    <td>$geografia1</td>
                                </tr>
                                <tr>
                                    <th>GESTÃO DE WEB SITES</th>
                                    <td>$gestaoDeWebSites</td>
                                </tr>
                                <tr>
                                    <th>HISTÓRIA I</th>
                                    <td>$historia1</td>
                                </tr>
                                <tr>
                                    <th>LÍNGUA ESPANHOLA I</th>
                                    <td>$linguaEspanhola1</td>
                                </tr>
                                <tr>
                                    <th>LÍNGUA PORTUGUESA III</th>
                                    <td>$linguaPortuguesa3</td>
                                </tr>
                                <tr>
                                    <th>MATEMÁTICA III</th>
                                    <td>$matematica3</td>
                                </tr>
                                <tr>
                                    <th>PROGRAMAÇÃO WEB I</th>
                                    <td>$progWeb1</td>
                                </tr>
                                <tr>
                                    <th>SOCIOLOGIA I</th>
                                    <td>$sociologia1</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                ";
            } else {
                echo "<div class='alert alert-danger text-center'>Erro ao tentar cadastrar <strong>relatório</strong></div>" . mysqli_error($conn);
            }
        }
    }

    // Função para filtrar dados do formulário e evitar SQL Injection
    function filtrar_entrada($dado){
        $dado = trim($dado); // Remove espaços desnecessários
        $dado = stripslashes($dado); // Remove as barras invertidas
        $dado = htmlspecialchars($dado); // Converte caracteres especiais em entidades HTML

        return($dado);
    }

?>

<?php include "footer.php"; ?>
