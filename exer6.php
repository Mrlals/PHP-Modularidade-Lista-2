<?php
    require_once "cabecalho.php";
?>
        <form action="exer6resp.php" method="post">
            <div class="row">
                <div class="col">
                    <label for="valor1" class="form-label">Informe o primeiro valor </label>
                    <input type="number" class="form-control" name="valor1" id="valor1">
                </div>
                <div class="col">
                    <label for="valor2" class="form-label">Informe o segundo valor </label>
                    <input type="number" class="form-control" name="valor2" id="valor2">
                </div>
            <div class="row">
                <div class="col">
                    <button type="submit" class="btn btn-primary">
                        calcular
                    </button>
                </div>
            </div>
        </form>
<?php
    require_once "rodape.php";