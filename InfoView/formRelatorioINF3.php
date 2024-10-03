<?php include("header.php") ?>

<div class="container-fluid text-center">
    <h2>Cadastro de Relatório Semanal:</h2>
    <div class="d-flex justify-content-center mb-3">
        <form action="actionRelatorioIII.php" class="was-validated" method="POST" enctype="multipart/form-data">
            <!-- Início da Linha da GRID -->
            <div class="row">
                <!-- Campos de Curso e Ano lado a lado -->
                <div class="col-sm-6">
                    <div class="form-floating mb-3 mt-3">
                        <select class="form-select" id="curso" name="curso" required>
                            <option value="" disabled selected>Selecione o Curso</option>
                            <option value="Informática para Internet">Informática para Internet</option>
                            <option value="Programação de Jogos Digitais">Programação de Jogos Digitais</option>
                            <option value="Automação Industrial">Automação Industrial</option>
                            <option value="Mecânica">Mecânica</option>
                        </select>
                        <label for="curso" class="form-label">Curso:</label>
                        <div class="valid-feedback"></div>
                        <div class="invalid-feedback"></div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-floating mb-3 mt-3">
                        <select class="form-select" id="ano" name="ano" required>
                            <option value="" disabled selected>Selecione o Ano</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                        <label for="ano" class="form-label">Ano:</label>
                        <div class="valid-feedback"></div>
                        <div class="invalid-feedback"></div>
                    </div>
                </div>
            </div>
            <!-- Fim da linha de Curso e Ano -->

            <!-- Início da linha de Semana e Mês -->
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-floating mb-3 mt-3">
                        <select class="form-select" id="semana" name="semana" required>
                            <option value="" disabled selected>Selecione a Semana</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                        <label for="semana" class="form-label">Semana:</label>
                        <div class="valid-feedback"></div>
                        <div class="invalid-feedback"></div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-floating mb-3 mt-3">
                        <select class="form-select" id="mes" name="mes" required>
                            <option value="" disabled selected>Selecione o Mês</option>
                            <option value="Janeiro">Janeiro</option>
                            <option value="Fevereiro">Fevereiro</option>
                            <option value="Março">Março</option>
                            <option value="Abril">Abril</option>
                            <option value="Maio">Maio</option>
                            <option value="Junho">Junho</option>
                            <option value="Julho">Julho</option>
                            <option value="Agosto">Agosto</option>
                            <option value="Setembro">Setembro</option>
                            <option value="Outubro">Outubro</option>
                            <option value="Novembro">Novembro</option>
                            <option value="Dezembro">Dezembro</option>
                        </select>
                        <label for="mes" class="form-label">Mês:</label>
                        <div class="valid-feedback"></div>
                        <div class="invalid-feedback"></div>
                    </div>
                </div>
            </div>
            <!-- Fim da linha de Semana e Mês -->

            <!-- Início da linha de campos do relatório -->
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-floating mb-3 mt-3">
                        <textarea class="form-control" id="bancoDeDados" name="bancoDeDados" cols="40" required></textarea>
                        <label for="bancoDeDados" class="form-label">Banco de Dados:</label>
                        <div class="valid-feedback"></div>
                        <div class="invalid-feedback"></div>
                    </div>

                    <div class="form-floating mb-3 mt-3">
                        <textarea class="form-control" id="filosofia1" name="filosofia1" cols="40" required></textarea>
                        <label for="filosofia1" class="form-label">Filosofia I:</label>
                        <div class="valid-feedback"></div>
                        <div class="invalid-feedback"></div>
                    </div>

                    <div class="form-floating mb-3 mt-3">
                        <textarea class="form-control" id="geografia1" name="geografia1" cols="40" required></textarea>
                        <label for="geografia1" class="form-label">Geografia I:</label>
                        <div class="valid-feedback"></div>
                        <div class="invalid-feedback"></div>
                    </div>

                    <div class="form-floating mb-3 mt-3">
                        <textarea class="form-control" id="gestaoDeWebSites" name="gestaoDeWebSites" cols="40" required></textarea>
                        <label for="gestaoDeWebSites" class="form-label">Gestão de Web Sites:</label>
                        <div class="valid-feedback"></div>
                        <div class="invalid-feedback"></div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="form-floating mb-3 mt-3">
                        <textarea class="form-control" id="historia1" name="historia1" cols="40" required></textarea>
                        <label for="historia1" class="form-label">História I:</label>
                        <div class="valid-feedback"></div>
                        <div class="invalid-feedback"></div>
                    </div>

                    <div class="form-floating mb-3 mt-3">
                        <textarea class="form-control" id="linguaEspanhola1" name="linguaEspanhola1" cols="40" required></textarea>
                        <label for="linguaEspanhola1" class="form-label">Língua Espanhola I:</label>
                        <div class="valid-feedback"></div>
                        <div class="invalid-feedback"></div>
                    </div>

                    <div class="form-floating mb-3 mt-3">
                        <textarea class="form-control" id="linguaPortuguesa3" name="linguaPortuguesa3" cols="40" required></textarea>
                        <label for="linguaPortuguesa3" class="form-label">Língua Portuguesa III:</label>
                        <div class="valid-feedback"></div>
                        <div class="invalid-feedback"></div>
                    </div>

                    <div class="form-floating mb-3 mt-3">
                        <textarea class="form-control" id="matematica3" name="matematica3" cols="40" required></textarea>
                        <label for="matematica3" class="form-label">Matemática III:</label>
                        <div class="valid-feedback"></div>
                        <div class="invalid-feedback"></div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="form-floating mb-3 mt-3">
                        <textarea class="form-control" id="progWeb1" name="progWeb1" cols="40" required></textarea>
                        <label for="progWeb1" class="form-label">Programação de Web Sites I:</label>
                        <div class="valid-feedback"></div>
                        <div class="invalid-feedback"></div>
                    </div>

                    <div class="form-floating mb-3 mt-3">
                        <textarea class="form-control" id="sociologia1" name="sociologia1" cols="40" required></textarea>
                        <label for="sociologia1" class="form-label">Sociologia I:</label>
                        <div class="valid-feedback"></div>
                        <div class="invalid-feedback"></div>
                    </div>
                </div>
            </div>
            <!-- Fim da linha de campos do relatório -->

            <button type="submit" class="btn btn-danger" style="background-color: #DC143C;">Cadastrar</button>
        </form>
    </div>
</div>

<?php include("footer.php") ?>
