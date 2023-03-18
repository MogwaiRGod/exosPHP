<?php

/**
 * Exercice 4
 * Ecrivez un script php qui colorie (et affiche) en bleu le premier caractère d'un mot ou d'une chaine passée en argument 
 */

// fonction qui, pour une chaîne $str entrée en argument, l'affiche avec la première lettre coloriée
// version avec boucle (à la mano)
// ne retourne rien
function colorStr($str) {
    // str_split() prend une chaîne en argument et la retourne sous forme de tableau
    $str = str_split($str);
    $bol = true;
    foreach($str as $car) {
        if ($bol) {
            print_r("<span style='color:olive'>$car</span>");
            $bol = false;
            continue;
        }
        print_r($car);
    }
    return;
}

// même chose que précédemment, mais avec une méthode substring
function colorSubstr($str) {
    // substr(string $string, int $index, int $length) -> retourne la chaîne chaîne entrée en arg à partir du caractère 
    // à l'index entré en arg, et selon la longueur entrée en arg (si nul : retourne tout le reste)
    $first = substr($str, 0, 1);
    $str = substr($str, 1);
    echo "<span style='color:olive'>$first</span><span>$str</span>";

    return;
}


/**
 * Exercice 6
 */

// fonction qui, pour un entier positif non-nul entré en argument, retourne un booléen selon s'il est premier ou non
function primeNumber($nb) {
    // 1 n'est pas premier
    if ($nb === 1 || $nb === 0) {
        return false;
    } 
    // 2 est premier mais ne peut pas rentré dans la boucle suivante
    elseif ($nb === 2) {
        return true;
    }

    // on va vérifier la divisibilité de $nb pour tous les nombres jusqu'à la moitié de $nb
    // car au-delà, il ne peut le contenir un nombre un nombre entier de fois
    for ($i=2; $i<intval($nb/2)+1 /*intval() retourne la partie entière d'un nombre*/; $i++) {
        // si $nb est divisible par un nombre
        if($nb/$i === intval($nb/$i)) {
            // on retourne faux
            return false;
        }
    }
    // s'il n'est divisible par aucun nombre, on retourne vrai
    return true;
} 


