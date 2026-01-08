<?php
$uur = date("H");
if ($uur < 12) {
    echo "Goedemorgen!";
} elseif ($uur < 18) {
    echo "Goedemiddag!";
} elseif ($uur < 24) {
    echo "Goedenavond!";
} else {
    echo "Goedenacht!";
}
?>