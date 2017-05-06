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
        $majors = array('Computer Science', 'Web Design and Development', 'Computer Information Technology', 'Computer Engineering');
       ?>
       <?php foreach ($majors as $major): ?>
         <input type="radio" name="major" value="<?php echo $major; ?>">
         <label for="major"><?php echo $major; ?></label>
         <br>
       <?php endforeach; ?>
       <label for="comments">Comments:</label>
       <br>
      <textarea id="comments" name="comments" rows="8" cols="80"></textarea>
      <br>
      <?php $things = array(); ?>
      <input id="corkscrew" type="checkbox" name="things[]" value="corkscrew">
      <label for="corkscrew">Thingamabobs</label>
      <br>
      <input id="fork" type="checkbox" name="things[]" value="fork">
      <label for="fork">Dinglehopper</label>
      <br>
      <input id="pipe" type="checkbox" name="things[]" value="pipe">
      <label for="pipe">Snafblat</label>
      <br>
      <input id="watch" type="checkbox" name="things[]" value="watch">
      <label for="watch">Gadgets</label>
      <br>
      <!-- <input id="au" type="checkbox" name="things[]" value="au">
      <label for="au">Australia</label>
      <br>
      <input id="af" type="checkbox" name="things[]" value="af">
      <label for="af">Afria</label>
      <br>
      <input id="an" type="checkbox" name="things[]" value="an">
      <label for="an">Antarctica</label>
      <br> -->
      <br>
      <input type="submit" name="submit" value="Submit">
    </form>

  </body>
</html>
