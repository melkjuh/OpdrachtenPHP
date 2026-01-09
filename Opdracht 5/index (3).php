<?php
$spaargeld = 800;
$prijs = 1000;
$tekort = $prijs - $spaargeld;

if ($spaargeld >= $prijs) {
    $over = $spaargeld - $prijs;
    echo "Je kunt de telefoon kopen. Je hebt €$over over voor een hoesje.";
} elseif ($tekort > 250) {
    echo "Je komt €$tekort tekort. Zoek een baantje!";
} else {
    echo "Je komt €$tekort tekort. Je bent er bijna!";
}
?>