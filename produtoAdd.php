<?php 
$nomeProd = $_GET['nomeProd'];
$valorProd = $_GET['valorProd'];
?>

<?php include "header.php"; ?>
    <p>Produto <?= $nomeProd ?> Inserido com sucesso</p><br>
    <p>Valor de: <?= $valorProd?></p>
<?php include "footer.php"; ?>