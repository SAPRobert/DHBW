<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
</head>

<body>

<?php
include_once 'addBestellung.php';
include_once 'Warenkorb.php';

$counter = $chart->get_chart_count();
if ($counter != 0) {
    $chart->undo_chart();
    $chart->getChart1();
}
else{
    $chart->getChart1(); 
};
?>

</body>
</html>