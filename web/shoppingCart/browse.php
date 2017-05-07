<?php
session_start();
?>

<!DOCTYPE html>
<html>
<title>Little Mermaid Shop!</title>
<link rel="stylesheet" type="text/css" href="../soccercss.css">
<body id="body">

<div align="center" id="divmain">
<h1>Ariel's Shop of Humans</h1>

<div>Coming to you right from Ariel's cave its all your favorite human things!</div>
<p id="imgp"><img id="img1" src="../arielcave.jpg" alt="Ariel's Cave"><p>
<div>All these things are great for your everyday mermaid need!
Scuttle has helped us name them for your convenience! Check which
ones you would like to buy!</div>

<form method="POST" action="browse.php">

  <input type="checkbox" name="things[]" value="Forks">
  <label id="label">Dinglehopper</label>
  <p style="float:inherit; width: 150px; height: 150px;"><img class="fork" src="../fork.jpg" alt="Fork"></p>
	<input type="checkbox" name="things[]" value="Corkscrew">
  <label id="label">Thingamabob</label>
  <p style="float:inherit; width: 150px; height: 150px;"><img class="fork" src="../corkscrew.jpg" alt="Corkscrew"></p>
	<input type="checkbox" name="things[]" value="Watch">
  <label id="label">Gadget</label>
  <p style="float:inherit; width: 150px; height: 150px;"><img class="fork" src="../watch.jpg" alt="Watch"></p>
	<input type="checkbox" name="things[]" value="Pipe">
  <label id="label">Snarfblat</label>
  <p style="float:inherit; width: 150px; height: 150px;"><img class="fork" src="../pipe.jpg" alt="Pipe"></p>


<br><button class="btn" type="submit">Add Things</button><br/>
</form>


<a href="view.php">View your Cart</a>
<br>
<?php
$_SESSION["things"] = $_POST["things"];
?>
<br>
</div>

</body>
</html>
