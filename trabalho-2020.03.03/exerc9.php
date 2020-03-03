<?php

header ("Content-Type: text/html;charset=utf-8");
 $numero1 = 50;
 $numero2 = 145;

 $resultado = $numero1 - $numero2;

 echo "Resultado = " . $resultado ;
 echo "<br>";
 if( $resultado > 0){
     echo "O resultado é positivo.";
 }else{
     echo "O resultado é negativo.";
 }

 exit ;
?>