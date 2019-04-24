<?php
setcookie("naam", "inhoud", time() + 3600);

// zo stel je mtkime in: mktime(<em>hour,minute,second,month,day,year,is_dst</em>);
setcookie("gebruiker", "Engels", mktime(0,0,0,10,22,2019));

//Cookie lezen
$cookieregilio =$_COOKIE["cookie"];
echo "<br>Gebruikersnaam is: $cookieregilio <br>";
print_r($_COOKIE);

//Cookie verwijderen
setcookie("cookie", "", time()-3600);
if(isset($_COOKIE["cookie"])) {
    echo $_COOKIE["cookie"];
} else {
    echo "cookie is verwijderd";
}
?>