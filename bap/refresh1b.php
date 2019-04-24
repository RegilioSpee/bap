<?php 

echo ("<h4>Opdracht 1 Flowchart</h4>");
echo ("<hr>");

$sunny = false;
$raining = true;
$working = false;


if ($sunny == true && $raining == true || $sunny == false) {
  echo "<h1>Go to the movies</h1>";
} else if ($sunny == true && $raining == false && $working == false) {
  echo "<h1>Going to festival</h1>";
} else {
  echo "<h1>lets go to work!</h1>";
}

echo ("<hr>");
echo ("<h4> If else</h4>");

$knoppen = 1;

switch ($knoppen) {
    case 1:
        echo "De ventilator doet het";
        break;
    case 2:
        echo "Het licht doet het";
        break;
    case 3:
        echo "De lamp doet het";
        break;
        case 4:
        echo "Het lampenbolletje doet het";
        break;
    default:
        echo "De knop helemaal rechts";
}
 ?>