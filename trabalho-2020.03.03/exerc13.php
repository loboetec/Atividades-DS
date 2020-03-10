<?php

header ("Content-Type: text/html;charset=utf-8");

$distancia = 0;

$percurso = $distancia * 2; 

if( $percurso == 0 ){
    echo "O carro não saiu do lugar" ;
    exit ;
}

echo "O carro irá percorrer " . $percurso . " KM.";


exit ;
?>