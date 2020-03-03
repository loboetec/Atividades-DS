<?php

header ("Content-Type: text/html;charset=utf-8");

$custo = 50;
$venda = 65;

$lucro = $venda - $custo; 

echo "O lucro é = " . $lucro . " R$";


exit ;
?>