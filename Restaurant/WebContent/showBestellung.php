<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<style>
span{
    font-size: xx-large;
    left: 13px;
    font-style: italic;
    position: absolute;
}
th{
    font-size: xx-large;
}
</style>
</head>

<body>


<?php
// Die Klasse Includieren
include_once 'warenkorb.php';
include_once 'addBestellung.php';

//$chart->getChart();

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'restaurant';
$q = strval($_GET['q']);

$con = mysqli_connect($servername, $username, $password, $dbname);
if (! $con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con, "restaurant");

$Array = $_SESSION['chart'];
//print_r($Array);
$endsumme=0.0;
echo "<table width='100%'>";
echo "<tr> <th>Artikelnummer</th> <th>Name</th> <th>Preis</th> <th>Anzahl</th> <th>Zwischensumme</th> </tr>";
for ($i = 0; $i < count($Array); $i ++) {
    $innerArray = $Array[$i];
    $innerinnerArray = $innerArray[0];
    $sql = "SELECT * FROM produkte WHERE prod_id = '" . $innerinnerArray . "'";
    $result = mysqli_query($con, $sql);
    
    while ($row = mysqli_fetch_array($result)) {
        $zwischen=floatval(floatval($innerArray[1])*floatval($row['prod_preis']));
        $endsumme=floatval($endsumme) + floatval($zwischen);
        echo "<tr>" .
        "<th>" . $row['prod_id'] ."</th>".
        "<th>" . $row['prod_name'] . "</th>".
        "<th>" . $row['prod_preis'] . "</th>".
        "<th>" . $innerArray[1] ."</th>".
        "<th>" . $zwischen ."</th>".
        "</tr>";
    };
    
    
    /*
     * echo "<tr>
     * <td>$innerArray[0]</td>
     * <td>$innerArray[1]</td>
     *
     * </tr>";
     */
}
//echo $endsumme;

echo "</table>";

echo "<br> . <span>". "Gesamtsumme: " . floatval($endsumme) . " €" . "</span>";


/*
 * $sql="SELECT * FROM produkte WHERE prod_id = '".$q."'";
 * $result = mysqli_query($con,$sql);
 */

?>
</body>
</html>