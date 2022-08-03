<?php

$fichier = file(__DIR__.DIRECTORY_SEPARATOR.'data'.DIRECTORY_SEPARATOR.'demo.csv');
// $ressource = file($fichier, 'r+');

foreach ($fichier as $key => $value) {
    $lignes[$key] = explode(';', trim($value, '\:\-'));
}

foreach ($lignes as $ligne) {
    echo $ligne[0];
}
?>


