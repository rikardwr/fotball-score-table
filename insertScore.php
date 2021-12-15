<?php
include_once ('header.php');
?>
<!DOCTYPE html>
<html>
  <body>
    <form action ="insertScore.inc.php" method= "post">
      <input type="number" name="fpl_week">
      <input type="number" name="player">
      <input type "number" name ="score">
      <input type="submit" name="submit" value ="add score">
    </form>
  </body>
</html>
