<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style/style.css" type="text/css" />
    <title>Sushi bestellen</title>
</head>
<body>


<h2>Mr Long Sushi Sloterdijk</h2>

<table>
    <thead>
    <tr>
        <th>Sushi</th>
        <th>Aantal stuks</th>
        <th>Prijs</th>
        <th>Omschrijving</th>
        <th>Afbeelding</th>
    </tr>
    </thead>

</table> 

</body>
</html>



<?php
$conn = mysqli_connect('localhost', 'root', '')
or die('Verbinding met database server is mislukt.');

mysqli_select_db($conn, 'sushi')
or die('De database is niet beschikbaar');

$query = "SELECT
              id,
              sushi,
              aantal,
                prijs,
                omschrijving,
                afbeelding
          FROM
              sushi;";

$result = mysqli_query($conn, $query);

    while ($row = mysqli_fetch_assoc($result)) {
   echo $row['id'] . ' ' . $row['sushi'] . "<br>\n";
}
?>

