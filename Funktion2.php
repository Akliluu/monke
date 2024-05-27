<?php
// Definiera funktionen med felhantering
function summa($tal1, $tal2) {

    if (is_numeric($tal1) && is_numeric($tal2)) {
        return $tal1 + $tal2;
    } else {
        return false;
    }
}

// funktionen med giltiga värden
$resultat1 = summa(6, 9);

// funktionen med ogiltiga värden
$resultat2 = summa(4, 'boll');

// resultaten
echo "Summan av 6 och 9 är: " . $resultat1 . "<br>";
echo "Summan av 6 och 'boll' är: " . ($resultat2 === false ? 'false' : $resultat2);
?>
