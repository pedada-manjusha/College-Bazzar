<?php
include('./connect.php');
 if(isset($_GET['delete_items'])){
   $delete_id = $_GET['delete_items'];

   $delete_item="Delete from `product` where item_id = $delete_id";
   $result=mysqli_query($con,$delete_item);
   if($result){
    echo "<script>alert('Deletion Successful')</script>";
   }
 }

?>