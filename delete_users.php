<?php
include('./connect.php');
 if(isset($_GET['delete_users'])){
   $delete_user = $_GET['delete_users'];

   $delete_item="Delete from `user` where user_id = $delete_user";
   $result=mysqli_query($con,$delete_item);
   if($result){
    echo "<script>alert('Deletion Successful')</script>";
   }
 }

?>