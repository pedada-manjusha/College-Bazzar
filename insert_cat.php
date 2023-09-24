<?php
  include('./connect.php');
  if(isset($_POST['insert_cat'])){
     $inserted_cat = $_POST['cat_title'];
     //checking duplicate categories
     $select = "Select * from `categories` where cat_title='$inserted_cat'";
     $result_select = mysqli_query($con,$select);
     $number = mysqli_num_rows($result_select);  //num_rows method gives the number of rows
     if($number>0){
      echo "<script>alert('Category already exists')</script>";
     }
     else{
     $insert_query="insert into `categories` (cat_title) values ('$inserted_cat')";
     $result=mysqli_query($con,$insert_query);
     if($result){
      echo "<script>alert('Category has been inserted successfully')</script>";
     }
    }
  }
?>

<form action="" method="post" class="mb-2">
<div class="input-group w-90 mb-2">
  <span class="input-group-text bg-info" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
  <input type="text" class="form-control" name="cat_title" placeholder="Insert Categories" autocomplete="off" aria-label="Categories" aria-describedby="basic-addon1">
</div>

<div class="input-group w-10 mb-2 m-auto">
  <input type="submit" class="bg-info border-0 p-2 my-3" name="insert_cat" value="Insert Category" aria-label="Username" aria-describedby="basic-addon1" class="bg-info"> 
  <!-- <button class="bg-info p-2 my-3 border-0">Insert</button> -->
</div>
</form>