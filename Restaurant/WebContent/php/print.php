<?php 

include_once'warenkorb.php';
include_once'addBestellung.php';
$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");



    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'restaurant';
    
    $q = strval($_GET['q']);
    
    $con = mysqli_connect($servername, $username, $password, $dbname);
    if (! $con) {
        die('Could not connect: ' . mysqli_error($con));
    }
    
    mysqli_select_db($con, "restaurant");
    $con->set_charset("utf8");
    
    
    $Array = $_SESSION['chart'];
    // print_r($Array);
    $endsumme = 0.0;
    $zeile = - 1;
    $start= "Name" . "\t" . "Preis" . "\t" . "Anzahl". "\t" . "Zwischensumme" . "\n";
    fwrite($myfile, $start);
    
    for ($i = 0; $i < count($Array); $i ++) {
        $innerArray = $Array[$i];
        $innerinnerArray = $innerArray[0];
        $sql = "SELECT * FROM produkte WHERE prod_id = '" . $innerinnerArray . "'";
        $result = mysqli_query($con, $sql);
        
        while ($row = mysqli_fetch_array($result)) {
            $zwischen = floatval(floatval($innerArray[1]) * floatval($row['prod_preis']));
            $endsumme = floatval($endsumme) + floatval($zwischen);
            $zeile = $zeile + 1;
            $out= $row['prod_name'] . "\t" . number_format($row['prod_preis'], 2, ',', '.') ."\t". $innerArray[1] . "\t". number_format($zwischen, 2, ',', '.') . "€ " . "\n" ;
            fwrite($myfile, $out);
        }
        ;
    }
    $summe= "Summe" . "\t" . number_format($endsumme, 2, ',', '.') . " €" ;
    fwrite($myfile, $summe);
    fclose($myfile);
?>