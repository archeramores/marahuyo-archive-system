<!--This p[hp file is used in order for the delete functionality of festive event dashboard be effective-->

<?php
$dbfest=mysqli_connect("remotemysql.com" , "kJPINILSBe", "9ItQywDQJ4", "kJPINILSBe");

$id=$_GET['id'];
$delfest= mysqli_query($dbfest, "DELETE FROM fest_dash WHERE id='$id'" );
 if ($delfest) {
     mysqli_close($dbfest);
     header("location: festDash.php");
     exit;
 }else {
    echo "Error deleting record";
 }
?>