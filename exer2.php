<?php
    require_once "cabecalho.php";
?>

<form action="exer2resp.php" method="post">
    <div class="row">
        <div class="col">
            <label for="valor" class="form-label">Informe o primeiro valor</label>
            <input type="number" class="form-control" name="valor1" id="valor1">
        </div>
    </div>
    <div class="row">
        <div class="col">
            <label for="valor" class="form-label">Informe o Segundo valor</label>
            <input type="number" class="form-control" name="valor2" id="valor2">
        </div>
    </div>
    <div class="row">
        <div class="col">
            <label for="valor" class="form-label">Informe o Terceiro valor</label>
            <input type="number" class="form-control" name="valor3" id="valor3">
        </div>
    </div>
    <div class="row">
        <div class="col">
            <label for="valor" class="form-label">Informe o Quarto valor</label>
            <input type="number" class="form-control" name="valor4" id="valor4">
        </div>
    </div>
    <div class="row">
        <div class="col">
            <label for="valor" class="form-label">Informe o Quinto valor</label>
            <input type="number" class="form-control" name="valor5" id="valor5">
        </div>
    </div>
    <div class="row">
        <div class="col">
            <label for="valor" class="form-label">Informe o Sexto valor</label>
            <input type="number" class="form-control" name="valor6" id="valor6">
        </div>
    </div>
    <div class="row">
        <div class="col">
            <label for="valor" class="form-label">Informe o Setimo valor</label>
            <input type="number" class="form-control" name="valor7" id="valor7">
        </div>
    </div>
    <div class="row">
        <div class="col">
            <button type="submit" class="btn btn-primary">
                Validar menor
            </button>
        </div>
    </div>
</form>

<?php
    require_once "rodape.php";