<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
</head>

<body>


<?php
// Die Klasse Includieren
include_once 'warenkorb.php';
// Session starten
session_start();
// Eine Neue Instanz der Klasse chart erstellen
$chart = new chart();
// Prüfen ob der Warenkorb besteht
$chart->initial_chart();
?>
</body>
</html>