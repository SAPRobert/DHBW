<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
</head>

<body>

<?php
include 'warenkorb.php';
include 'addBestellung.php';

$q = strval($_GET['q']);

$Array = $_SESSION['chart'];

$chart->delete_chartValue_at_Point1($q);  
?>

</body>
</html>