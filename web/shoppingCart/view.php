<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Info</title>
  </head>
  <body>
    <?php
      $name = $_POST["name"];
      $email = $_POST["email"];
      $major = $_POST["major"];
      $comments = $_POST["comments"];
      $things = $_POST["things"];
      $thingsMap = array('corkscrew' => "Thingamabobs", 'fork' => "Dinglehopper",
       'pipe' => "Snarfblat", 'watch' => "Gadget");
     ?>
     <p><?php echo $name; ?></p>
     <p><?php echo $email; ?></p>
     <p><?php echo $major; ?></p>
     <p><?php echo $comments; ?></p>

     <?php foreach ($things as $thing): ?>
       <p><?php echo $thingsMap[$thing] ?></p>
     <?php endforeach; ?>

  </body>
</html>
