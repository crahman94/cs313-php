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

<p>Your Purchase Details:</p>
<br>
<p><?
foreach ($_SESSION["things"] as $thing)
{
	$thing_clean = $thing;
	echo "<p>$thing_clean</p>";
}
?></p>


<p>Shipping Information</p>
<br>

<p><?php
	echo $street . ", \n" . $city . " " . $state .  ", " . $zip;
?></p>
</div>
</body>
</html>
