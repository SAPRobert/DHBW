<?php
$cookie_name = "tisch";
$cookie_value = $_POST["tischnummer"];
setcookie($cookie_name, $cookie_value, time() + (86400 * 1), "/"); // 86400 = 1 day
?>
<html>
<body>
</body>
</html>