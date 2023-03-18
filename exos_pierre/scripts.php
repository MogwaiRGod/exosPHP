<?php

// import des fonctions
include('functions.php');


/**
 * Exercice 1 
 * trouvez la fonction PHP pour afficher la version de PHP et les infos de configuration
 */
// cette fonction va afficher toutes les informations sur la configuration courante de PHP
// la version sera affichée au début
// phpinfo();
// affiche uniquement les informations de la configuration
// phpinfo(INFO_CONFIGURATION);
// phpinfo(4);


/**
 * Exercice 2
 * afficher en PHP les chaines suivantes : (le - ne fait pas partie de la chaine !)
 * à l'interieur de la balise indiquée entre ()
 */
//Demain j'apprends l'algo PHP et j'évite l'erreur (span)
echo "<span>Demain j'apprends l'algo PHP et j'évite l'erreur</span>";

// le chemin : del c:\\*.* n'existe pas (div)
// on met deux \\ afin d'annuler le fait qu'il s'agit d'un caractère d'échappement
echo "<div>le chemin : del c:\\\\*.* n'existe pas</div>";

// l'objet "auteur" n'est pas l'auteur de l'objet (h3)
echo "<h3>l'objet \"auteur\" n'est pas l'auteur de l'objet</h3>";

// Si l'on continue à s'extasier l'on n'aura plus d'élan (p)
echo "<p>Si l'on continue à s'extasier l'on n'aura plus d'élan</p>";


/**
 * Exercice 3
 * extrayez les composants Scheme / Host / Path de l'url suivante 
 */
// Le scheme est le protocole d'une URL càd le protocole pour accéder à la ressource sur Internet
$SCHEME = parse_url('https://www.monsite.com/php-exercises/php-basic-exercises.php', PHP_URL_SCHEME);
// parse_url() prend deux arguments : l'URL (sous forme de chaine) et ce que l'on souhaite en extraire
// sans le composant de l'URL passé en argument, retourne une tableau associatif de l'URL avec tous les composants
echo "<p>".$SCHEME."<br>";
// l'hôte contient le nom de l'hôte et éventuellement le port de l'URL
$HOST = parse_url('https://www.monsite.com/php-exercises/php-basic-exercises.php', PHP_URL_HOST);
echo $HOST."<br>";
// Path = chemin, sur le serveur web, vers la ressource
$PATH = parse_url('https://www.monsite.com/php-exercises/php-basic-exercises.php', PHP_URL_PATH);
echo $PATH."<br></p>";


/**
 * Exercice 4
 */
echo "<p>";
colorStr("BBBBBBBBBBBBB");
echo "<br>";
colorSubstr("BBBBBBBBBBBBBB");
echo "</p>";


/**
 * Exercice 5
 * En utilisant la variable suivante : $d = "A00" , 
 * affichez les éléments suivants :  
 * A01
 * A02
 * A03
 * A04
 * A05
 */
$d = "A00";

echo "<p>";
// on va incrémenter le dernier nombre, mais en soi on aurait pu également seulement le remplacer par le $i de la boucle
for ($i=0; $i<5; $i++) {
    // on sélectionne, dans la chaîne, le nombre à incrémenter
    $incr = (int)$d[2];
    $incr++;
    // on affiche les deux premiers caractères de la chaîne puis le nombre incrémenté
    $d = substr($d, 0, 2).$incr;
    echo $d."<br>";
}
echo "</p>";

/**
 * Exercice 6
 * Ecrivez un script PHP pour trouver la liste des nombres premiers inférieurs à 100 
 * (rappel : un nombre premier n'est divisible que par 1 et lui-même) 
 * et retournez la somme de ces nombres (égale à 1060 ! )
 */

$sumPrimeNbs = 0;
$listPrimeNbs = [];

echo "<p>La liste des nombres premiers < 100 est :</p><ul>";
// boucle d'adition des nombres premiers
for ($i=0; $i<100; $i++) {
    // si $i est premier
    if (primeNumber($i)) {
        // on l'ajoute à la liste des nombres premiers
        array_push($listPrimeNbs, $i);
        echo "<li>$i</li>";
        // on l'ajoute à la somme des nombres premiers (car c'est demandé je crois ?)
        $sumPrimeNbs += $i;
    }
}

echo "</ul><p>La somme des nombres premiers inférieurs à 100 est : ".$sumPrimeNbs."<br></p>";


/**
 * Exercice 7
 */

// affichage de la table de multiplication
tableMult();


/**
 * Exercice 8
 */
 

/**
 * Exercice 9
 */
// affichage du compteur de voyelles de la chaîne ci-dessous
echo "<p>La chaîne 'Il y a 7 voyelles' contient ".countVowels("Il y a 7 voyelles")." voyelles.</p>";


/**
 * Exercice 10
 * ecrivez un script PHP qui compte le nombre de fois qu'une fonction a été appelée et permet de limiter ce nombre ... 
 * si la fonction est appelée plus que prévu, elle retourne NULL
 */

// initialisation du compteur d'invocation de la fonction limitedFunc
$countFuncCalls = 0;
// appel 1
$countFuncCalls = limitedFunc($countFuncCalls, 3 /* nombre de fois max d'invocation de la fonction */);
echo $countFuncCalls;
// appel 2
$countFuncCalls = limitedFunc($countFuncCalls, 3);
echo $countFuncCalls;
// appel 3
$countFuncCalls = limitedFunc($countFuncCalls, 3);
echo $countFuncCalls;
// à partir de là, plus rien ne s'affiche sur la page
$countFuncCalls = limitedFunc($countFuncCalls, 3);
echo $countFuncCalls;
$countFuncCalls = limitedFunc($countFuncCalls, 3);
echo $countFuncCalls;