<?php include("header.php") ?>

<div class="container-fluid text-center">
    <h2>Cadastro de Curso:</h2>
    <div class="d-flex justify-content-center mb-3">
        <div class="row">
            <div class="col-sm-12">
                <form action="actionCurso.php" class="was-validated" method="POST" enctype="multipart/form-data">
                    <div class="form-floating mb-3 mt-3">
                        <input type="text" class="form-control" id="nomeCurso" placeholder="Informe o nome do curso" name="nomeCurso" required>
                        <label for="nomeCurso" class="form-label">Nome do Curso:</label>
                        <div class="valid-feedback"></div>
                        <div class="invalid-feedback"></div>
                    </div>

                    <button type="submit" class="btn btn-danger" style="background-color: #DC143C;">Cadastrar Curso</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include("footer.php") ?>
