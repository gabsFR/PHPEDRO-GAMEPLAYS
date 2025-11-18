
<?php

$pedaços = 3;
$pizza = 8;
$hexatombe;

echo ("===PIZZOMETRO===\n");
$hexatombe = (int) readline("|Quantas pessoas vão comer: \n");
$berinjela = $hexatombe * $pedaços;
if ($hexatombe <= 3){
    $pizza = $berinjela;
}
echo ("|PESSOAS NO TOTAL: $hexatombe\n|PEDAÇOS COMIDOS NO TOTAL: $berinjela\n|PIZZAS COMIDAS NO TOTAL:");
