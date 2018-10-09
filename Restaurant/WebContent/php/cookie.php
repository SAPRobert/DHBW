<?php
$cookie_name = "tisch";
$cookie_value = $_GET["tischnummer"];
setcookie($cookie_name, $cookie_value, time() + (86400 * 1), "/"); // 86400 = 1 day
?>