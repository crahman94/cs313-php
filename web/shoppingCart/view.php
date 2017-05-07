<?php
session_start();
?>
<!DOCTYPE html>
<html>
<title>View your Cart</title>
<link rel="stylesheet" type="text/css" href="../soccercss.css">
<body id="body">

<p>Here are the items in your cart currently from your last submission:</p>
<br>
<?php
foreach ($_SESSION["things"] as $thing)
{
	$thing_clean = htmlspecialchars($thing);
	echo "<p>$thing_clean</p>";
}
?>
<p>Would you like to remove any of them?</p>
<a href="browse03.php">Return to Browse</a>
<br>
<br>
<a href="checkout.php">Continue to Checkout</a>
<br>
</body>
</html>
