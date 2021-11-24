<?php
$songconn= mysqli_connect("remotemysql.com" , "kJPINILSBe", "9ItQywDQJ4");
$songdb= mysqli_select_db($songconn, 'kJPINILSBe');


if (isset($_POST['updatedata'])) {
    $id= $_POST['update_id'];
    $title = $_POST['update_title'];
    $artist=$_POST['artist'];
    $text = $_POST['text'];
   

    $songQry = "UPDATE song_dash SET  title='$title',  artist='$artist' WHERE id='$id'";
    $songQryRun= mysqli_query($songconn, $songQry);

    if ($songQryRun) {
        header("location: songDash.php?editsuccessful");
    } else {
        echo "<script>alert ('There was a problem updating the archive');</script>";
        
    }

}
?>
