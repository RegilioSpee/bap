
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Publiek bestand</title>
</head>
<body>
    <h1>Bestanden</h1>
    <?php

//Functies inladen 
require __DIR__ .'/../private/functions.php';

//Verbinden met de database
$database = dbConnect();

//Selecteren uit de database
$sql = "SELECT * FROM sushi";
$result = mysqli_query($sql, $database);
echo "<br>";
?>
<table>

</table>
</body>
</html>
