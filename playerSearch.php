<?php
include_once ('header.php');
?>
<html>
  <body>
    <form class="" method="post">
      <input type "text" name = "player" placeholder="Enter players name to search" /><br/>
      <input type= "submit" name = "search" value="Search player">
    </form>
    <?php
    if(isset($_POST['search'])){
    $name = $_POST['player'];
    $query = "SELECT * FROM player WHERE name = '$name'";
    $query_execute = mysqli_query($conn,$query);
    while($row = mysqli_fetch_array($query_execute))
    {
      ?>
      <form action ="" method="POST">
        <li>
          id
        <input type = "text" name = "playerID" value="<?php echo $row['playerID']?>" />
      </li>
      <li>
        name
        <input type = "text" name = "name"value="<?php echo $row['name']?>" />
      </li>
      <li>
        club
        <input type = "text" name = "clubName"value="<?php echo $row['club']?>" />
      </li>
      </form>
      <?php
     }
   }
   ?>
  </body>
</html>
