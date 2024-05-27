<?php
class FormValidator {
    // Kontrollera om en sträng är ett tal
    public function isNumeric($value) {
        return is_numeric($value);
    }

    // Kontrollera om det finns data
    public function hasData($value) {
        return !empty($value);
    }

    // Räkna antal ord i en sträng
    public function wordCount($value) {
        return str_word_count($value);
    }

    // Räkna antal tecken i en sträng
    public function charCount($value) {
        return strlen($value);
    }

    // Skydda mot HTML och SQL-injection
    public function sanitizeInput($value) {
        // Ta bort HTML-taggar
        $sanitized = strip_tags($value);
        // Skydda mot SQL-injektion
        $sanitized = htmlspecialchars($sanitized, ENT_QUOTES, 'UTF-8');
        return $sanitized;
    }
}
?>

<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <title>Formulär</title>
</head>
<body>
    <form method="post" action="">
        <label for="username">Användarnamn:</label>
        <input type="text" id="username" name="username" required>
        <br>
        <label for="password">Lösenord:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <button type="submit">Skicka</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Skapa en instans av klassen
        $validator = new FormValidator();

        // Hämta och sanera formulärdata
        $username = $validator->sanitizeInput($_POST['username']);
        $password = $validator->sanitizeInput($_POST['password']);

        // Visa de sanerade värdena
        echo "<h2>Inmatade värden:</h2>";
        echo "Användarnamn: " . $username . "<br>";
        echo "Lösenord: " . $password . "<br>";
    }
    ?>
</body>
</html>
