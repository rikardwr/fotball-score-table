<?php
//search in db if i can find the user
function searchDB($conn,$admin){
  $query = "SELECT * FROM admin WHERE name = '$admin'";
  $query_execute = mysqli_query($conn,$query);
  if($row=mysqli_fetch_array($query_execute))
  {
    return $row;
  }
  else{
    $query_execute = false;
    return $query_execute;
  }
}
//my login profile
function profileLogIn($conn,$admin){
  $searchDB = searchDB($conn,$admin);
  if($searchDB == true){
    session_start();
    $_SESSION ["ID"] = $searchDB["id"];
    $_SESSION["Uname"] = $searchDB["name"];
    header("location: index.php?admin=found");}}
