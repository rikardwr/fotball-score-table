<?php
$servername = "localhost";  //name of the server
$dbUsername = "root";       //username
$dbPwd = "";                //password
$dbName = "mydb"; //name of my database
//mysqli_connect start connection to my mySQL server
$conn = mysqli_connect($servername, $dbUsername, $dbPwd, $dbName);

if(!$conn){
  die("connection failed: " . mysqli_connect_error());
}
?>
