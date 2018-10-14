<%@ page language="java" contentType="text/html; charset=utf-8"
    pageEncoding="utf-8"%>
    
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet"
	href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- <link rel="stylesheet" type="text/css" href="/dhbw/Restaurant/webcontent/css/style.css">
<link href='https://fonts.googleapis.com/css?family=Bilbo Swash Caps' rel='stylesheet'> -->
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script
	src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="http://localhost/dhbw/Restaurant/webcontent/css/style.css">
<link rel="icon" href="http://localhost/dhbw/Restaurant/webcontent/pictures/favicon.ico" type="image/ico">
<title>Bitte Passwort eingeben!</title>

<style>
form{
position:fixed;
top:20%;
left:50%;
margin-left:-15vw;
margin-top:-20px;
}

label{
font-size:30px;
position:relative;
top:3px;
}
#falsch{
position:fixed;
top:30%;
left:50%;
margin-left:-10vw;
margin-top:-20px;
}
</style>
</head>
<body>

<!-- <form autocomplete="off" method="post" action="kitchenLogin">
  Passwort: <input type="password" name="Passwort"><br>
  <input type="submit" value="Login">
</form> -->


<form autocomplete="off" class="form-inline" action="kitchenLogin" method="post">
  <div class="form-group">
    <label for="pwd">Passwort:</label>
    <input type="password" class="form-control input-lg" id="pwd" name="Passwort">
  </div>
  <button type="submit" value="Login" class="btn btn-default btn-lg btn-success">Submit</button>
</form>

</body>
</html>