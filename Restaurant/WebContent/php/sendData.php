<?php
include 'warenkorb.php';
include 'addBestellung.php';
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Restaurant";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset("utf8");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$b_tisch=$_COOKIE["tisch"];
$Array = $_SESSION['chart'];
for ($i = 0; $i < count($Array); $i ++) {
    $innerArray=$Array[$i];
    $prod_id=$innerArray[0];
    $b_anz=$innerArray[1];
    $sql = "INSERT INTO bestellungen (prod_id, b_anz, b_tisch) VALUES ($prod_id, $b_anz, $b_tisch)";
    
    if ($conn->query($sql) === TRUE) {
        //echo "New record created successfully";
    } else {
        //echo "Error: " . $sql . "<br>" . $conn->error;
    }
     
};

echo "<h1>" . "Vielen Dank für Ihre Bestellung. Bei Fragen wenden Sie sich gerne an unser Servicepersonal" . "</h1>";
$link="../php/feedback.php";

echo "<a href=$link>" . "<button id=btn-feedback class=btn>" . "Jetzt Feedback zu Ihrer Bestellung geben" . "</button> </a>";
$chart->undo_chart();
$conn->close();
?>