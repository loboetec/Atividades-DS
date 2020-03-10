<?php

$num1 = 20;
$num2 = 10;

$resultado = $num1 - $num2;

echo "Resultado = " . $resultado;
echo "<br>" ; 
if($resultado > 10){
    echo "Resultado maior que 10." ;

}elseif ( $resultado < 10){
    echo "Resultado menor que 10." ;
} else{
    echo "Resultado igual a 10." ;
}

exit ;
?>