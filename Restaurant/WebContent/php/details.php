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
    $divid1="anzeige";
    $divid2="text";
    echo    "<div id=$divid1>".
            "<li id=$id >" .
            "<img src=$bild >" . "<br>" .
            "<div id=$divid2>".
            "<b>" . $row['prod_name'] . "</b>" . "<br>" .
            $row['prod_details'] . "<br>" .
            "<span>" . "Preis: " . number_format($row['prod_preis'], 2, ',', '.') . "€" . "</span>" . 
            "</li>".
            "</div>".
            "</div>";
}

mysqli_close($con);
?>

</body>
</html>