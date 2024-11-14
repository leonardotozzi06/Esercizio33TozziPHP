<?php
session_start();

if (!isset($_SESSION["registrazioni"])) {
    echo "Nessuna registrazione disponibile.";
    exit;
}

$registrazioni = $_SESSION["registrazioni"];
$etaTotale = 0;
$numeroPersone = count($registrazioni);

if ($numeroPersone > 0) {
    foreach ($registrazioni as $eta) {
        $etaTotale += $eta;
    }

    $etaMedia = $etaTotale / $numeroPersone;
} else {
    $etaMedia = 0;
}
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Risultati delle registrazioni</title>
</head>
<body>
    <h1>Lista delle registrazioni</h1>
    <table border="1">
        <tr>
            <th>Codice Fiscale</th>
            <th>Età</th>
        </tr>
        <?php foreach ($registrazioni as $cf => $eta): ?>
            <tr>
                <td><?= htmlspecialchars($cf) ?></td>
                <td><?= htmlspecialchars($eta) ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <p>Età media: <?= number_format($etaMedia, 2) ?> anni</p>

    <p><a href="form.html">Aggiungi un nuovo inserimento</a></p>
</body>
</html>
