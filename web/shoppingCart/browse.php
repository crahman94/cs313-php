<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Teach 03</title>
  </head>
  <body>
    <form action="view.php" method="POST">
      <label for="name">Name</label>
      <input id="formName" type="text" name="name" placeholder="Name">
      <br>
      <label for="email">Email</label>
      <input id="formEmail" type="text" name="email">
      <br>
      <?php
        $majors = array('Thingamabobs','Gadgets' ,'Gizmos' ,'Whoseits' ,'Whatsits');
       ?>
       <?php foreach ($majors as $major): ?>
         <input type="radio" name="major" value="<?php echo $major ?>">
         <label for="major"><?php echo $major ?></label>
         <br>
       <?php endforeach; ?>
       <label for="comments">Comments:</label>
       <br>
      <textarea id="comments" name="comments" rows="8" cols="80"></textarea>
      <br>
      <input type="submit" name="submit" value="Submit">
    </form>

  </body>
</html>
