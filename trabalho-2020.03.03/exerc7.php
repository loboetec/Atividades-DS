<?php
$num1 = 300;
$num2 = -1;

if ( $num2 == 0 ){
    echo "nao e possivel fazer divisao por 0 " ;
    exit ;
}

$resultado = $num1 / $num2;

echo "Resultado = " . $resultado;
exit;
?>