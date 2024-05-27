<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <title>Formulär2</title>
</head>
<body>
    <form method="post" action="">
        <div>
            <input type="text" id="username" name="username" placeholder="Användarnamn" required>
        </div>
        <div>
            <input type="password" id="password" name="password" placeholder="Lösenord" required>
        </div>
        <div>
            <button type="submit">Skicka</button>
        </div>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Kontrollera om användarnamn och lösenord finns
        if (!empty($_POST['username']) && !empty($_POST['password'])) {
            // Sanera inmatningarna för att förhindra HTML- och SQL-injektioner
            $username = htmlspecialchars(strip_tags($_POST['username']), ENT_QUOTES, 'UTF-8');
            $password = htmlspecialchars(strip_tags($_POST['password']), ENT_QUOTES, 'UTF-8');

            // Visa de sanerade värdena
            echo "<h2>Inmatade värden:</h2>";
            echo "Användarnamn: " . $username . "<br>";
            echo "Lösenord: " . $password . "<br>";
        } else {
            echo "<h2>Fel:</h2> Både användarnamn och lösenord måste fyllas i.";
        }
    }
    ?>
</body>
</html>
