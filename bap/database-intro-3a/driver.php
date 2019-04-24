<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
    <?php 
    echo "Drivers: ";
    print_r(PDO::getAvailableDrivers());
    ?>
</body>
</html>