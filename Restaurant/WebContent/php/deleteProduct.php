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
//echo $q;
$Array = $_SESSION['chart'];
//if ($q != 0) {
$chart->delete_chartValue_at_Point1($q);
//}
//else{
//$chart->undo_chart();
//};
    
?>
</body>
</html>