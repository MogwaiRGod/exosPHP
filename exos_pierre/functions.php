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
    // 2 est premier mais ne peut pas rentrer dans la boucle suivante
    elseif ($nb === 2) {
        return true;
    }

    // on va vérifier la divisibilité de $nb pour tous les nombres jusqu'à la moitié de $nb
    // car au-delà, il ne peut le contenir un nombre entier de fois
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


/**
 * Exercice 7
 * affichez la multiplication des entiers entre 1 et 10 dans une table HTML à double entrée 
 * (colonnes de 1 à 10, lignes de 1 à 10)
 */

// fonction qui génère un tableau 10*10 donc chaque cellule contient le multiple de la rangée/colonne correspondante
function tableMult() {
    // initialisation du tableau
    echo "<table style='border: 1px solid black; cellspacing=0; border-collapse: collapse;'><thead><tr><th>x</th>";

    // génération des données
    $row = 1;
    for ($i=0; $i<= 10; $i++) {
        for ($j=1; $j<=10; $j++) {
            // pour l'affichage du header (sémantique)
            if ($i === 0) {
                echo "<th style='border: 1px solid black;'>$j</th>";
            }
            else {
                echo "<td style='border: 1px solid black;'>".$i * $j."</td>";
            }

        } // fin pour j
        echo "</tr><tr>";
        if ($i !== 10) {
            echo "<td style='border: 1px solid black; font-weight:bold;'>$row</td>";
            $row++;
        }
    } // fin pour i

    echo "</table>";
    return;
}
