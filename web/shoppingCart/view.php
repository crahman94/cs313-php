<?php
session_start();
?>
<!DOCTYPE html>
<html>
<title>View your Cart</title>
<link rel="stylesheet" type="text/css" href="../soccercss.css">
<body id="body">
<div id="divmain">

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
<button class="btn"><a href="browse.php">Continue Browsing</a></button>
<br>
<br>
<button class="btn"><a href="checkout.php">Checkout Now</a></button>
<br>
</div>
</body>
</html>
