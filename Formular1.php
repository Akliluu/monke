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
        // Sanera inmatningarna för att förhindra HTML- och SQL-injektioner
        $username = htmlspecialchars(strip_tags($_POST['username']), ENT_QUOTES, 'UTF-8');
        $password = htmlspecialchars(strip_tags($_POST['password']), ENT_QUOTES, 'UTF-8');

        // Visa de sanerade värdena
        echo "<h2>Inmatade värden:</h2>";
        echo "Användarnamn: " . $username . "<br>";
        echo "Lösenord: " . $password . "<br>";
    }
    ?>
</body>
</html>
