<?php
//Sequenza
// echo $frase1;
// echo $frase2;

// $frase1 = 'CIao mi chiamo Francesco';
// $frase2 = 'Piacere';

//Selezione
// if (2 > 1) {
//     echo "Maggiore";
// }

$age = 18; // intero


//controlla casi limite
//controlla casi limite2
//controlla casi limite3
//controlla casi limite4

//controlla casi eccezionali

//esegui cai normali
if ($age > 120 or $age < 1) {
    echo "Eta Non corretta";
} else {
    if ($age > 18) {
        echo "SI, ha puiu di 18 anni.";
    } elseif ($age < 18) {
        echo "No, ha meno di 18 anni.";
    } else {
        echo "Ha esattamente 18 anni.";
    }
}

//Switch


switch ($variable) {
    case $variable > 18:
        echo "SI, ha puiu di 18 anni.";
        break;
    case $variable < 18:
        echo "Hai meno di 18 anni.";
        break;
    case $variable == 18:
        echo "Hai esattamente 18 anni.";
        break;
    default:
        echo "Eta Non corretta";
        break;
}

$role = 'admin';

switch ($role) {
    case 'admin':
        echo "SI, ha puiu di 18 anni.";
        break;
    case 'insalata':
        echo "SI, ha puiu di 18 anni.";
        break;
    case $variable < 18:
        echo "Hai meno di 18 anni.";
        break;
    case $variable == 18:
        echo "Hai esattamente 18 anni.";
        break;
    default:
        echo "Eta Non corretta";
        break;
}
