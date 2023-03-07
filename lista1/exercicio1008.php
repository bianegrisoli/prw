<?php
    $N = readline();
    $H = readline();
    $V = readline(); 

    $SALARIO = $H * $V;
    $SALARIO = number_format($SALARIO, 2, ".", "");

    echo "NUMBER = $N\n";
    echo "SALARY = U$ $SALARIO\n";

?> 