<?php
$producten = [
    "Laptop" => 160,
    "Muis" => 30,
    "Monitor" => 120,
    "Toetsenbord" => 55
];
foreach ($producten as $product => $prijs) {
    if ($prijs > 150) {
        $prijs *= 1.19;
    } elseif ($prijs < 55) {
        $prijs *= 1.11;
    } else {
        $prijs *= 1.16;
    }
    echo "$product kost nu €" . number_format($prijs, 2) . "<br>";
}
?>