<?php
session_start();
?>

<!DOCTYPE html>
<html>
<title>Checkout</title>
<link rel="stylesheet" type="text/css" href="cart.css">
<body id="body">
  <div id="divmain">
  <h1 id="h1">Checkout</h1>

<form method="POST" action="confirm.php">
Street Address: <input type="text" name="street"><br>
City: <input type="text" name="city"><br>
State: <input type="text" name="state"><br>
ZIP:<input type="text" name="zip"><br>
<p>Confirm your purchase</p>

<?php
$_SESSION["streetadd"] = $_POST["streetadd"];
$_SESSION["city"] = $_POST["city"];
$_SESSION["state"] = $_POST["state"];
$_SESSION["zip"] = $_POST["zip"];
?>

<input type="submit"><br><br>

<a href="cart03.php">Return to Cart</a>
</form>
</div>
</body>
</html>
