<?php
    $valores = array(1,3,5,9,12,10);
    $soma = 0;

    for($i = 0; $i < count($valores); $i++) {
        $soma += $valores[$i];
    }

    echo $soma;