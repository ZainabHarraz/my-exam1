<?php
$cookie_name = "Zainab";
$cookie_value = "Zainab";
setcookie($cookie_name, $cookie_value, time() + (60*60*24*7), "/");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  

</head>
<body>
<?php
if(!isset($_COOKIE[$cookie_name])) {
  echo "Cookie named " . $cookie_name . " is not set!";
} else {
  echo "Cookie " . $cookie_name . "is set!<br>";
  echo '  <style>
        body{
            background-color: bisque;
        }
    </style>';
}
?>
</body>
</html>