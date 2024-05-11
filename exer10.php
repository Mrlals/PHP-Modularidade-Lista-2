<?php
    require_once "cabecalho.php";
?>
        <form action="exer10resp.php" method="post">
            <div class="row">
                <div class="col">
                    <label for="peso" class="form-label">Peso em Kg: </label>
                    <input type="number" class="form-control" name="peso" id="peso">
                </div>
                <div class="col">
                    <label for="altura" class="form-label">Altura em metros( Não usar virgula, somente ponto ): </label>
                    <input type="float" class="form-control" name="altura" id="altura">
                </div>
            <div class="row">
                <div class="col">
                    <button type="submit" class="btn btn-danger">
                        Calcular
                    </button>
                </div>
            </div>
        </form>
<?php
    require_once "rodape.php";