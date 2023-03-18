<?php

// Pour importer un fichier PHP dans un autre fichier PHP
include 'functions.php';

// tableau de notes de 0 à 20 (x5)
$tab = generateGrades(5);
// print_r($tab);

// affichage des notes colorées
printGrades($tab);

// bonne pratique de ne pas refermer la balise php
