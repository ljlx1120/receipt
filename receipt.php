<?php
  $first_name = $_GET["first_name"];
  $last_name = $_GET["last_name"];
  $full_name = $first_name . " " . $last_name;
  $street = $_GET["street"];
  $city = $_GET["city"];
  $zip_code = $_GET["zip_code"];
  $state = $_GET["state"];

  $full_address = $street . " " . $city . " " . $zip_code .  ", "  . $state;
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Receipt</title>
  </head>
  <body>
    <h1>Hello, <?php echo $full_name; ?>. Thanks for purchasing Xing's chicken feet!</h1>
    <h3>We will ship the item to this address: <?php echo $full_address; ?></h3>

    <h1><?php echo "Today is " . date("m/d/Y l h:i:s a"); ?></h1>
  </body>
</html>
