<?php

//Exo 1, la factorielle
function factorielle ($number) {

    $result = 1;

    for ($i = 1; $i <= $number; $i++) {
        $result *= $i;
    }

    return $result;
}

print factorielle(5);


//Exo 2, fonction récursive (qui s'appelle elle-même)
function recursive ($number) {
// Définir la condition d'arrêt. Quand est-ce que la boucle s'arrête ? 
if($number <= 1){
    return 1;   
  }

// Tant que la condition du if n'est pas atteinte multiplie le nb actuel par le return de la fonction -1
    else{
      return $number * recursive($number - 1);
    };
  };
    
print recursive(5); 


//Exo 3, calculer la somme d'un tableau de 2 nombre donnés 
function sumNumbersImpair ($numberMin, $numberMax) {
    
    $arrayofIntegers = [];
    $result = 0;

//Boucle pour push les num dans le tableau 
    for ($i = $numberMin; $i <= $numberMax; $i++) {
        array_push($arrayofIntegers, $i);
    };
    // print_r() = console.log pour un tableau 

// Boucle qui va me permettre de vérifier si chaque chiffre est pair ou impair 
// for of n'existe pas en php. Boucle for ou forEach. 
    foreach ($arrayofIntegers as $numberOfArray ) {
        if ($numberOfArray %2 != 0) {
            $result += $numberOfArray;
        };
    };
    return $result;
};

print sumNumbersImpair(2,8);


// Exo 4, méthodes sur les arrays
function arrayMethods($minNumber, $maxNumber) {

//Création du tableau avec range
$arrayOfNumbers = range($minNumber, $maxNumber);

//Filtrer le tableau avec array_filter. Renvoie un nouveau tableau comme js donc -> variable
$impairArray = array_filter($arrayOfNumbers, function($number) {
    return $number % 2 != 0;
});

// Utilisation de reduce qui calcule la somme du tableau. Result = l'accumulateur, là où la donnée va être stockée et le currentNumber est la valeur du tableau. qui s'incrément au fur et à mesure à l'accumulateur (result)
$sumOfArray = array_reduce($impairArray, function ($result, $currentNumber) {
    return $result + $currentNumber ;
});

return $sumOfArray;
};

print arrayMethods(1,8);

?>