<?php

    funcion trocarfonemas($palavra) {
        $trocar = array('P' => 'B', 'F' => 'V', 'T' => 'D', 'R' => 'L', 'J' => 'Z', 'X' => 'S');
        $frase = strtr($palavra, $trocar);
        return $frase;
    }
     
        $casos = intval(fgets(STDIN));

    for ($i = 0; $i < $casos; $i++) {
        $linha = trim(fgets(STDIN))  
    }



?>