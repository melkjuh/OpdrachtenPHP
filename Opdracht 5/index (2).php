<?php
$uur = date("H"); 
$temperatuur = 19; 
$luchtvochtigheid = 80; 

if ($uur >= 17 || ($temperatuur < 20 && $luchtvochtigheid < 85)) {
    echo "Airco moet uit.";
} else {
    echo "Airco mag aan.";
}
?>