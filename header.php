<?php
//include_once ('db.php');
session_start();
include_once ('db.php');
include_once ('profile.func.php');
?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <title>PHP Project 01</title>
    <!--I won't do more than barebone HTML, since this isn't an HTML tutorial.-->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
  </head>

  <body>
    <nav>
        <div = class "wrapper">
        <ul>
            <li>
                <a href="scoreboard.php">scoreboard player</a>
                <a href="playerSearch.php">search for player</a>
                <a href="joinPlayImag">join</a>
                <?php
          if (isset($_SESSION["Uname"])) {
            echo "<li><a href ='insertScore.php'>add score </a> </li>";
            echo "<li><a href='profile.php'>add player</a></li>";
            echo "<li><a href='insertplayer.php'>add player</a></li>";
            echo "<li><a href='addPictures.php'>add pictures</a></li>";
          }
        ?>
            </li>
        </ul>
    </nav>
  </body>
</html>
