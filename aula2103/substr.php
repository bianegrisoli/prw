<?php
     
    $data = date('d/m/Y');
    $dia = substr($data,0,2);
    echo "Dia: ".$dia."<br>";

    $mes = substr($data,3,2);
    echo "Mes: ".$mes."<br>";

    $ano = substr($data,6,4);
    echo "Ano: ".$ano."<br>";

    ?>