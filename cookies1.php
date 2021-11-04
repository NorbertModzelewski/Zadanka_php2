<?php
$cookie_name = "user";
$cookie_value = "John Doe";
$cookie_round = 0
setcookie($cookie_name, $cookie_value, time() + (20), "/"); // 86400 = 1 day
?>
<html>
<body>

<?php
if(!isset($_COOKIE[$cookie_name])) {
  echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
  echo "Liczba ile razy weszłeś".$cookie_round;
    echo "Cookie '" . $cookie_name . "' is set!<br>";
  echo "Value is: " . $_COOKIE[$cookie_name];
}
?>

</body>
</html>
