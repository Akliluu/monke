<?php
class FormValidator {
    // Kontrollera om en sträng är ett tal
    public function isNumeric($value) {
        return is_numeric($value);
    }

    // Kontrollera om det finns data
    public function hasData($value) {
        return !empty(trim($value));
    }

    // Räkna antal ord i en sträng
    public function wordCount($value) {
        return str_word_count($value);
    }

    // Räkna antal tecken i en sträng
    public function charCount($value) {
        return strlen($value);
    }

  
    public function sanitizeInput($value) {
 
        $sanitized = strip_tags($value);

        $sanitized = htmlspecialchars($sanitized, ENT_QUOTES, 'UTF-8');
        return $sanitized;
    }
}
?>

<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <title>Formulärvalidering</title>
</head>
<body>
    <form method="post" action="">
        <label for="data">Ange data:</label>
        <input type="text" id="data" name="data" required>
        <br>
        <button type="submit">Skicka</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $validator = new FormValidator();


        $data = $validator->sanitizeInput($_POST['data']);


        echo "<h2>Valideringsresultat:</h2>";

        // Kontrollera om det finns data
        if ($validator->hasData($data)) {
            echo "Inmatad data: " . $data . "<br>";
            echo "Är det ett tal?: " . ($validator->isNumeric($data) ? 'Ja' : 'Nej') . "<br>";
            echo "Antal ord: " . $validator->wordCount($data) . "<br>";
            echo "Antal tecken: " . $validator->charCount($data) . "<br>";
        } else {
            echo "Fel: Ingen data inmatad!";
        }
    }
    ?>
</body>
</html>
