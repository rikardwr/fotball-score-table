
<?php
if(isset($_POST['submit'])){
  $admin = $_POST['name'];
  $PASSWORD = $_POST['PASSWORD'];
  require_once ('db.php');
  require_once ('profile.func.php');
  profileLogin($conn,$admin);
}else{
  echo "something went wrong";
}
