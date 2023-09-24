<?php
  include('./connect.php');
  if(isset($_GET['edit_items'])){
    $edit_id = $_GET['edit_items'];
    $get_data="Select * from `product` where item_id=$edit_id";
    $result=mysqli_query($con, $get_data);
    $row=mysqli_fetch_assoc($result);
    $item_name=$row['item_name'];
    $item_desc=$row['item_desc'];
    $item_brand=$row['item_brand'];
    $item_price=$row['item_price'];
    $item_image=$row['item_image'];
  }
?>
<style>
    .edit{
        width: 60px;
    }
</style>
<div class="container mt-5">
    <h2 class="text-center">Edit Product</h2>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-outline mb-4 w-50 m-auto">
            <label for="item_name" class="form-label">Item Name</label>
            <input type="text" value="<?php echo  $item_name?> "name="item_name" class="form-control mb-4" required="required">
        </div>
        <div class="form-outline mb-4 w-50 m-auto">
            <label for="item_desc" class="form-label">Item Description</label>
            <input type="text" value="<?php echo  $item_desc?> " name="item_desc" class="form-control mb-4" required="required">
        </div>
        <div class="form-outline mb-4 w-50 m-auto">
            <label for="item_cat" class="form-label">Item Category</label>
            <input type="text" value="<?php echo  $item_brand?>" name="item_cat" class="form-control mb-4" required="required">
        </div>
        <div class="form-outline mb-4 w-50 m-auto">
            <label for="item_image" class="form-label">Item Image</label>
            <div class="d-flex">
               <input type="file" name="item_image" class="form-control" required="required">
               <?php echo"<img src='./assets/products/".$row['item_image']."' alt='' class='edit'>";?>
            </div> 
        
        </div>
        <div class="form-outline mb-4 w-50 m-auto">
            <label for="item_price" class="form-label">Item Price</label>
            <input type="text" value="<?php echo  $item_price?>" name="item_price" class="form-control mb-4" required="required">
        </div>
        <div class="w-50 m-auto">
            <input type="submit" name="edit_item" value="Update" class="btn btn-info px-3 mb-3">
        </div>
    </form>
</div>

<!-- Updation -->
<?php
  if(isset($_POST['edit_item'])){
    $item_name=$_POST['item_name'];
    $item_desc=$_POST['item_desc'];
    $item_cat=$_POST['item_cat'];
    $item_price=$_POST['item_price'];
    $item_image=$_FILES['item_image']['name'];
    $temp_image=$_FILES['item_image']['tmp_name'];

    $target_path = basename($item_image);
    move_uploaded_file($_FILES['item_image']['tmp_name'],$target_path);

     $update_items="update `product` set item_brand='$item_cat',item_name='$item_name',item_desc='$item_desc',item_price='$item_price',item_image='$target_path',item_register=NOW() where item_id=$edit_id";
     $result_query=mysqli_query($con,$update_items);
     if($result_query){
        echo "<script>alert('Updation Successful')</script>";
        // echo "<script>window.open('view_items.php','_self')</script>";
  }
}
?>