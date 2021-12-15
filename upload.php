
<?php
  include_once ('db.php');
  $name = $_FILES['file']['name'];
  $temp_name = $_FILES['file']['tmp_name'];
  $targetDir = "uploads/";
  if(isset($_POST['submit'])){
    $fileDestination = $targetDir . $name;
      $name = $_FILES['file']['name'];
      if( move_uploaded_file($_FILES['file']['tmp_name'],$fileDestination)){
        $sql = "INSERT INTO pictures (fileName) VALUES('".$fileDestination."')";
        if(mysqli_query($conn,$sql)){
          echo "you are a guiness";
          header("location: displayDB.php");
        }
      }else{
        echo "There was a error in the uplading";
      }
    }
?>
