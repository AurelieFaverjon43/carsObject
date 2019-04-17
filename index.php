<?php
include 'include.php';

$audiRS1 = new Audi('Audi', 'RS1', 100000, 5, 1, 1, 0);
$z900 = new Kawasaki('Z900', 9200, true);


var_dump($audiRS1);
var_dump($z900);

$z900->isJaponnaise = 1; //on essaie de modifier un attribut privé mais grace à la fonction __set, on sait
//qu'on a pas le droit de modifier un attribut privé.

echo ($z900->isJaponnaise);

?>