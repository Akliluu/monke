<?php
// Definiera klassen
class MinaFunktioner {

    public function summa($tal1, $tal2) {
        if (is_numeric($tal1) && is_numeric($tal2)) {
            return $tal1 + $tal2;
        } else {
            return false;
        }
    }

    // Funktion 3: Generera sekvens
    public function genereraSekvens($antalSiffror, $addering) {
        $resultat = [];
        $nuvarandeVarde = $antalSiffror;

        for ($i = 0; $i < $antalSiffror; $i++) {
            $resultat[] = $nuvarandeVarde;
            $nuvarandeVarde += $addering;
        }

        return $resultat;
    }
}

// Skapa en instans av klassen
$minafunktioner = new MinaFunktioner();

// Använd funktion 2: Summa med felhantering
$resultat1 = $minafunktioner->summa(6, 9);
$resultat2 = $minafunktioner->summa(4, 'boll');

// Använd funktion 3: Generera sekvens
$sekvens = $minafunktioner->genereraSekvens(10, 5);

// resultaten
echo "Summan av 6 och 9 är: " . $resultat1 . "<br>";
echo "Summan av 6 och 'boll' är: " . ($resultat2 === false ? 'false' : $resultat2) . "<br>";
echo "Resultat: " . implode(", ", $sekvens);
?>
