# langage php

Il est libre, tout le monde peu y contribuer, il a ete cree pour generer des pages html dynamique

un **langage imperatif** executer du code ligne apres ligne, il genere le type automatiquement mais parfois il se trompe

---
 pour ouvrir du php, il faut utiliser les balise

```php
<?php 
$nom = 1;
?>
 ```

## variable
comme dans tout les langages, cela permet de stocker des valeurs en memoire, il prend le signe $ au debut, a la fin de chaque instruction il faut rajouter le ;

il est possible de faire des operations

```php

<?php
$note = 12;
$note2 = 16;

echo ($note + $ note2) / 2;
?>
```

pour additionner des strings, cela s'appelle de la cocanation, il faut remplacer le signe + par un .

```php
<?php
$prenom = "joel";
$nom = "barbosa";

echo $prenom . $nom;
?>
```

les guillemets double sont capable d'interprete les chaines de caracteres, pas les guillemets simple
```php

<?php ?
echo $prenom . "\n" . $nom;
>
```
dans notre exemple, on peut uniquement concatener $prenom $nom entre "", il faut mettre un antislash \ pour mettre d'autre simple guillemet sinon il va mal interpreter le code

**si on declare une variable sans rien d'autre, elle prend automatiquement la valeur null

entourer les operations entre () sinon il risque d'additionner des strings et nombres

## les tableaux

il s'ecrive comme dans tous les langages avec [], ou on peut ajouter des valeurs, pour afficher la valeur choisi, il faut appeler la variable suivi de son emplacement dans le tableau.

```php
<?php 
$note = [12,3, 'pinguin']
$note[0]
?>


```
ici, 12, cela marche aussi pour les chaines de caracteres, si il y a plusieurs tableaux, on peut biensur selectionner les nombres en ouvrant d'autres crocher, cela s'appel un index
```php
$note = [[12,3], 'pinguin']
$note[0][1];

```

au lieu d'utiliser un index, on peut utiliser des cles, en utilisant la cle suivi d une fleche et la valeur de celle-ci
```php

$eleves = ['nom' => 'jean', 'prenom' => 'john', 'notes' => [12,13,6,9]];
echo $eleves[nom];
```

on peut assigner une autre valeur au cle en selectionnent la cle et lui donner une autre valeur.

```php
$eleves['nom'] = 'johnny';
```

pour indiquer une nouvelle note ou cle, il suffit de selectionner l'index suivant si on laisse vide, il l'ajouteraz a la suite!

```php

$eleves['notes'][4] = 16;
```

si on veut afficher avec echo, il nous indique que c'est un tableau sans indiquer les valeurs, il faut faire un print_r() pour voir sous forme d'index

```php
$eleves['notes'][4] = 16;
print_r($eleves['notes']);
```

ps: l'indentation c'est le principe, d'espacer les elements, l'ide le fait mais on peut s'amuser a le faire

## les conditions

cela marche pareil que le javascript avec if, else par contre il interprete, les numeriques dans un string $note = '4'

readline("taper votre note"), permet d'interargir avec l'utilisateur en ligne de commande

le else if, s'ecrit comme ca en php elseif, attache

les doubles == sont un probleme car ils peuvent prendre 2 valeurs, alors que le === prend juste une valeur stricte

**convertir un type** on peut le faire en l'indiquant avant la valeur entre parenthèse (int), (boolean), (string)

```php
$nom = (int)readline("type a number")

```

## switch

quand les valeurs a entre sont nombreuses on peut utiliser le switch beaucoup plus naturel, chaque case correspond a une action 'value' et en dessous le retour que l'on doit avoir suivi d'un break pour stopper l'action. en bas la case default, permet de faire une action au cas ou on tape le mauvais choix

```php
switch($demande){
    case 1:
    echo 'toto';
    break;
    case 2:
    echo 'defr';
    break;
    default:
    echo 'test';
    break;

}
```

le switch s'utilise quand 1 valeur a plusieurs actions

# condition ++

le et , ou n'existe pas en php, il faut remplacer par  et = &&, ou = ||, les operateurs logiques utilise du boolean true false, ce n'est pas la même chose avec un et ou un ou, la reponse n'est pas la même

```php
if (( 9 <= $demande && $demande <= 12) || (14 <= $demande && $demande <= 19) ) {
    echo "ouvert";
}else{
    echo "close";
}

```
ici si on tape, 10, la premiere condition est vrai, vrai et dans la deuxieme faux, vrai, cela donne true || false est donc true en boolean en php pour verifier la condition inverse on peut mettre un ! avant les parenthèses.

```php
if (!( 9 <= $demande && $demande <= 12) || (14 <= $demande && $demande <= 19) ) {
echo 'close';
}

```

sinon pour inverser, cela donne


```php
if (( 9 > $demande || $demande > 12) && (14 > $demande || $demande > 19) ) {
echo 'close';
}

```

## les boucles

la boucle while, attend la resolution de la condition

```php
$chiffre = null;

while($chiffre != 10) {
    $chiffre = readline('ecrit un chiffre:');
}

echo "waaa tu es trop fort";
```

il va automatiquement se repeter, temps que nous ne tapons pas 10, il suffit de mettre un break; = return en js pour sortir de la boucle

## la boucle for

on ecrit d'abord la valeur de la condition i = 0; puis la condition de fin i < 10; et apres comment on fait evoluer la valeur i++

Pour aller de 2 en 2, il faut changer la valeur evolutive $i = $i + 2;

```php
for($i = 0; $i < 4; $i = $i+ 2){
    echo "- $i \n";
}
```
## foreach
dans un tableau ou l'on ne connait pas le nombre de valeur, il faut utiliser foreach, elle est très simple, il faut utiliser l'itinerant et lui reindiquer une valeur, generalement la valeur au plurieurs et ensuite au singulier

```php
$notes = [12,13,16];

foreach($notes as $note){
    echo "$note";
}

```

on peut aussi recuperer la cle en plus de la valeur, comme dans un tableau avec plusieurs cle $key => $nameofvalor

```php

$eleves = [
    "cm2" => "jean",
    "cm1" => "eric"
]

foreach($eleves as $key => $eleve) {

    echo "- $eleve \n"
}
```

Pour parcourir un tableau de plusieurs valeurs et key, on peut bien-sur ecrire une boucle foreach dans une autre boucle foreach

```php
foreach($eleves as $classe => $eleve) {

    echo "- $classe \n";

    foreach($eleve as $classeEleve ) {
        echo "- $classeEleve";
    }
    echo "\n";
}


```

system de creneau, utilisant les boucles et les operateurs ainsi que les valeurs et les keys $k

```php



$creneau = [];

while (true) {
    $debut = (int)readline("debut ouverture?");
    $fin = (int)readline("debut fermeture?");
    if($debut >= $fin ) {
        echo "bug dans la matrice";
    }else{
        $creneau[] = [$debut, $fin];
        $action = readline("voulez entrer d\autre horaire?o/n");
        if($action === "n") {
            break;
        }
    }

}
$heure = readline("a quel nheure viens tu?:");
$creaneauTrouve = false;

foreach ($creneau as $toto) {
    if($heure >= $creneau[0]  && $heure <= $creneau[1] ) {
        $creaneauTrouve = true;
        break;
    } 
    # code...
}

if($creaneauTrouve) {
    echo "magasin ouvert";
}else {
    echo "magasin ferme";
}

echo "le magasin est ouvert de ";
foreach($creneau as $k => $toto) {
if($k > 0) {
    echo "et de";
}
    echo "$toto[0] à $toto[1]";
}
```



## les functions

elles s'ecrivent avec des parentheses à la fin toto()
elles peuvents avoir plusieurs parametres comme des variables $variable, on peut stocker dans une valeur $valeur = $toto($variable);
readline() ou/et print_r() sont des fonctions. si il y'a des crochers dans les parametres, c'est que cela est optionnel

**void ne renvoit rien** jamais aucune valeur de retour
**var_dump** permet de connaitre le type en plus du resultat

**array_push**, il remplace $variable[] = element; , on peut ajouter plusieurs

```php
array_push($variable,15, 12);

```

## affectation d'emplacement

dans tous les langages, les valeurs ne sont pas lu mais plutot des emplacements en memoire, pour affecter une valeur reference, il faut mettre un &$variable
```php
$note = [12,13,14];
$note2 = &$note[];
$note2[] = 13;
```

ici note2 recupere note mais il l'affecte aussi avec &, on appel cela des **funtion mutable**

---

**exit ou die** permettent de sortir du programme à la place de break;

```php
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

```

differente function permette de trouver le debut d'une chaine de caractere , string, substr($variable, 0, 1)
de trouver la taille strlen($variable) -1, ici on indique -1 car on veut garder la 1ere lettre
puis repeter un symbole str_repeat('$', $variable) enfin on remplace le tout avec 3parametres str_replace

---
## function personnelle

comme en js, il faut d'abord entrer function suivi du nom de la fonction, par convention on met un underscore _ pour separer les mots suivi du parametre entre () et on ouvre la fonction avec {}.
il faut utiliser 'return' quand on met la function dans une variable $variable = function('lolo')

```php

function blabla($nom = 'jean) {}
```

un parametre peut avoir une valeur par defaut, il suffit de taper un = suivi de la valeur et de ne rien rentrer quand on l'appel blabla();

les variables en dehors de la function ne peuvent être appele par elle, il faut absolument l'appeler via les parametres

si on veut utiliser une variable en dehors il faut entrer global $variable a l'interieur de la fonction

**typer** on peut typer des parametres juste en indiquant avant le type (string $variable), attention un entier 1 2 3 sera converti en chaine de caractere

**pour empecher toute conversion il faut declarer au debut du fichier php**

```php

declare(strict_types=1);
```

pour typer le retour, il faut indiquer entre () et {} un : suivi du typage

```php

function my_function(string $phrase) : array {}

```

on peut aussi ajouter un ? devant le typage pour signaler qu'il peut prendre 2 forme

```php
function typage(?strin $phrase = null): ?array {}
```
**si on entre rien, on obtient null, du coup le retour peut etre aussi null donc ?array**


## require et include

**on est pas obliger de fermer une balise php quand elle ne contient uniquement que du php**

include permet de separer bien son code, dans des fichiers separees
```php
include('demo.php');
```
la difference avec le require est qu'il est beaucoup plus strict que celui-ci, car il ne va pas continuer a executer le code alors que le include oui

le require_once ou include_once permet d'inclure le fichier une fois au cas ou vous aviez deja declarer les functions avant

## lancement serveur php

pour lancer un server php, il faut taper dans le terminal
php -S localhost:8800

isset permet de verifier si une condition est bien là

```php
if(isset($title)) {echo $title} else {echo 'mon site'};

```

il y a plusieurs manieres de charger le php avec le html, permettre de mettre les balises html directement

```php

<?php if(isset($title)) { ?>
<?php echo '$title' ?>
<?php }else {
 ?>
 <p>that website</p>
 <?php    }?>
```

ou alors avec un endif

```php

<?php if(isset($title)) : ?>
<?php echo '$title' ?>
<?php else: 
 ?>
 <p>that website</p>
 <?php endif ?>
```

il y a aussi une short syntaxe pour le echo

```php

<?php if(isset($title)) { ?>
<?= '$title' >
<?php }else {
 ?>
 <p>that website</p>
 <?php    }?>

```

## super global

il existe des $variables accessibles partout en php, exemple $_SERVER;, il en ressort un tableau avec plusieurs cles et valeurs

un .= permet de remplacer le duplicat de variable

```php
if ($_SERVER['SCRIPT_NAME'] === $lien) {
        $classe .= 'active';
    }

```

pour eviter les melanges php, html avec des guillements ou autres, on peut utiliser heredoc on utilise les <<< suivi d'un nom

```php
<<<html
<li class="$lol">$manu</li>

html;

```
dans les input, c'est le champ name qui est utilise en php pour lire la valeur entree

```php

<form action="/jeu.php" method="GET">
    <input type="number" name="chiffre" placeholder="entrez un chiffre">
    <button type="submit">deviner</button>
</form>
```
on peut recuperer une valeur facilement avec une function global $_GET, dans l 'url nous pouvons voir ?chiffre=12

quand il faut entrer des valeurs string ou number, ne jamaias faire confiance a l'utilisateur qui peut rentrer n'importe quoi, il y a des functions qui permettent de convertir en html comme htmlentities

le **get** permet d'avoir les elements soumis dans l'url lors d'une requete

alors **$_POST** n'affiche rien dans l'url, utilise pour les utilisateurs

## checkbox

c'est un peu particulier, si on larque le même nom et que l'on selectionne plusieurs choix, il va en choisir que un, il faut taper
**name=nom_du_champ[]** pour qu'il prenne en compte tous les choix

---
**in_array** permet de verifier si une valeur existe dans un tableau, il y a 2 parametres, d'abord le 1 l'element que l'on recherche dans un tableau puis en second parametre le tableau dans lequel on cherche


--- 
une constante se differencie d'une variablle, car elle ne change jamais, elle est appellee avec define. le nom de la constante est toujours en majuscule

**pour appelle une constante il suffit d'ecrire son nom sans $**

---
## creation de fichiers, inclure

Pour creer un fichier, il faut faire la function

```php

file_put_contents('demo.txt', 'effg');
```
avec 2 parametres en 1er, le nom du fichier et en second le contenu. on peut rajouter un drapeau pour dire ce qu'il doit faire quand le fichier existe, reecrire, ecraser FILE_APPEND

Pour obtenir des informations sur le fichier il faut ecrire **__DIR__**, il indiquer le chemin, path

Pour les separateurs selon le system d'exploitation, on peut utiliser la function DIRECTORY_SEPARATOR

**dirname** pour remonter dans les dossiers

**file_put_contents** exprime la taille du fichier

**file_get_contents** permet de lire un fichier

## masquer error ou warning

pour les masquer, on peut rajouter un @ devant la function

## lire un gros fichier

la function file, permet de lire un fichier mais si il est trop volumineux, cela sera complique pour la memoire

du coup la function fopen permet de sauvegarder le fichier mais pas de le lire. il prend 2 parametres, le nom du fichier et le mode de lecture

**fgets** permet d'afficher la ligne sur lequel est le curseur

pour fermer un fichier il faut le fermer **fclose** sans quoi il restera ouvert

## parse csv

exemple pour lire un csv et l'afficher

```php

foreach ($fichier as $key => $value) {
    $lignes[$key] = explode(';', trim($value, '\:\-'));
}

foreach ($lignes as $ligne) {
    echo $ligne[0];
}
?>


```

## les cookies
ils permettent de sauvegarder une quantite d'informations dans le navigateur de l'utilisateur

pour installer un cookie, il faut utiliser la function **setcookie**
ils prends plusieurs parametres, en 3eme position, on peut indiquer le temps avec time() et pour qu'il dure la journee time() + 60 * 60 * 24.
il y a d'autres options,voir doc php.net

**recuperer information utilisateur**, tout simplement avec la variable __COOKIE

il ne faut avoir aucun ecart et mettre la variable au debut de fichier

pour vider un cookie ou variable, on peut utiliser unset

```php
if(!empty(_GET['action]) || _GET['action'] === 'deconnecter') {
    unset(_COOKIE['utilisateur']);
}

```

cela ne suffit pas, il faut installer une valeur dans le passe

```php
setcookie('utilisateur', '', time() - 60);

```

pour sauvegarder un tableau dans une chaine de caractere string, il faut utiliser la methode serialize et unserialize ..dans un cookie pour un tableau cela donne

```php
setcookie('utilisateur', serialize($array));

```

---
pour verifier un age

```php
$age = null;
if (!empty($_POST['birthday'])) {
    setcookie('birthday', $_POST['birthday']);
}

if (!empty($_COOKIE['birthday'])) {
    $anniversaire = (int) $_COOKIE['birthday'];
    $age = (int) date('Y') - $anniversaire;
}


```

d'abord on verifie que le cookie existe et que ça valeur n'est pas vide, on recupere la valeur $_POST
ensuite pour verifier sa majorite on fait la valeur du cookie moins la date d'aujourd'hui est on mets le type a  date (un entier)

```php
      <?php if ($age && $age >= 18) { ?>
       <h1>vous etes majeur $age an</h1>
       <?php } else { ?>
  <form action="" method="post">
<select name="birthday" id="birthday">
<?php for ($i = 2010; $i > 1910; --$i) { ?>
        
        <option value="<?php echo $i; ?>"><?php echo $i;
    ?></option>
        <?php } ?>

</select>
<button type="submit">soumettre</button>
        </form>
      
                <?php } ?>


```

ici donc on verifie si la date depasse ou est egal a 18 et on affiche un message

les cookies servent a enregistrer des informations non essentielles.

## les sessions
une session, aucun utilisateur ne peu modifier les informations dedans

il faut toujours le mettre au debut, car il modifie les en-tête (header) de la page
pour la lancer
session_start() puis on peut appeler la variable global $_SESSION[];
cette fonction marche comme un tableau

```php
session_start();
$_SESSION['role'] = 'administrator';
```

pour recuperer on fait la même chose
pour supprimer on fait comme avec les cookies

```php
unset($_SESSION['role']);
```
comme c'est un tableau, on peut rentrer plusieurs informations

```php
$_SESSION['user'] = [
    'username' => 'john',
    'age' => 23,
    'dentist' => 'eric'
]
```