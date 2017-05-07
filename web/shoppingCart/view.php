<?php
session_start();
?>
<!DOCTYPE html>
<html>
<title>View your Cart</title>
<link rel="stylesheet" type="text/css" href="cart.css">
<body id="body">
<div id="divmain">

<p>These are the things that you have selected to buy:</p>
<br>
<p><?php
foreach ($_SESSION["things"] as $thing)
{
	$thing_clean = htmlspecialchars($thing);
	echo "<p>$thing_clean</p>";
}
?></p>
<button class="btn"><a href="browse.php">Continue Browsing</a></button>
<br>
<br>
<button class="btn"><a href="checkout.php">Checkout Now</a></button>
<br>
</div>
</body>
</html>
