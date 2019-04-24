<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style/style.css" type="text/css" />
    <title>Afbeeldingen uploaden</title>
</head>
<body>
	<?php
if(isset($_FILES['image'])) {
    $errors = array();
    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_tmp = $_FILES['image']['tmp_name'];
    $file_type = $_FILES['image']['type'];

    // de explode string-functie breekt een string in een array
// hierbij breek je de string na de . (punt) waardoor je de bestands type hebt
$filename_deel = explode('.',$_FILES['image']['name']);
// end laat de laatste waarde van de array zoen 
$bestandstype = end($filename_deel);
// voor het geval er JPG ipv jpg is geschreven
$file_ext = strtolower($bestandstype);

$bestandstypen = array("jpeg","jpg","png");
      
if(in_array($file_ext,$bestandstypen)=== false){
$errors[] = "Dit bestandstype kan niet, kies een JPEG of een PNG bestand.";
}
if($file_size > 2097152){
    $errors[] ='Het bestand moet kleiner zijn dan 2 MB';
  }
}
if(empty($errors)==true){
    // move_upload_file stuurt je bestand naar een andere lokatie
    move_uploaded_file($file_tmp,"uploads/".$file_name);
    echo "Je afbeelding is geupload";
 } else{
    print_r($errors);
 }
?>

<html>
<body>
<form action="" method="POST" enctype="multipart/form-data">
<input type="file" name="image" />
<input type="submit" />
</form>
</body>

</html>



<h1>Sushi afbeeldingen uploaden</h1>


</body>
</html>

     