<?php 
//Maak verbinding met de database
function dbConnect(){
    //Laad de instellingen
    $config = require __DIR__ . '/db_config.php';
    //Hier komt de try en catch (die hieronder staat)
    try {
        $dsn = "mysql:host=" . $config['db_host'] . ';dbname=' . $config['db_name'];
        $database = new PDO($dsn, $config['db_user'], $config['db_pass']);
    
        $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $database->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    
        return $database;
    
    } catch (PDOException $fout) {
            echo "Database connectie fout: " . $fout->getMessage();
            exit;
        }
}
?>