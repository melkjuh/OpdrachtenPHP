<?php
$uur = date("H");
echo match (true) {
    $uur < 12 => "Goedemorgen!",
    $uur < 18 => "Goedemiddag!",
    $uur < 24 => "Goedenavond!",
    default => "Goedenacht!",
};
?>