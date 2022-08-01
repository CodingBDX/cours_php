<!-- <?php
$aDeviner = 150;
?>

<?php if (isset($_GET['chiffre'])) { ?>

<?php

if ($_GET['chiffre'] > $aDeviner) {
    $valeur = htmlentities($_GET['chiffre']); ?> 
     
    
    <li>trop grand</li>

    

   <?php
} elseif ($_GET['chiffre'] < $aDeviner) { ?>
    <li>trop petit</li>

    <?php
} else { ?>
    <li>heyyyyyy gagne 👍</li> 
<?php } ?>
<?php } ?> -->

<?php
$parfums = [
    'fraise' => 2,
    'chocolat' => 3,

    'vanille' => 3,
];

$cornets = [
    'pot' => 2,
    'cornet' => 3,
];

$supplements = [
    'chantilly' => 1,
    'coco' => 2,
];

?>

<form action="/jeu.php" method="GET">
    <input type="checkbox" nom="parfums[]" value="fraise">
    <input type="checkbox" nom="parfums[]" value="chocolat">
    <input type="checkbox" nom="parfums[]" value="vanille">

    <input type="radio" nom="cornets" value="pot">
    <input type="radio" nom="cornets" value="cornet">


    <input type="checkbox" nom="supplements[]" value="chantilly">
    <input type="checkbox" nom="supplements[]" value="coco">
    <button type="submit">prix</button>
    
</form>