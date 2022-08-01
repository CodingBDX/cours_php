<?php

declare(strict_types=1);

$jean = "salut l' ami";
$note1 = 10;
$note2 = 13;

echo($note1 + $note2) / 2;
echo $jean;

$prenom = 'joel';
$nom = 'barbosa';

echo "\n".$prenom."\n".$nom;

echo ' Bonjour '."{$prenom} {$nom}".'votre moyenne est de'.($note1 + $note2) / 2;

$notes = [12, 9, 12, 15, 7,
];

$eleves = ['nom' => 'jean', 'prenom' => 'john', 'notes' => [12, 13, 6, 9]];
echo $eleves['nom'].''.$eleves['prenom'];

$classe = [
    [
        'nom' => 'henri',
        'prenom' => 'joel',
        'notes' => [12, 3, 15],
    ],
    [
        'nom' => 'laurri',
        'prenom' => 'noel',
        'notes' => [13, 13, 5],
    ],
    [
        'nom' => 'henri',
        'prenom' => 'joel',
        'notes' => [12, 3, 15],
    ],
];

print_r($classe[1]['notes'][1]);
$demande = (float) readline('qu\'elle est votre choix: 1 attaque, 2 defendre, 3 passe votre tour');

// switch ($demande) {
//     case 1:
//         echo "attack";

//         break;
//     case 2:
//         echo "defendre";

//         break;
//     case 3:
//         echo "boss turn";

//         break;

//     default:
//         echo "you type nothing";
//         break;
// }

if (!(
    9 <= $demande && $demande <= 12
) || (14 <= $demande && $demande <= 19)) {
    echo 'eshop open';
} else {
    echo 'magasin close';
}

// if($demande >= 10) {
//     if($demande === 10) {
//         echo 'c\'est juste coco';
//     }
//     echo "that good friend";
// } else{
//     echo "what's going on";
// }

// $chiffre = null;

// while($chiffre != 10) {
//     $chiffre = readline('ecrit un chiffre:');
// }

// echo "waaa tu es trop fort";

// for($i = 0; $i < 10; $i = $i+ 2){
//     echo "- $i \n";

// }

// $eleves = [
//     "cm2" => "jean",
//     "cm1" => "eric"
// ];

// foreach($eleves as $key => $eleve) {

//     echo "- $key $eleve \n";
// }

// $notes = [];
// $action;

// while ($action !== 'fin') {
//     $action = readline("tape ta note:");

//     if($action !== 'fin') {
//         $notes[] = (int)$action;
//     }
//     else {
// echo "c'est la fin";
//     }
// }

// foreach ($notes as $bonpoint) {
//  echo "- $bonpoint \n";
// }

// ouverture fermeture creneau

// $creneau = [];

// while (true) {
//     $debut = (int) readline('debut ouverture?');
//     $fin = (int) readline('debut fermeture?');
//     if ($debut >= $fin) {
//         echo 'bug dans la matrice';
//     } else {
//         $creneau[] =
//         [$debut, $fin];
//         $action = readline('voulez entrer d\\autre horaire?o/n');

//         if ('n'
//                         === $action) {
//             break;
//         }
//     }
// }
// $heure = readline('a quel nheure viens tu?:');
// $creaneauTrouve = false;

// foreach ($creneau as $toto) {
//     if ($heure >= $creneau[0] && $heure <= $creneau[1]) {
//         $creaneauTrouve = true;

//         break;
//     }
//     // code...
// }

// if ($creaneauTrouve) {
//     echo 'magasin ouvert';
// } else {
//     echo 'magasin ferme';
// }

// echo 'le magasin est ouvert de ';
// foreach ($creneau as $k => $toto) {
//     if ($k > 0) {
//         echo 'et de';
//     }
//     echo "{$toto[0]} à {$toto[1]}";
// }

$mot = readline('type your word buddy:');
$reverse = strtolower(strrev($mot));

if (strtolower($mot) === $reverse) {
    echo "it's palyndrome";
}
echo 'not palyndrome';

var_dump($reverse);

$notation = [12, 14, 18];
$classement = sort($notation);
array_push($notation, 12, 3, 6, 12);
$somme = (int) array_sum($notation);
$total = (float) round($somme / (int) count($notation), 1);
var_dump($classement, $total);

//  stop insultes

$insultes = ['con', 'merde'];
$phrase = readline('taper votre phrase:');
foreach ($insultes as $insulte) {
    $lettre = substr($insulte, 0, 1);
    $taille = strlen($insulte) - 1;
    $repeat = $lettre.str_repeat('*', $taille);
    $phrase = str_replace($insulte, $repeat, $phrase);
}

echo $phrase;

function bonjour($nom = null)
{
    $nom = readline('veuillez taper votre nom: \n');
    if (null === $nom) {
        return 'bonjour';
    }

    return "votre nom est {$nom}";
}

$salut = bonjour();
echo $salut;

function repondre_oui_non()
{
    while (true) {
        $reponse = readline('voulez continuer o/n');
        if ('o' === $reponse) {
            return true;
        }
        if ('n' === $reponse) {
            return false;
        }

        return false;
    }
}

repondre_oui_non();

function demande_creneau(string $phrase = "heure d\\'ouverture:")
{
    echo $phrase;
    while (true) {
        $ouverture = (int) readline("heure d\\'ouverture?");
        if ($ouverture >= 0 && $ouverture <= 23) {
            break;
        }
    }
    while (true) {
        $fermeture = (int) readline('heure de fermeture?');

        if ($fermeture >= 0 && $fermeture <= 23 && $fermeture > $ouverture) {
            break;
        }
    }

    return [$ouverture, $fermeture];
}

$demande = demande_creneau();
while (true) {
    $response = readline('voulez vous continuez O/n');
    if ('o' === $response) {
        return $demande;
    }

    break;
}
var_dump($demande);
