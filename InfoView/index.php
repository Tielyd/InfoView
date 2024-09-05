<?php include("header.php"); ?>

    <div class="container text-center mt-3 mb-5">

        <!-- Formulário para aplicar filtros aos produtos -->
        <form name="formFiltro" action="index.php" method="GET" style="width:50%; margin:auto;">
            <select class="form-select" name="filtroProduto" required>
                <option value="todos">Relatórios Semanais</option>
                <option value="disponivel">Disciplinas</option>
                <option value="vendido">Análises</option>
                <option value="vendido">Calendário</option>
            </select><br>

        </form>

        <!-- Início da primeira linha da GRID -->
        <div class="row mt-5">
            <!-- Início da primeira coluna da GRID -->
            <div class="col-sm-3">
                <!-- Início do Card para exibição do produto-->
                <div class="card" style="width:100%; height:100%;">
                    <div class="card-body">
                        <h4 class="card-title">INFORMÁTICA 1</h4>
                        <p class="card-text">Técnico de Informática para Internet</p>
                        <a href="#" class="btn btn-danger" style="background-color:#DC143C";>Ver Detalhes</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card" style="width:100%; height:100%;">
                    <div class="card-body">
                        <h4 class="card-title">INFORMÁTICA 2</h4>
                        <p class="card-text">Técnico de Informática para Internet</p>
                        <a href="#" class="btn btn-danger" style="background-color:#DC143C";>Ver Detalhes</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card" style="width:100%; height:100%;">
                    <div class="card-body">
                        <h4 class="card-title">INFORMÁTICA 3</h4>
                        <p class="card-text">Técnico de Informática para Internet</p>
                        <a href="#" class="btn btn-danger" style="background-color:#DC143C";>Ver Detalhes</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card" style="width:100%; height:100%;">
                    <div class="card-body">
                        <h4 class="card-title">INFORMÁTICA 4</h4>
                        <p class="card-text">Técnico de Informática para Internet</p>
                        <a href="#" class="btn btn-danger" style="background-color:#DC143C";>Ver Detalhes</a>
                    </div>
                </div>
            </div>
        </div>


    </div>

<?php include("footer.php"); ?>

?>