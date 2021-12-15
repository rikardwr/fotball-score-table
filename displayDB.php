<?php
//includes the databaseconnection
include_once ('db.php');

// display pictures off players
$sql = "SELECT * FROM pictures";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_assoc($result)){
        $imageURL =$row["fileName"];
?>
    <img src="<?php echo $imageURL; ?>" alt="" />
<?php }
}else{ ?>
    <p>No image(s) found...</p>
<?php } ?>
