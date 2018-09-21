<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<style>
li{
background-color: rgb(255, 212, 127);
	font-size: 30px;
	margin-top: 15px;
	border-radius: 8px;
	list-style-type:none;
	}
span{
position: absolute;
	right: 20px;
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

if($q=="Alles"){
    $sql="SELECT * FROM produkte";
}
else{
$sql="SELECT * FROM produkte WHERE prod_kat = '".$q."'";
}
$result = mysqli_query($con,$sql);

echo "<ul>";
while ($row = mysqli_fetch_array($result)) {
    echo "<li>" . $row['prod_name'] . "<span>".$row['prod_preis']."</span>" ."</li>";
}
echo "</ul>";

mysqli_close($con);
?>

</body>
</html>