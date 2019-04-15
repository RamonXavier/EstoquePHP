<?php include "header.php"; ?>
    <div class="form">
        <form action="produtoAdd.php" class="form">
            <div class="form-group">
                <label for="nomeProd">Nome do produto</label>
                <input type="text" name="nomeProd" id="" placeholder="Mochila vizer 5567" required/><br>
            </div>
            <div class="form-group">
                <label for="valorProd">Valor do produto</label>
                <input type="number" name="valorProd" placeholder="Ex: 48.90" required/><br>
            </div>
            <input class="btn btn-success" type="submit" name="validar" id="">Salvar produto
        </form>
    </div>
<?php include "footer.php"; ?>