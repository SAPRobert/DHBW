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
<style type="text/css">
/* .check { */
/* border-bottom: 1px solid grey; */
/* background-color: rgba(255,255,255,0.8); */
/* } */
.col-md-8{
background-color:rgba(255,255,255,0.8);
font-size: 1.7em;
}
textarea{
font-size: 0.7em;
}
button{
width:100%;
}
</style>
<script>
function newform(){
	document.getElementById("myForm").reset();
}


</script>
</head>
<body onload="newform()">

<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$geschmack = $bedienung = $ambiente = $toiletten = $system = $kommentar = "";

?>


<div class="row">
<div class="column col-md-2"></div>
<div class="column col-md-8">
<h3>Bitte bewerten Sie Ihren Besuch bei uns!</h3><br>
<p>Hier haben Sie die Möglichkeit, Anmerkungen und Feedback zu Ihrem Besuch im Restaurant "Zum Hirsch" zu hinterlassen.</p>
<br>
<form id="myForm" method="post" action="sendFeedback.php"> 
  <table class="table">
          <tr>
            <td class="check" width="45%"></td>
            <td class="check" width="11%">Völlig unzutreffend</td>
            <td class="check" width="11%">Unzutreffend</td>
            <td class="check" width="11%">Teils-teils</td>
            <td class="check" width="11%">Zutreffend</td>
            <td class="check" width="11%">Völlig zutreffend</td>
          </tr>
          <tr>
            <td class="check" width="45%">Mein Gericht war wohlschmeckend</td>
            <td class="check" width="11%" align="center" valign="middle">
              <input type="radio" name="geschmack" <?php if (isset($geschmack) && $geschmack=="1") echo "checked";?> value="1">
            </td>
            <td class="check" width="11%" align="center" valign="middle">
              <input type="radio" name="geschmack" <?php if (isset($geschmack) && $geschmack=="2") echo "checked";?> value="2">
            </td>
            <td class="check" width="11%" align="center" valign="middle">
              <input type="radio" name="geschmack" <?php if (isset($geschmack) && $geschmack=="3") echo "checked";?> value="3">
            </td>
            <td class="check" width="11%" align="center" valign="middle">
              <input type="radio" name="geschmack" <?php if (isset($geschmack) && $geschmack=="4") echo "checked";?> value="4">
            </td>
            <td class="check" width="11%" align="center" valign="middle">
              <input type="radio" name="geschmack" <?php if (isset($geschmack) && $geschmack=="5") echo "checked";?> value="5">
            </td>
          </tr>
          <tr>
            <td class="check" width="45%">Der/die Kellner/in war freundlich, aufgeschlossen und hilfsbereit</td>
            <td class="check" width="11%" align="center" valign="middle">
              <input type="radio" name="bedienung" <?php if (isset($bedienung) && $bedienung=="1") echo "checked";?> value="1">
            </td>
            <td class="check" width="11%" align="center" valign="middle">
              <input type="radio" name="bedienung" <?php if (isset($bedienung) && $bedienung=="2") echo "checked";?> value="2">
            </td>
            <td class="check" width="11%" align="center" valign="middle">
              <input type="radio" name="bedienung" <?php if (isset($bedienung) && $bedienung=="3") echo "checked";?> value="3">
            </td>
            <td class="check" width="11%" align="center" valign="middle">
              <input type="radio" name="bedienung" <?php if (isset($bedienung) && $bedienung=="4") echo "checked";?> value="4">
            </td>
            <td class="check" width="11%" align="center" valign="middle">
              <input type="radio" name="bedienung" <?php if (isset($bedienung) && $bedienung=="5") echo "checked";?> value="5">
            </td>
          </tr>
          <tr>
            <td class="check" width="45%">Das Ambiente des Restaurants war ansprechend</td>
            <td class="check" width="11%" align="center" valign="middle">
              <input type="radio" name="ambiente" <?php if (isset($ambiente) && $ambiente=="1") echo "checked";?> value="1">
            </td>
            <td class="check" width="11%" align="center" valign="middle">
              <input type="radio" name="ambiente" <?php if (isset($ambiente) && $ambiente=="2") echo "checked";?> value="2">
            </td>
            <td class="check" width="11%" align="center" valign="middle">
              <input type="radio" name="ambiente" <?php if (isset($ambiente) && $ambiente=="3") echo "checked";?> value="3">
            </td>
            <td class="check" width="11%" align="center" valign="middle">
              <input type="radio" name="ambiente" <?php if (isset($ambiente) && $ambiente=="4") echo "checked";?> value="4">
            </td>
            <td class="check" width="11%" align="center" valign="middle">
              <input type="radio" name="ambiente" <?php if (isset($ambiente) && $ambiente=="5") echo "checked";?> value="5">
            </td>
          </tr>
          <tr>
            <td class="check" width="45%">Die Toiletten waren sauber</td>
            <td class="check" width="11%" align="center" valign="middle">
              <input type="radio" name="toiletten" <?php if (isset($toiletten) && $toiletten=="1") echo "checked";?> value="1">
            </td>
            <td class="check" width="11%" align="center" valign="middle">
              <input type="radio" name="toiletten" <?php if (isset($toiletten) && $toiletten=="2") echo "checked";?> value="2">
            </td>
            <td class="check" width="11%" align="center" valign="middle">
              <input type="radio" name="toiletten" <?php if (isset($toiletten) && $toiletten=="3") echo "checked";?> value="3">
            </td>
            <td class="check" width="11%" align="center" valign="middle">
              <input type="radio" name="toiletten" <?php if (isset($toiletten) && $toiletten=="4") echo "checked";?> value="4">
            </td>
            <td class="check" width="11%" align="center" valign="middle">
              <input type="radio" name="toiletten" <?php if (isset($toiletten) && $toiletten=="5") echo "checked";?> value="5">
            </td>
          </tr>
    	  <tr>
            <td class="check" width="45%">Die Bedienung des Bestellsystems war intuitiv</td>
            <td class="check" width="11%" align="center" valign="middle">
              <input type="radio" name="system" <?php if (isset($system) && $system=="1") echo "checked";?> value="1">
            </td>
            <td class="check" width="11%" align="center" valign="middle">
              <input type="radio" name="system" <?php if (isset($system) && $system=="2") echo "checked";?> value="2">
            </td>
            <td class="check" width="11%" align="center" valign="middle">
              <input type="radio" name="system" <?php if (isset($system) && $system=="3") echo "checked";?> value="3">
            </td>
            <td class="check" width="11%" align="center" valign="middle">
              <input type="radio" name="system" <?php if (isset($system) && $system=="4") echo "checked";?> value="4">
            </td>
            <td class="check" width="11%" align="center" valign="middle">
              <input type="radio" name="system" <?php if (isset($system) && $system=="5") echo "checked";?> value="5">
            </td>
          </tr>
        </table>
    
        <table >
          <tr>
            <td class="check" width="45%">Sonstige Anmerkungen/ Verbesserungsvorschläge</td>
            <td class="check" width="55%">
            	<textarea name="kommentar" class="form-control" rows="5" id="comment"><?php echo $kommentar;?></textarea>
           
            </td>
          </tr>
        </table>
     
    
  
  <button type="submit" class="btn btn-default">Submit</button>
</form>
</div>
<div class="column col-md-2"></div>
</div>

</body>
</html>