<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<style>
</style>
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

// String des Arrays q holen
$detail = $_GET['q'];

// leeres Array herausfiltern, durch Include in showBestellung benötigt
if ($detail[0] == "q") {
    $detail = "0,0";
}
;

// String detail in Array details aufspalten
$details = preg_split("/[\s,]+/", $detail);

// leeres Array wiedererkennen, echt Bestelllungen anlegen
if ($details[0] != "0" && $details[1] != "0") {
    $id = $details[0];
    $anz = $details[1];
    $chart->insertArtikel($id, $anz);
}
;
//$chart->undo_chart();

?>
</body>
</html>