<?php
// ouverture de la balise PHP

// commentaire sur une seule ligne
/*
commentaire sur
plusieurs
lignes
*/
/* Je peux ecrire du HTML  dans un fichier .php 
mais je ne peux pas ecrire du PHP dans un fichier .html */

// fermeture de la balise PHP
?> 
<h1>Titre HTML</h1>
<?php
// réouverture de PHP
// phpinfo(); // cette commande permet d'afficher les informations sur son PHP
echo "<h1>autre titre HTML</h1>"; // echo est une instruction PHP qui veut dire "affiche"

// Les variables
?>
<h2>Les variables</h2>
<?php
// les variables sont des "boites virtuelles" qui permettent de stocker des informations
// je declare une variable et la remplie avec la valeur "contenu de ma boite" 
$maBoite = "contenu de ma boite"; 
echo '<p>';
echo $maBoite; // l'affichage sera : <p>contenu de ma boite</p>
echo '</p>';
// difference entre ' ' et " "
echo '<p>$maBoite</p>'; // affiche <p>$maBoite</p>
echo "<p>$maBoite</p>"; // affiche <p>contenu de ma boite</p>

$monAutreBoite = $maBoite;
echo "<p>$monAutreBoite</p>"; // <p>contenu de ma boite</p>

// la concatenation
?>
<h2>La concatenation</h2>
<?php
/* concatener : signifie, mettre des morceaux de texte
 les uns à côté des autres
*/
$morceauA = 'Je cours vers';
$morceauB = 'chez moi';
echo '<p>' . $morceauA . ' ' . $morceauB . '</p>' ;
// meme resultat avec " "
echo "<p>$morceauA $morceauB</p>";
?>
<h2>Les conditions</h2>
<?php
$chiffreA = 10;
$chiffreB = 20;
// condition simple
if($chiffreA > $chiffreB){
    echo '<p>Je valide bien la premiere condition</p>';
} else {
    echo '<p>Je ne valide pas la premiere condition</p>';
}

$info = 'alerte';
// condition avec elseif
if($chiffreA > $chiffreB){
    echo '<p>Je valide bien la premiere condition</p>';
} elseif($info == 'alerte') {
    echo '<p>Je valide bien la seconde condition</p>';
} else {
    echo '<p>Je ne valide aucune condition</p>';  
}

// difference entre les types et les valeurs
$typeInteger = 10; // c'est un chiffre de type Integer
$typeString = '10'; // c'est un chiffre de type string

if($typeInteger == $typeString) {
    echo '<p>Les valeurs sont bien égales</p>';
} else {
    echo '<p>Les valeurs ne sont pas égales</p>';
}

if($typeInteger === $typeString) {
    echo '<p>Les valeurs ET les types sont bien égaux</p>';
} else {
    echo '<p>Les valeurs ou les types ne sont pas égaux</p>';
}
// les differents operateurs de comparaison :
/*
==          permet de tester l'égalité de valeurs
===         test l'égalité de valeur ET type
!=          verifie si la valeur est différente
!==         verifie si la valeur OU le type sont differents
A > B       test si A est supérieur à B
A >= B      test si A est supérieur ou égal à B
A < B       test si A est inférieur à B
A <= B       test si A est inférieur ou égal à B
!(A > B)    "!" test le contraire donc dans ce cas, 
il test si "n'est pas (A supérieur à B)" 
(n'est pas : signifie l'inverse)
*/
// voir la syntaxe des conditions avec switch case. 
// Il s'agit d'une autre manière d'écrire les IF ELSEIF
// avec ===

// les boucles
?>
<h2>Les boucles</h2>
<?php
/*
Une boucle permet de repeter des actions ou de parcourir
un tableau de variables / valeurs
*/
// la boucle for
// $i commence à 0; et tant qu'il est inférieur 
// à 5 j'execute le code des accolades.
// $i++ permet de lui ajouter 1 apres chaque execution
for($i=0;$i<5;$i++){
echo "<p>Voici mon code FOR $i</p>";
}

for($i=1;$i<5;$i++){
echo "<img width=200 src=\"image$i.jpg\">";
}

// boucle while
$x = 0;
while($x<5) {
    echo "<p>Voici mon code WHILE $x</p>";
    $x++;
}

$x = 1;
while($x<5) {
    echo "<img width=200 src=\"image$x.jpg\">";
    $x++;
}

// Les tableaux de variables/valeurs en PHP et leur boucle
$tableau = ['France', 'Espagne', 'Maroc'];
// foreach est une boucle qui affiche toutes les valeurs
// d'une "super variable". Cette "super variable" est appelée
// ARRAY
echo $tableau; // erreur
echo '<pre>'; // pour indenter l'affichage
print_r($tableau); // print_r est une fonction qui permet
// d'afficher le contenu d'un tableau. Mais nous ne pouvons pas
// ajouter de balises HTML aux valeurs
echo '</pre>';
foreach($tableau as $key => $value) {
    echo "<p style='color:red;'>$value</p>";
}
echo '<p>' . $tableau[1] . '</p>'; // Espagne

$images = [
    'image1.jpg', 
    'image2.jpg', 
    'image3.jpg', 
    'image4.jpg'
];
foreach($images as $key => $value){
    echo "<img width=200 src=\"$value\">";
}























?>
<div style="height:1000px;"></div>