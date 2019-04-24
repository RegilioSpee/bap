<?php 
echo "<h1>Verbinding maken</h1>";
$dbhost = "localhost";
// $dbname = "muziek";
$user = "root";
// je wachtwoord is root of niets
$pass = "";

try {
$database = new PDO("mysql:host=$dbhost;", $user, $pass);

// dit moet in de try
$database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
echo "Verbinding gemaakt";
}
	catch(PDOException $fout) {
    echo $fout->getMessage();
    echo "Verbinding niet gemaakt";
}

 ?>