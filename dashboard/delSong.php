<!--This p[hp file is used in order for the delete functionality of folk songs dashboard be effective-->
<?php
$dbsong=mysqli_connect("remotemysql.com" , "kJPINILSBe", "9ItQywDQJ4", "kJPINILSBe");

$id=$_GET['id'];
$delsong= mysqli_query($dbsong, "DELETE FROM song_dash WHERE id='$id'" );
 if ($delsong) {
     mysqli_close($dbsong);
     header("location: songDash.php?recorddeleted");
     exit;
 }else {
    echo "Error deleting record";
 }
?>