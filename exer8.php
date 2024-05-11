<?php
    require_once "cabecalho.php";
?>
        <form action="exer8resp.php" method="post">
            <div class="row">
                <div class="col">
                    <label for="valor" class="form-label">Informe a metragem a ser pintada: </label>
                    <input type="number" class="form-control" name="valor" id="valor">
                </div>
            <div class="row">
                <div class="col">
                    <button type="submit" class="btn btn-primary">
                        Converter
                    </button>
                </div>
            </div>
        </form>
<?php
    require_once "rodape.php";