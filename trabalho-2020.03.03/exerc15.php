<?php

header ("Content-Type: text/html;charset=utf-8");

$custo = 90;
$venda = 100;

$lucro = $venda - $custo; 
$porcent = $lucro/$venda*100;

echo "O lucro é = " . $lucro . " R$";
echo "<br> <br>";
echo "A porcentagem é de ".round($porcent, 2) . "%";


exit ;
?>