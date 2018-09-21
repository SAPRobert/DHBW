<!DOCTYPE html>
<html>
<head >
<style>
img{
width: 100%;
}
</style>
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


$sql="SELECT * FROM produkte WHERE prod_id = '".$q."'";
$result = mysqli_query($con,$sql);


while ($row = mysqli_fetch_array($result)) {
    $bild=$row['prod_bild'];
    echo    "<li>" . "<img src=$bild >" . "<br>" .
            $row['prod_name'] . "<br>" .
            $row['prod_details'] . "<br>" .
            "<span>" . "Preis: " . $row['prod_preis'] . " €" . "</span>" ."</li>";
}


mysqli_close($con);
?>
</body>
</html>