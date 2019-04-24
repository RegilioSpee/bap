<?php
$conn = mysqli_connect('localhost', 'root', '')
or die('Verbinding met database server is mislukt.');

mysqli_select_db($conn, 'sushi')
or die('De database is niet beschikbaar');

?>