<?php

/**
 * EXERCICE
 * - faire un tableau de notes de 0 à 20 (x5)
 * - faire une fonction pour afficher ces notes , 
 * et coloriser l'affichage :
 * - si la note > à 10 en vert 
 * - si la note < 10 en rouge 
 */

// fonction qui génère un tableau de notes /20, selon un nombre ($nb) de notes entré en argument
function generateGrades($nb) {
    // déclaration du tableau à retourner
    $tab_grades;

    for($i=0; $i<$nb; $i++) {
        /* mt_rand(int $min, int $max) -> retourne un entier aléatoire compris strictement entre $min et $max */
        $tab_grades[$i] = mt_rand(0, 20);
    }
    
    return $tab_grades;
} // fin function generateGrades

// fonction qui affiche les notes d'un tableau ($tab), avec une couleur différente selon qu'elles sont > ou < 10
function printGrades($tab) {
    // on boucle dans le tableau
    foreach($tab as $grade) {
        if ($grade > 10) {
            // on affiche la note dans une balise <p> avec la couleur correspondante
            ?> <p style="color: green"><?php print_r($grade) ?></p><?php
        }
        elseif ($grade < 10) {
            ?> <p style="color: red"><?php print_r($grade) ?></p><?php
        } 
        else {
            // si c'est égal à 10, on n'a pas précisé de couleurs (noir par défaut)
            ?> <p><?php print_r($grade) ?></p><?php
        }
    }
    // la fonction ne retourne rien
    return;
} // fin function printGrades