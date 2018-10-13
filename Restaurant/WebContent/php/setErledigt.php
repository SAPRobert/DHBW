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
//     if ($conn->query($sql) === TRUE) {
//         echo "New record created successfully";
//     } else {
//         echo "Error: " . $sql . "<br>" . $conn->error;
//     }
    
 


$conn->close();
?>