<?php
$nome = $_GET["nome"];
$testo = $_GET["testo"]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SERVER PHP BADWORDS</title>
</head>
<body>
    <h1>CIAO DA SERVER.PHP</h1>
    <h2>
        <?php
            echo "I caratteri del nome scelto sono:" . strlen($nome);
            echo  str_replace($nome, $nome, "***")
        ?>
    </h2>
    <h3>
        <?php
            echo "I caratteri del textarea sono:" . strlen($testo)
        ?>
    </h3>
</body>
</html>