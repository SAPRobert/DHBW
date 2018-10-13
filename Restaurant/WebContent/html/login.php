<!DOCTYPE html>
<html>
<head>

<title>Restaurant "Zum Hirsch"</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet"
	href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="/dhbw/Restaurant/webcontent/css/style.css">
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script
	src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="/Restaurant/js/jQuery.js"></script>
<style>
form{
position:fixed;
top:20%;
left:50%;
margin-left:-16vw;
margin-top:-20px;
}

label{
font-size:25px;
}
</style>

</head>
<body>
<?php

?>
<!-- 
<form action="../php/index.php" method="get">
Tischnummer: <input class="input-lg" type="text" name="tischnummer"><br>
<input id="submit" type="submit">
</form> -->

<form class="form-inline" action="../php/index.php" method="get">
  <div class="form-group">
    <label for="pwd">Tischnummer:</label>
    <input type="text" class="form-control input-lg" id="pwd" name="tischnummer">
  </div>
  <button type="submit" class="btn btn-default btn-lg btn-success">Submit</button>
</form>

</body>
</html>