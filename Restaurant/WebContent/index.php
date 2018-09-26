<?php
$cookie_name = "tisch";
$cookie_value = $_POST["tischnummer"];
setcookie($cookie_name, $cookie_value, time() + (86400 * 1), "/"); // 86400 = 1 day
?>

<!DOCTYPE html>
<html lang="de">
<head>

<title>Restaurant "Zum Hirsch"</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet"
	href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="/dhbw//Restaurant/WebContent/css/style.css">
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script
	src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="/dhbw/Restaurant/WebContent/js/jQuery.js"></script>


</head>

<body>
	<div>
		<h1 class="header">Willkommen im Restaurant "Zum Hirsch"</h1>
	</div>
	<div class="row">
		<div class="column column-left col-md-3">
			<h3 class="heading">Wählen Sie eine Kategorie</h3>
			<div class="list-group Kat" >
				<a href="#" class="list-group-item kategorie" id="Alles" onclick="showProducts(this.id)">Gesamtes Angebot</a> <a
					href="#" class="list-group-item kategorie" id="Vorspeise" onclick="showProducts(this.id)">Vorspeise</a>
				<a href="#" class="list-group-item kategorie" id="Hauptspeise" onclick="showProducts(this.id)">Hauptspeisen</a>
				<a href="#" class="list-group-item kategorie" id="Nachspeise" onclick="showProducts(this.id)">Nachspeisen</a>
				<a href="#" class="list-group-item kategorie" id="Getraenk" onclick="showProducts(this.id)">Getränke</a>
				<!-- <span class="glyphicon glyphicon-chevron-right"></span>-->
			</div>
		</div>
		<div class="column column-middle col-md-4">
			<h3 class="heading">Wählen Sie hier Ihr Gericht aus</h3>
			<div class="produkte" id="produkte"></div>
	
		</div>
		<div class="column column-right col-md-4">
			<h3 class="heading">Details</h3>
			<div class="" id="details"></div>
			<div>
			<input id="ione" type="text" value="1">
			<button onclick="addToBasket()" type="button" class="btn btn-success">Zur Bestellung hinzufügen</button>
			</div>
		</div>
	</div>
	<button onclick="deleteBasket()" type="button" class="btn btn-success">Warenkorb löschen</button>
	<a onclick="viewBasket()" href="warenkorb.html" title="Warenkorb anzeigen">Warenkorb anzeigen</a>
	<div id="testfenster">
	</div>
</body>

</html>

