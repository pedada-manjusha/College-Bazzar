<!-- <form action="" method="post" class="mb-2">
<div class="input-group w-90 mb-2">
  <span class="input-group-text bg-info" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
  <input type="text" class="form-control" name="cat_title" placeholder="Insert Items" aria-label="Items" aria-describedby="basic-addon1">
</div>

<div class="input-group w-10 mb-2 m-auto">
  <!-- <input type="submit" class="form-control bg-info" name="insert_cat" valu="Insert Categories" aria-label="Username" aria-describedby="basic-addon1" class="bg-info"> -->
  <!-- <button class="bg-info p-2 my-3 border-0">Insert</button>
</div>
</form> --> 
<?php
  include('connect.php');
  if(isset($_POST['insert_item'])){
    $item_cat=$_POST['item_cat'];
    $item_title=$_POST['item_title'];
    $description=$_POST['description'];
    //$item_keyword=$_POST['item_keyword'];
    // $item_cat=$_POST['item_cat'];
    $item_price=$_POST['item_price'];
    $item_status='true';
    // for images
    $item_image1=$_FILES['item_image1']['name'];
    // image temp name
    $temp_image1=$_FILES['item_image1']['tmp_name'];

    // checking empty condition
    // if($item_title=='' or $description=='' or  $item_keyword=='' or $item_cat=='' or $item_price=='' or $item_image1==''){
      if($item_title=='' or $description=='' or $item_cat=='' or $item_price=='' or $item_image1==''){
       echo "<script>alert('Please Fill All The Fields')</script>";
       exit();
    }
    else{
       $upload_dir = "./assets/";
      //  $target_path = time().$item_image1;
      // $target_path = "./assets/products".basename($item_image1);
      $target_path = basename($item_image1);
      //  move_uploaded_file($_FILES['item_image1']['tmp_name'],$upload_dir.$target_path);
      move_uploaded_file($_FILES['item_image1']['tmp_name'],$target_path);
       //move_uploaded_file($temp_image1,"./assets/products/$item_image1");  //for moving img inside db          //'$item_image1'
       //query for insertion
      //  $insert_items="insert into `items` (item_name,item_desc,item_key,cat_title,item_img,item_price,item_date,status) values ('$item_title','$description','$item_keyword','$item_cat','$item_image1','$item_price',NOW(),$item_status)";
      //  $insert_items="insert into `product` (item_brand,item_name,item_desc,item_price,item_image,item_register) values ('$item_cat','$item_title','$description','$item_price','$item_image1',NOW())";
      $insert_items="insert into `product` (item_brand,item_name,item_desc,item_price,item_image,item_register) values ('$item_cat','$item_title','$description','$item_price','".$target_path."',NOW())";
       $result_query=mysqli_query($con,$insert_items);
       if($result_query){
        echo "<script>alert('Insertion Successful')</script>";
       }
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Insert Items-Admin Dashboard</title>
      <!-- Bootstrap CDN -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<!-- Owl-carousel CDN -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=" crossorigin="anonymous" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha256-kksNxjDRxd/5+jGurZUJd1sdR2v+ClrCl3svESBaJqw=" crossorigin="anonymous" />

<!-- font awesome icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />

<!-- Custom CSS file -->
<link rel="stylesheet" href="style.css">
</head>
<body class="bg-light">
    <div class="container mt-3">
      <h1 class="text-center">INSERT ITEMS</h1>
      <!-- form -->  <!-- enctype to insert the item images -->
      <!-- *required* also checks for empty condition -->
     <form action="" method="post" enctype="multipart/form-data">

         <div class="form-outline mb-4 w-50 m-auto">
          <label for="item_cat" class="form-label">ITEM CATEGORY</label>
          <input type="text" name="item_cat" id="item_cat" class="form-control mb-4" placeholder="Enter Item Category" autocomplete="off" required="required">
         </div>
         <div class="form-outline mb-4 w-50 m-auto">
          <label for="item_title" class="form-label">ITEM TITLE</label>
          <input type="text" name="item_title" id="item_title" class="form-control mb-4" placeholder="Enter Item Name" autocomplete="off" required="required">
         </div>
         <div class="form-outline mb-4 w-50 m-auto">
          <label for="description" class="form-label">ITEM DESCRIPTION</label>
          <input type="text" name="description" id="description" class="form-control mb-4" placeholder="Enter Item Description" autocomplete="off" required="required">
         </div>
         <!-- <div class="form-outline mb-4 w-50 m-auto">
          <label for="item_keyword" class="form-label my-3">ITEM KEYWORD</label>
          <input type="text" name="item_keyword" id="item_keyword" class="form-control" placeholder="Enter Item Keyword" autocomplete="off" required="required">
         </div> -->
         
         <!-- <div class="form-outline mb-4 w-50 m-auto">
          <label for="item_cat" class="form-label my-3">ITEM CATEGORY</label>
          <input type="text" name="item_cat" id="item_cat" class="form-control" placeholder="Enter Item Category" autocomplete="off" required="required">
         </div> -->
         <!-- <div class="form-outline mb-4 w-50 m-auto">
           <select name="item_cat" id="" class="form-select my-3">
             <option value="">Select the category</option>
             <?php
              //  $select_query = "Select * from `categories`";
              //  $result_query = mysqli_query($con,$select_query);
              //  while($row=mysqli_fetch_assoc($result_query)){
              //     $cat_title = $row['cat_title'];
              //     echo "<option value='$category_id'>$cat_title</option>";
              //  }
             ?>
           </select>
         </div> -->

         <div class="form-outline mb-4 w-50 m-auto">
          <label for="item_price" class="form-label">ITEM PRICE</label>
          <input type="text" name="item_price" id="item_price" class="form-control mb-4" placeholder="Enter Item Price" autocomplete="off" required="required">
         </div>

         <!-- Item image -->
         <div class="form-outline mb-4 w-50 m-auto">
          <label for="item_image1" class="form-label">ITEM IMAGE </label>
          <input type="file" name="item_image1" id="item_image1" class="form-control mb-4" required="required">
         </div>

         <!-- <div class="form-outline mb-4 w-50 m-auto">
          <label for="item_image2" class="form-label">ITEM IMAGE 2</label>
          <input type="file" name="item_image2" id="item_image2" class="form-control" required="required">
         </div> -->

         <!-- <div class="form-outline mb-4 w-50 m-auto">
          <label for="item_price" class="form-label my-3">ITEM PRICE</label>
          <input type="text" name="item_price" id="item_price" class="form-control" placeholder="Enter Item Price" autocomplete="off" required="required">
         </div> -->

         <div class="form-outline mb-4 w-50 m-auto">
            <input type="submit" name="insert_item" class="btn btn-info my-3">
         </div>
     </form>    
    </div>
    
</body>
</html>