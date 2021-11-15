<?php
session_start();
 $feedbackdb=mysqli_connect("remotemysql.com" , "kJPINILSBe", "9ItQywDQJ4", "kJPINILSBe");
 if(isset($_POST['submitFeedback'])){
    $comment=$_POST['comment'];
    $rate=$_POST['rate'];
    $feedbacksql="INSERT INTO feedback (comment) VALUE ('$comment')";
                    
    mysqli_query($feedbackdb, $feedbacksql );
                
    }
                
?>