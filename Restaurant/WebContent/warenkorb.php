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
     * @param unknown_type $Artikelnummer 
     * @param unknown_type $Beschreibung 
     * @param unknown_type $Verkäufer 
     * @param unknown_type $Kosten 
     * @param unknown_type $MwstSatz 
     * @param unknown_type $MwSt 
     * @param unknown_type $ZwischenSumme 
     * @param unknown_type $Anzahl 
     * @param unknown_type $gesammt 
     */ 
    public function insertArtikel($Artikelnummer, $Beschreibung, $Verkäufer, $kosten, $MwstSatz, $MwSt, $ZwischenSumme, $Anzahl, $gesammt)
    { 
         
        $Artikel = array($Artikelnummer, $Beschreibung, $Verkäufer, $kosten, $MwstSatz, $MwSt, $ZwischenSumme, $Anzahl, $gesammt); 
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
        echo "<tr><th>Artikel Nummer</th><th>Beschreibung</th><th>Verkäufer</th><th>Summe</th><th>MwSt Satz</th><th>MwSt Summe</th><th>Zwischen Summe</th><th>Anzahl</th><th>Summe</th></tr>"; 
        for($i = 0 ; $i < count($Array); $i++) 
        { 
            $innerArray = $Array[$i]; 
             
            echo "<tr> 
            <td>$innerArray[0]</td> 
            <td>$innerArray[1]</td> 
            <td>$innerArray[2]</td> 
            <td>$innerArray[3]</td> 
            <td>$innerArray[4]</td> 
            <td>$innerArray[5]</td> 
            <td>$innerArray[6]</td> 
            <td>$innerArray[7]</td> 
            <td>$innerArray[8]</td> 
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