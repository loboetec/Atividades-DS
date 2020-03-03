<?php
$num1 = 10;
$num2 = 5;

$resultado = $num1 * $num2; 

echo "Resultado = " . $resultado ;
echo "<br>" ;
if($resultado < 10){
    echo "Resultado menor que 10.";
}elseif(($resultado >= 10) && ($resultado <=100)){
    echo "Resultado entre 10 e 100.";
}elseif($resultado > 100){
    echo "Resultado maior que 100.";
}

exit ;
?>