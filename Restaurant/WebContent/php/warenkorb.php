<?php

class chart
{

    /**
     * Initialisiert die Klasse, muss in jeder Seite ausgeführt werden.
     */
    public function initial_chart()
    {
        $chart = array();
        if (! isset($_SESSION['chart'])) {
            $_SESSION['chart'] = $chart;
        }
    }

    /**
     *
     * Fügt einen Artikel in das Array ein
     *
     * @param unknown_type $prod_id
     * @param unknown_type $b_anz
     */
    public function insertArtikel($prod_id, $b_anz)
    {
        $Artikel = array(
            $prod_id,
            $b_anz
        );
        $chart = $_SESSION['chart'];
        array_push($chart, $Artikel);
        $_SESSION['chart'] = $chart;
    }

    /**
     * Gibt Alle Artikel des Array in einer Tabelle aus.
     */
    public function getChart()
    {
        $Array = $_SESSION['chart'];
        echo "<table width='100%'>";
        echo "<tr><th>Artikel Nummer</th><th>Anzahl</th></tr>";
        for ($i = 0; $i < count($Array); $i ++) {
            $innerArray = $Array[$i];
            
            echo "<tr>
            <td>$innerArray[0]</td>
            <td>$innerArray[1]</td>
            
            </tr>";
        }
        
        echo "</table>";
    }
    
    /**
     * [MODIFIZIERT] Gibt Alle Artikel des Array in einer Tabelle aus.
     */
    public function getChart1()
    {
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
        echo "<table width='100%'>";
        echo "<tr> <th>Name</th> <th>Preis</th> <th>Anzahl</th> <th>Zwischensumme</th> </tr>";
        for ($i = 0; $i < count($Array); $i ++) {
            $innerArray = $Array[$i];
            $innerinnerArray = $innerArray[0];
            $sql = "SELECT * FROM produkte WHERE prod_id = '" . $innerinnerArray . "'";
            $result = mysqli_query($con, $sql);
            
            while ($row = mysqli_fetch_array($result)) {
                $zwischen = floatval(floatval($innerArray[1]) * floatval($row['prod_preis']));
                $endsumme = floatval($endsumme) + floatval($zwischen);
                $zeile = $zeile + 1;
                $func = "deleteProduct($zeile)";
                $button = "<button onclick=$func> X </button>";
                echo "<tr>" . 
                // "<th>" . $row['prod_id'] ."</th>".
                "<th>" . $row['prod_name'] . "</th>" . "<th>" .
                number_format($row['prod_preis'], 2, ',', '.') . "€" . "</th>" . "<th>" .
                $innerArray[1] . "</th>" . "<th>" .
                number_format($zwischen, 2, ',', '.') . "€ " .
                "</th>" . "<th>" . $button . "</th>" . "</tr>";
            }
            ;
        }
        echo "</table>";
        echo "<br> . <span>" . "Gesamtsumme: " . number_format($endsumme, 2, ',', '.') . " €" . "</span>";
    }

    /**
     * Löscht den Waren Korb
     */
    public function undo_chart()
    {
        $_SESSION['chart'] = array();
    }

    /**
     *
     * Gibt einen Datensatz Zurück
     *
     * @param int $point
     */
    public function get_chartValue_at_Point($n)
    {
        $Array = $_SESSION['chart'];
        return $Array[$n];
    }

    /**
     *
     * Entfernt ein Artikel am Point n
     *
     * @param int $point
     */
    public function delete_chartValue_at_Point($point)
    {
        $Array = $_SESSION['chart'];
        unset($Array[$point]);
        $_SESSION['chart'] = $Array;
    }
        
    /**
     *
     * [MODIFIZIERT] Entfernt ein Artikel am Point n
     *
     * @param int $point
     */
    public function delete_chartValue_at_Point1($point)
    {
        $servername = 'localhost';
        $username = 'root';
        $password = '';
        $dbname = 'restaurant';
        
        $con = mysqli_connect($servername, $username, $password, $dbname);
        if (! $con) {
            die('Could not connect: ' . mysqli_error($con));
        }
        mysqli_select_db($con, "restaurant");
        $con->set_charset("utf8");
        
        
        $Array1 = $_SESSION['chart'];
        unset($Array1[$point]);
        $Array = array_values($Array1);
        $endsumme = 0.0;
        $zeile = - 1;
        echo "<table width='100%'>";
        echo "<tr> <th>Name</th> <th>Preis</th> <th>Anzahl</th> <th>Zwischensumme</th> </tr>";
        for ($i = 0; $i < count($Array); $i ++) {
            $innerArray = $Array[$i];
            $innerinnerArray = $innerArray[0];
            $sql = "SELECT * FROM produkte WHERE prod_id = '" . $innerinnerArray . "'";
            $result = mysqli_query($con, $sql);
            while ($row = mysqli_fetch_array($result)) {
                $zwischen = floatval(floatval($innerArray[1]) * floatval($row['prod_preis']));
                $endsumme = floatval($endsumme) + floatval($zwischen);
                $zeile = $zeile + 1;
                $func = "deleteProduct($zeile)";
                $button = "<button onclick=$func> X </button>";
                echo "<tr>" . 
                "<th>" . $row['prod_name'] . "</th>" .
                "<th>" . number_format($row['prod_preis'], 2, ',', '.') . "€" . "</th>" .
                "<th>" . $innerArray[1] . "</th>" .
                "<th>" . number_format($zwischen, 2, ',', '.') . "€" . "</th>" .
                "<th>" . $button . "</th>" .
                "</tr>";
            };
        }
        echo "</table>";
        echo "<br> . <span>" . "Gesamtsumme: " . number_format($endsumme, 2, ',', '.') . "€" . "</span>";
        $_SESSION['chart'] = $Array;
    }

    /**
     * Gibt die Anzahl der Artikel zurück
     */
    public function get_chart_count()
    {
        return count($_SESSION['chart']);
    }
}

?>

