<?php
echo ("<h4>Aantal letters</h4>");
$str = "Rasmus Lerdorf (Godhavn, 22 november 1968) is een Deens-Canadese programmeur en de ontwerper van de programmeertaal PHP.";
echo strlen ( $str );

echo ("<hr>");

echo ("<h4>Aantal woorden</h4>");

echo str_word_count($str);

echo ("<hr>");
echo ("<h4>Woorden omgedraaid</h4>");

echo strrev ( $str );

echo ("<hr>");
echo ("<h4>Woord zoeken</h4>");

$mystring = "Rasmus Lerdorf (Godhavn, 22 november 1968) is een Deens-Canadese programmeur en de ontwerper van de programmeertaal PHP.";
$findme = "programmeur";
$pos = strpos($mystring, $findme);

if ($pos === false) {
	echo "De string '$findme' is niet gevonden in de string '$mystring'";
} else {
	echo "De string '$findme' is gevonden in de string '$mystring'";
	echo " en bestaat op positie $pos";

}

echo ("<hr>");
echo ("<h4>Woord aanpassen</h4>");

echo str_ireplace("PHP", "javascript", $str);

echo ("<hr>");
echo ("<h4>Eerste letter van elk woord een hoofdletter</h4>");

echo ucwords($str);

echo ("<hr>");
echo ("<h4>Hele tekst in hoofdletters</h4>");

echo strtoupper($str);

echo ("<hr>");
echo ("<h4>Hele tekst in kleine letters</h4>");

echo strtolower($str);

echo ("<hr>");
echo ("<h4>Herhaal de tekst 3 keer</h4>");

echo str_repeat ($str, 3);

echo ("<hr>");
echo ("<h4>Laat een gedeelte van de string zien</h4>");

echo substr($str, 10);

echo ("<hr>");
echo ("<h4>Verwijder alle spaties uit de string</h4>");

echo str_ireplace(" ", "", $str);
echo ("<hr>");

/*

!= = niet gelijk aan
<> groter of kleiner
!== niet indentiek
> groter dan
< kleiner dan
>= groter of gelijk als
<=Kleiner of gelijk als
<=>  groter kleiner of gelijk, output = -1, 0, 1
*/



?>
