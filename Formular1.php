<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $username = $_POST["username"];
        $password = $_POST["password"];


        echo "<h2>Användarnamn:</h2>";
        echo "<p>$username</p>";
        echo "<h2>Lösenord:</h2>";
        echo "<p>$password</p>";
    }
?>


<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <label for="username">Användarnamn:</label><br>
    <input type="text" id="username" name="username"><br>
    <label for="password">Lösenord:</label><br>
    <input type="password" id="password" name="password"><br><br>
    <input type="submit" value="Skicka">
</form>

</body>
</html>