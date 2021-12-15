<?php
if(isset($_POST['submit'])){
  $SFPL = $_POST['fpl_week'];
  $SPlayer = $_POST['player'];
  $SScore = $_POST['score'];
  require_once ('db.php');
  require_once ('insertScore.func.php');
  insertScore($conn,$SFPL,$SPlayer,$SScore);
}
 ?>
