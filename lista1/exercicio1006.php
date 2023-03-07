<?php 
$A = readline();
$B = readline();
$C = readline();

$A = number_format($A, 1, ".", ""); 
$B = number_format($B, 1, ".", "");
$C = number_format($C, 1, ".", ""); 

$MEDIA = ($A * 2 + $B * 3 + $C * 5) / 10;
$MEDIA = number_format($MEDIA, 1, ".", "");     

echo "MEDIA = $MEDIA\n"; 

?>  