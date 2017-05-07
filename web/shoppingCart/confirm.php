<?php
session_start();
$street = $_POST["street"];
$city = $_POST["city"];
$state = $_POST["state"];
$zip = $_POST["zip"];
?>
<!DOCTYPE html>
<html>
<title>Confirmation</title>
<link rel="stylesheet" type="text/css" href="cart.css">
<body id="body">
  <div id="divmain">

<h1>Your Purchase Details:</h1>
<br>
<p><?
foreach ($_SESSION["things"] as $thing)
{
	$thing_clean = $thing;
	echo "<p>$thing_clean</p>";
}
?></p>


<h2>Shipping Information</h2>
<br>

<p><?php
	echo $street . ", " . $city . " " . $state .  ", " . $zip;
?></p>
</div>
</body>
</html>
