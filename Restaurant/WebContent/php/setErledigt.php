<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Restaurant";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset("utf8");
$b_id = intval($_GET['q']);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
    $sql = "UPDATE bestellungen SET b_erl = 1 WHERE  b_id = $b_id";
    $conn->query($sql);

$conn->close();
?>