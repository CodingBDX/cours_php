<?php

function compteur_vue()
{
    $fichier = dirname(__DIR__).DIRECTORY_SEPARATOR.'jeu'.DIRECTORY_SEPARATOR.'compteur';
    $vues_journalieres = $fichier.'-'.date('Y-M-D');
    increment_vues($fichier);
    increment_vues($vues_journalieres);
}

function increment_vues(string $fichier): void
{
    if (file_exists($fichier)) {
        $compteur = (int) file_get_contents($fichier);
        ++$compteur;
        file_put_contents($fichier, $compteur);
    } else {
        file_put_contents($fichier, '1');
    }
}
function nombres_vues(): string
{
    $fichier = dirname(__DIR__).DIRECTORY_SEPARATOR.'jeu'.DIRECTORY_SEPARATOR.'compteur';

    return file_get_contents($fichier);
}

compteur_vue();
var_dump(nombres_vues());
