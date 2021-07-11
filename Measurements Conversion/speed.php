
<?php

require_once('includes/functions.php');

$from_value = '';
$from_unit = '';
$to_unit = '';
$to_value = '';

if(isset($_POST['submit'])) {
  $from_value = $_POST['from_value'];
  $from_unit = $_POST['from_unit'];
  $to_unit = $_POST['to_unit'];
  
  $to_value = convert_speed($from_value, $from_unit, $to_unit);
}

$speed_options = array(
  "feet per second",
  "miles per hour",
  "meters per second",
  "kilometers per hour",
  "knots"
);

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Convert Speed</title>
    <link href="styles.css" rel="stylesheet" type="text/css">
  </head>
  <body>
