<?php include("header.php") ?>

    <div class="container-fluid text-center">

        <h2>Cadastro de Relatório Semanal:</h2>

        <div class="d-flex justify-content-center mb-3">

            <form action="actionUsuario.php" class="was-validated" method="POST" enctype="multipart/form-data">

                <!-- Início da Linha da GRID -->
                <div class="row">

                    <!-- Início da primeira coluna da grid -->
                    <div class="col-sm-4">

                        <div class="form-floating mb-3 mt-3">
                            <textarea class="form-control" id="bancoDeDados" name="bancoDeDados"cols="40" required></textarea>
                            <label for="bancoDeDados" class="form-label">Banco de Dados:</label>
                            <div class="valid-feedback"></div>
                            <div class="invalid-feedback"></div>
                        </div>

                        <div class="form-floating mb-3 mt-3">
                            <textarea class="form-control" id="filosofia1" name="filosofia1"cols="40" required></textarea>
                            <label for="filosofia1" class="form-label">Filosofia I:</label>
                            <div class="valid-feedback"></div>
                            <div class="invalid-feedback"></div>
                        </div>

                        <div class="form-floating mb-3 mt-3">
                            <textarea class="form-control" id="geografia1" name="geografia1"cols="40" required></textarea>
                            <label for="geografia1" class="form-label">Geografia I:</label>
                            <div class="valid-feedback"></div>
                            <div class="invalid-feedback"></div>
                        </div>

                        <div class="form-floating mb-3 mt-3">
                            <textarea class="form-control" id="gestaoDeWebSites" name="gestaoDeWebSites"cols="40" required></textarea>
                            <label for="gestaoDeWebSites" class="form-label">Gestão de Web Sites:</label>
                            <div class="valid-feedback"></div>
                            <div class="invalid-feedback"></div>
                        </div>
                                   
                    </div>
                    <!-- Fim da primeira coluna da GRID -->

                    <div class="col-sm-4">

                        <div class="form-floating mb-3 mt-3">
                            <textarea class="form-control" id="historia" name="historia"cols="40" required></textarea>
                            <label for="historia" class="form-label">História:</label>
                            <div class="valid-feedback"></div>
                            <div class="invalid-feedback"></div>
                        </div>

                        <div class="form-floating mb-3 mt-3">
                            <textarea class="form-control" id="linguaEspanhola" name="linguaEspanhola"cols="40" required></textarea>
                            <label for="linguaEspanhola1" class="form-label">Língua Espanhola:</label>
                            <div class="valid-feedback"></div>
                            <div class="invalid-feedback"></div>
                        </div>

                        <div class="form-floating mb-3 mt-3">
                            <textarea class="form-control" id="linguaPortuguesa" name="linguaPortuguesa"cols="40" required></textarea>
                            <label for="linguaPortuguesa" class="form-label">Língua Portuguesa</label>
                            <div class="valid-feedback"></div>
                            <div class="invalid-feedback"></div>
                        </div>

                        <div class="form-floating mb-3 mt-3">
                            <textarea class="form-control" id="matematica" name="matematica"cols="40" required></textarea>
                            <label for="matematica" class="form-label">Matemática:</label>
                            <div class="valid-feedback"></div>
                            <div class="invalid-feedback"></div>
                        </div>
       
                    </div>

                    <div class="col-sm-4">

                        <div class="form-floating mb-3 mt-3">
                            <textarea class="form-control" id="progWeb" name="progWeb"cols="40" required></textarea>
                            <label for="progWeb" class="form-label">Programação de Web Sites:</label>
                            <div class="valid-feedback"></div>
                            <div class="invalid-feedback"></div>
                        </div>

                        <div class="form-floating mb-3 mt-3">
                            <textarea class="form-control" id="sociologia" name="sociologia"cols="40" required></textarea>
                            <label for="sociologia1" class="form-label">Sociologia:</label>
                            <div class="valid-feedback"></div>
                            <div class="invalid-feedback"></div>
                        </div>

                    </div>

                        <button type="submit" class="btn btn-danger" style="background-color: #DC143C";>Cadastrar</button>
                    </form>
                </div>
            </div>
        </div>
        <br>
        <br>
       
    </div>

<?php include("footer.php") ?>