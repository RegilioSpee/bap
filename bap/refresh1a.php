<?php 
$nummer = 9026316046 ;


  function sum(){
    global $nummer;
    $total = substr($nummer, 0,1)*10
     +substr($nummer, 1,1)*9
     +substr($nummer, 2,1)*8
     +substr($nummer, 3,1)*7
     +substr($nummer, 4,1)*6
     +substr($nummer, 5,1)*5
     +substr($nummer, 6,1)*4
     +substr($nummer, 7,1)*3 
     +substr($nummer, 8,1)*2;
     echo $total;
    $restwaarde = $total % 11;
    $controlegetal = 11 - $restwaarde;
    echo ' ' . $controlegetal;
    echo ' $controlegetal = ' .substr($nummer, -1,1);
    echo "<br>";
    echo substr($nummer, -1,1);
  };

  sum();


 ?>