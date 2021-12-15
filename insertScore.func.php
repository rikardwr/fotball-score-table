<?php
function insertScore($conn,$SFPL,$SPlayer,$SScore){
  $sql = "INSERT INTO `scoreboard` (fpl_week,player,score)
   VALUES ('$SFPL','$SPlayer','$SScore')";
  $query_execute = mysqli_query($conn,$sql);
  header("location: index.php?score=found");
  exit();
}
