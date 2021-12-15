<?php
include_once ('header.php');
$sql = "SELECT * FROM player INNER JOIN pictures ON
player.playerID = pictures.id ";
$sql = "SELECT * FROM player INNER JOIN pictures ON
player.playerID = pictures.id
JOIN scoreboard ON scoreboard.player = player.playerID";
$result = mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html>
  <body>
    <tr>
      <th>Player name</th>
      <th>player image</th>
      <?php
      if(mysqli_num_rows($result)>0)
      {
        while ($row =mysqli_fetch_array($result))
        {
        ?>
        <tr>
          <td>
            <?php echo $row["name"];?>
          </td>
          <td>
            <?php echo $row["score"];?>
          </td>
          <td>
            <img src = "<?php echo $row ["fileName"]; ?>" alt="" /></td>
        </tr>
        <?php
      }
    }
       ?>
    </tr>
  </body>
</html>
