<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link rel="icon" href="../pictures/favicon.ico" type="image/ico">
<link rel="stylesheet" type="text/css" href="/dhbw/Restaurant/WebContent/css/style.css">
<link rel="stylesheet" type="text/css" href="/dhbw/Restaurant/WebContent/css/loader.css">
<script src="/dhbw/Restaurant/WebContent/js/Warenkorb.js"></script>
<script src="/dhbw/Restaurant/WebContent/js/loader.js"></script>
<title>Bewerten Sie Ihren Besuch!</title>
<style>
h1{    position: absolute;
    left: 38vw;
    top: 30%;
    }
    
#btn-feedback{
    position: absolute;
    left: 48%;
    top: 40%;
}
</style>

</head>
<body>
<?php 



if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    if (empty($_POST["geschmack"])) {
        $geschmack = 0;
    } else{
        $geschmack = test_input($_POST["geschmack"]);
    };
    if (empty($_POST["bedienung"])) {
        $bedienung = "0";
    } else{
        $bedienung = test_input($_POST["bedienung"]);
    };
    if (empty($_POST["ambiente"])) {
        $ambiente = "0";
    } else{
        $ambiente = test_input($_POST["ambiente"]);
    };
    if (empty($_POST["toiletten"])) {
        $toiletten = "0";
    } else{
        $toiletten = test_input($_POST["toiletten"]);
    };
    if (empty($_POST["system"])) {
        $system = "0";
    } else{
        $system = test_input($_POST["system"]);
    };
    if (empty($_POST["kommentar"])) {
        $kommentar = "";
    } else{
        $kommentar = test_input($_POST["kommentar"]);
    };
    
};

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
};



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
$sql = "INSERT INTO bewertung (bw_geschm, bw_bed, bw_amb, bw_toi, bw_sys, bw_kom) VALUES ($geschmack, $bedienung, $ambiente, $toiletten, $system, '$kommentar')";

if ($conn->query($sql) === TRUE) {
   // echo "New record created successfully";
} else {
   // echo "Error: " . $sql . "<br>" . $conn->error;
}
$geschmack = $bedienung = $ambiente = $toiletten = $system = $kommentar = "";

echo "<h1>" . "Vielen Dank für Ihre Bewertung!" . "</h1>";
$cookie=$_COOKIE["tisch"];
$link="../php/index.php?tischnummer=$cookie";

echo "<a href=$link>" . "<button id=btn-feedback class=btn>" . "Zurück" . "</button> </a>";
$conn->close();
?>
</body>
</html>


