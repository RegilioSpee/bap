<?php
// Laat de inhoud van het JSON bestand zien  
$inhoud = file_get_contents("test.json");

// Zet om naar arrays
$kleuren = json_decode($inhoud, true);
var_dump($kleuren); // print array.
?>