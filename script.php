<?php
session_start();

if (!isset($_SESSION["registrazioni"])) {
    $_SESSION["registrazioni"] = [];
}

if (isset($_GET["codice_fiscale"]) && isset($_GET["eta"])) {
    $codiceFiscale = $_GET["codice_fiscale"];
    $eta = $_GET["eta"];

    $_SESSION["registrazioni"][$codiceFiscale] = $eta;
}

?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrazione completata</title>
</head>
<body>
    <h1>Registrazione effettuata con successo!</h1>
    <p><a href="form.html">Aggiungi un nuovo inserimento</a></p>
    <p><a href="risultati.php">Visualizza i risultati</a></p>
</body>
</html>
