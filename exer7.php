<?php
    require_once "cabecalho.php";
?>
        <form action="exer7resp.php" method="post">
            <div class="row">
                <div class="col">
                    <label for="valor1" class="form-label">Informe um valor em metros: </label>
                    <input type="number" class="form-control" name="valor1" id="valor1">
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