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

<p>Here are the items you purchase:</p>
<br>
<?
foreach ($_SESSION["items"] as $item)
{
	$item_clean = htmlspecialchars($item);
	echo "<p>$item_clean</p>";
}
?>


<p>They will be shipped to this location:</p>
<br>

<p><?php
	echo $street . ", " . $city . " " . $state .  ", " . $zip;
?></p>
</div>
</body>
</html>
