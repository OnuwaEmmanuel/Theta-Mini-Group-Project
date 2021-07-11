<!DOCTYPE html>
<html>
<head><?php

require_once('includes/functions.php');

$from_value = '';
$from_unit = '';
$to_unit = '';
$to_value = '';

if(isset($_POST['submit'])) {
  $from_value = $_POST['from_value'];
  $from_unit = $_POST['from_unit'];
  $to_unit = $_POST['to_unit'];
  
  $to_value = convert_volume($from_value, $from_unit, $to_unit);
}

$volume_options = array(
  'cubic inches',
  'cubic feet',
  'Imperial gallons',
  'Imperial quarts',
  'Imperial pints',
  'Imperial cups',
  'Imperial ounces',
  'Imperial tablespoons',
  'Imperial teaspoons',
  'US gallons',
  'US quarts',
  'US pints',
  'US cups',
  'US ounces',
  'US tablespoons',
  'US teaspoons',
  'cubic centimeters',
  'cubic meters',
  'liters',
  'milliliters'
);

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Convert Volume</title>
    <link href="styles.css" rel="stylesheet" type="text/css">
  </head>
  <body>

    <div id="main-content">

      <h1>Convert Volume</h1>
	<meta charset="utf-8">
	<title>Measurement Conversion</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
	<div id="main-content">
	<h2>Php Mini Project By Theta Group.</h2>
		<h1>Measurement Conversion</h1>
	
		<ul id="measurement-types">
			<li><a href="length.php">Length and Distance</a></li>
			<li><a href="area.php">Area</a></li>
			<li><a href="volume.php">Volume and Capacity</a></li>
			<li><a href="mass.php">Mass and Weight</a></li>
			<li><a href="speed.php">Speed</a></li>
			<li><a href="temperature.php">Temperature</a></li>
		</ul>
	</div>

	<li><a href="theta.php"> List Of Theta Group Members</a></li>
</body>
</html>
