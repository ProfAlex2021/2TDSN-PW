<?php
include_once 'Produto.php';
include_once 'Torneira.php';


$exemplo = new Produto('plástico', 'gold rose', 'docol', 'pintado');

#      (PROPRIEDADE)  (VALOR)
$exemplo->material = "plástico";
#                 SET

#GET        (PROPRIEDADE)
echo $exemplo->material;

echo '<hr />';

$exemplo2 = new Torneira('plástico', 'gold rose', 'docol', 'pintado', 50, false);
?>
<ul>
    <li>Material: <?php echo $exemplo2->material ?></li>
    <li>Cor: <?php echo $exemplo2->cor ?></li>
    <li>Marca: <?php echo $exemplo2->marca ?></li>
    <li>Acabamento: <?php echo $exemplo2->acabamento ?></li>
    <li>Diâmetro: <?php echo $exemplo2->diametro ?>mm</li>
    <li>Tipo ¼: <?php echo $exemplo2->tipoUmQuarto ? 'sim' : 'não'?></li>
</ul>