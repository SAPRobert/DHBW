<!DOCTYPE html>
<html>
<head >
<meta charset="utf-8">
</head>

<body>

<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'restaurant';
$q = strval($_GET['q']);

$con = mysqli_connect($servername, $username, $password, $dbname);
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"restaurant");
$con->set_charset("utf8");

$sql="SELECT * FROM produkte WHERE prod_id = '".$q."'";
$result = mysqli_query($con,$sql);

while ($row = mysqli_fetch_array($result)) {
    $bild=$row['prod_bild'];
    $id=$row['prod_id'];
    $divid="anzeige";
    echo    "<div id=$divid>".
            "<li id=$id >" .
            "<img src=$bild >" . "<br>" .
            "<b>" . $row['prod_name'] . "</b>" . "<br>" .
            $row['prod_details'] . "<br>" .
            "<span>" . "Preis: " . number_format($row['prod_preis'], 2, ',', '.') . "€" . "</span>" . 
            "</li>".
            "</div>";
}

mysqli_close($con);
?>

</body>
</html>