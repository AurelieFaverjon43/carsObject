<?php
include 'include.php';

$audiRS1 = new Audi('Audi', 'RS1', 100000, 5, 1, 1, 0);
$moto = new Yamaha('Kawasaki', 'Z900', 8000, 1,1);
//$moto1 = new Suzuki ('Tata', 'a800', 5000, 2,2);
$peugeot106 = new Audi ('Peugeot', '106', 12000, 3, 1, 1, 0);

var_dump($audiRS1);
var_dump($moto);

?>