<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<style>

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
$con->set_charset("utf8");




if($q=="Alles"){
    $sql="SELECT * FROM produkte";
}
else{
$sql="SELECT * FROM produkte WHERE prod_kat = '".$q."'";
}
$result = mysqli_query($con,$sql);

$func="showOneProduct(this.id)";


while ($row = mysqli_fetch_array($result)) {
    $id=$row['prod_id'];
    
    echo   "<li id=$id onclick=$func >" .
           $row['prod_name'] .
           "<span>" .
           number_format($row['prod_preis'], 2, ',', '.') . "€" .
           "</span>" .
           "</li>" ;
}


mysqli_close($con);
?>

</body>
</html>