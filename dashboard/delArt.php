<!--This p[hp file is used in order for the delete functionality of cultural arts dashboard be effective-->

<?php
$dbart=mysqli_connect("remotemysql.com" , "kJPINILSBe", "9ItQywDQJ4", "kJPINILSBe");

$id=$_GET['id'];
$delart= mysqli_query($dbart, "DELETE FROM art_dash WHERE id='$id'" );
 if ($delart) {
     mysqli_close($dbart);
     header("location: artDash.php?recorddeleted");
     exit;
 }else {
    echo "Error deleting record";
 }
?>