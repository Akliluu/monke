<?php
// Definiera funktionen
function genereraSekvens($antalSiffror, $addering) {
    $resultat = [];
    $nuvarandeVarde = $antalSiffror;
    
    for ($i = 0; $i < $antalSiffror; $i++) {
        $resultat[] = $nuvarandeVarde;
        $nuvarandeVarde += $addering;
    }
    
    return $resultat;
}

// funktionen med värdena 10 och 5
$sekvens = genereraSekvens(10, 5);

//resultatet 
echo "Resultat: " . implode(", ", $sekvens);
?>
