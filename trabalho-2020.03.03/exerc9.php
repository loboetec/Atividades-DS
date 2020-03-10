<?php

    header ("Content-Type: text/html;charset=utf-8");
    $numero1 = 100;
    $numero2 = 100;

    $resultado = $numero1 - $numero2;

    echo "Resultado = " . $resultado ;
    echo "<br>";
    
    if( $resultado > 0){
        echo "O resultado é positivo.";
    }elseif ( $resultado < 0 ){
        echo "O resultado é neutro.";
    }else{
        echo "O resultado é neutro.";
    }
    
    exit ;
?>