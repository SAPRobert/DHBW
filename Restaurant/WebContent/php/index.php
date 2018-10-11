

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

<link rel="stylesheet" type="text/css"
	href="/dhbw/Restaurant/WebContent/css/style.css">
<link rel="stylesheet" type="text/css"
	href="/dhbw/Restaurant/WebContent/css/loader.css">
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script
	src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href='https://fonts.googleapis.com/css?family=Annie Use Your Telescope' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Bilbo Swash Caps' rel='stylesheet'>

<script src="/dhbw/Restaurant/WebContent/js/jQuery.js"></script>
<script src="/dhbw/Restaurant/WebContent/js/loader.js"></script>



</head>

<body onload="myFunction()" style="margin: 0;">
<?php
include_once 'cookie.php';
?>

<div id="loader"></div>


	<div style="display: none;" id="myDiv" class="animate-bottom">
		<div id="oben" class="row">
			<div id="Warenkorb" class="column col-md-2">
				<a class="notification" id="link" onclick="viewBasket()"
					href="../html/warenkorb.html" title="Warenkorb anzeigen"> <svg
						version="1.0" xmlns="http://www.w3.org/2000/svg"
						width="30.000000pt" height="30.000000pt"
						viewBox="0 0 1600.000000 1600.000000"
						preserveAspectRatio="xMidYMid meet">
            <metadata>
            Created by potrace 1.15, written by Peter Selinger 2001-2017
            </metadata>
            <g
							transform="translate(0.000000,1600.000000) scale(0.100000,-0.100000)"
							fill="#000000" stroke="none">
                <path
							d="M0 15330 l0 -670 1072 -2 1072 -3 1331 -5325 1331 -5325 4516 -3
                4516 -2 16 47 c34 105 233 775 851 2853 509 1711 1097 3664 1132 3758 4 9
                -1131 12 -5653 12 l-5659 0 -666 2663 -665 2662 -1597 3 -1597 2 0 -670z
                m14026 -6024 c-6 -23 -1168 -3874 -1187 -3934 l-11 -32 -3486 2 -3486 3 -491
                1965 c-270 1081 -495 1977 -498 1993 l-7 27 4586 0 4586 0 -6 -24z" />
                <path
							d="M6825 3329 c-484 -51 -929 -316 -1204 -718 -207 -305 -303 -641 -288
                -1015 23 -570 323 -1071 821 -1371 172 -103 392 -180 598 -211 154 -22 451
                -15 588 15 324 72 595 217 828 445 458 446 619 1114 416 1725 -164 493 -558
                887 -1051 1051 -238 79 -466 104 -708 79z" />
                <path
							d="M11490 3329 c-730 -83 -1301 -600 -1462 -1325 -19 -86 -22 -129 -22
                -334 -1 -258 10 -332 74 -532 158 -486 572 -900 1058 -1058 199 -64 274 -75
                532 -75 223 1 241 2 355 29 144 34 271 79 385 136 820 410 1157 1390 764 2220
                -155 327 -458 629 -785 784 -280 133 -603 188 -899 155z" />
            </g>
        </svg> <span id="count" class="badge"></span>
				</a>
			</div>
			<div class="column col-md-8">
				<h1 class="header">Willkommen im Restaurant "Zum Hirsch"</h1>
			</div>
		</div>
		<div class="container-fluid">
		<div class="row">
			<div class="column column-left col-md-4">
				<h2 class="heading"><b>Kategorie</b></h2>
				<div class="list-group Kat">
					<a href="#" class="list-group-item kategorie" id="Alles"
						onclick="showProducts(this.id)">Gesamtes Angebot</a> <a href="#"
						class="list-group-item kategorie" id="Vorspeise"
						onclick="showProducts(this.id)">Vorspeise</a> <a href="#"
						class="list-group-item kategorie" id="Hauptspeise"
						onclick="showProducts(this.id)">Hauptspeisen</a> <a href="#"
						class="list-group-item kategorie" id="Nachspeise"
						onclick="showProducts(this.id)">Nachspeisen</a> <a href="#"
						class="list-group-item kategorie" id="Getraenk"
						onclick="showProducts(this.id)">Getränke</a>
					<!-- <span class="glyphicon glyphicon-chevron-right"></span>-->
				</div>

			</div>
			<div class="column col-md-4">
				<h2 class="heading"><b>Gericht</b></h2>
				<div class="column col-md-12 column-middle">
						<div class="produkte" id="produkte"></div>
				</div>
			</div>
			<div class="column column-right col-md-4">
				<h2 class="heading"><b>Details</b></h2>
				<div class="" id="details"></div>
				<div id="ione">
					<button type="button" class="btn btn-default btn-sm btn-pm" onclick="plus()">
						<span class="glyphicon glyphicon-plus"></span> 
					</button>
					<button type="button" class="btn btn-default btn-sm btn-pm" onclick="minus()">
						<span class="glyphicon glyphicon-minus"></span> 
					</button>
					<input id="input1" type="text" value="1">
					</div>
					<button id="b_add" onclick="addToBasket()" type="button"
						class="btn btn-success">Zur Bestellung hinzufügen</button>
				
			</div>
		</div>
	</div>
</div>



	<!-- 	<div id="testfenster"></div> -->
</body>

</html>

