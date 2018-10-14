<!DOCTYPE html>
<html>
<head>

<title>Restaurant "Zum Hirsch"</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="/dhbw/Restaurant/webcontent/css/style.css">

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
position:relative;
top:3px;
}
</style>

</head>
<body>

<?php
include_once 'warenkorb.php';
include_once 'addBestellung.php';
$chart->undo_Chart();
?>

<form class="form-inline" action="../php/index.php" method="get">
  <div class="form-group">
    <label for="pwd">Tischnummer:</label>
    <input type="number" class="form-control input-lg" id="pwd" name="tischnummer">
  </div>
  <button type="submit" class="btn btn-default btn-lg btn-success">Submit</button>
</form>

</body>
</html>