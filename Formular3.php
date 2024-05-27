<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <title>Formception</title>
</head>
<body>

<?php

for ($i = 0; $i < 2; $i++) {

    $method = $i === 0 ? 'POST' : 'GET';
    $data = $method === 'POST' ? $_POST : $_GET;

    // Skriv ut formulär
    echo "<form method=\"$method\">";

    // Skriv ut formulärets rubrik
    echo "<h2>$method-formulär</h2>";


    if (!empty($data)) {
        echo "<div>Data som skickades in:</div>";
        echo "<div>";
        foreach ($data as $key => $value) {
            echo "$key: $value<br>";
        }
        echo "</div>";
    }


    echo "<div>";
    echo "<label for=\"input_$method\">Ange något:</label>";
    echo "<input type=\"text\" id=\"input_$method\" name=\"input\">";
    echo "</div>";


    echo "<div>";
    echo "<button type=\"submit\">Skicka</button>";
    echo "</div>";

    echo "</form>";
    echo "<br>";
}
?>

</body>
</html>
