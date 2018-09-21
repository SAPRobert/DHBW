<!DOCTYPE html>
<html>
<head >
<style>
table {
    width: 100%;
    border-collapse: collapse;
    top:0px;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
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

echo "<ul>";
while ($row = mysqli_fetch_array($result)) {
    echo "<li>" . $row['prod_name'] . "<span>".$row['prod_preis']."</span>" ."</li>";
    //echo $zeile['prod_name'] . "<br>";
}
echo "</ul>";

mysqli_close($con);
?>
</body>
</html>