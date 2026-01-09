<?php
$leeftijd = 19;
$heeftStempas = false;

if ($leeftijd >= 16) {
    echo "Je mag een scooterrijbewijs halen.<br>";
} else {
    echo "Je bent te jong voor een scooterrijbewijs.<br>";
}

if ($leeftijd >= 18) {
    if ($heeftStempas) {
        echo "Je mag stemmen.";
    } else {
        echo "Je hebt geen stempas ontvangen, dus je mag niet stemmen.";
    }
} else {
    echo "Je bent te jong om te stemmen.";
}
?>