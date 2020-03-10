<?php

header ("Content-Type: text/html;charset=utf-8");

$custo = 99100.64;
$venda = 8565.99;

$lucro = $venda - $custo; 

if( $lucro > 0 ){
    echo "O lucro é = R$ " . number_format( $lucro, 2, ',', '.' ) ;
    exit ;
}elseif( $lucro < 0 ){
    echo "O prejuízo é = R$ " . number_format( $lucro, 2, ',', '.' ) ;
    exit ;
}else{
    echo "Empatou o resultado = R$ " . number_format( $lucro, 2, ',', '.' ) ;
    exit ;
}

exit ;
?>