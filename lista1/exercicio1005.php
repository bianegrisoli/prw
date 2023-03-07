<?php 
    $A = readline();
    $B = readline();  

    $A = number_format($A, 1, ".", ""); 
    $B = number_format($B, 1, ".", ""); 

    $MEDIA = ($A * 3.5 + $B * 7.5)/11;
    $MEDIA= number_format($MEDIA, 5, ".", ""); 

    echo "MEDIA = $MEDIA\n";
?>  