<?php 

class chart{
    
    /**
     *
     * Initialisiert die Klasse, muss in jeder Seite ausgeführt werden.
     */
    public function initial_chart()
    {
        
        $chart = array();
        if(!isset($_SESSION['chart']))
        {
            $_SESSION['chart']=$chart;
        }
        
    }
    
    /**
     *
     * Fügt einen Artikel in das Array ein
     * @param unknown_type $prod_id
     * @param unknown_type $b_anz
     */
    public function insertArtikel($prod_id, $b_anz)
    {
        
        $Artikel = array($prod_id, $b_anz);
        $chart = $_SESSION['chart'];
        array_push($chart, $Artikel);
        $_SESSION['chart'] = $chart;
        
    }
    
    /**
     *
     * Gibt Alle Artikel des Array in einer Tabelle aus.
     */
    public function getChart()
    {
        $Array = $_SESSION['chart'];
        echo "<table width='100%'>";
        echo "<tr><th>Artikel Nummer</th><th>Anzahl</th></tr>";
        for($i = 0 ; $i < count($Array); $i++)
        {
            $innerArray = $Array[$i];
            
            echo "<tr>
            <td>$innerArray[0]</td>
            <td>$innerArray[1]</td>
            
            </tr>";
        }
        
        echo "</table>";
    }
    
    
    /**
     *
     * Löscht den Waren Korb
     */
    public function undo_chart()
    {
        $_SESSION['chart'] = array();
    }
    
    
    /**
     *
     * Gibt einen Datensatz Zurück
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
     * @param int $point
     */
    public function delete_chartValue_at_Point($point)
    {
        $Array = $_SESSION['chart'];
        unset($Array[$point]);
    }
    
    /**
     *
     * Gibt die Anzahl der Artikel zurück
     */
    public function get_chart_count()
    {
        return count($_SESSION['chart']);
    }
} 

?>

