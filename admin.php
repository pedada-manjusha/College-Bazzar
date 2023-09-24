<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COLLEGE BAZAAR!</title>

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Owl-carousel CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha256-kksNxjDRxd/5+jGurZUJd1sdR2v+ClrCl3svESBaJqw=" crossorigin="anonymous" />

    <!-- font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />

    <!-- Custom CSS file -->
    <link rel="stylesheet" href="style.css">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <?php
    // require functions.php file
    //require ('functions.php');
    ?>
    <style>
        .ad_img{
    width:100px;
    object-fit: contain;
    }
    </style>
</head>
<body>

<!-- start #header -->
<header id="header">
    <div class="strip d-flex justify-content-between px-4 py-1 bg-light">
        <p class="font-rale font-size-12 text-black-50 m-0">BMS INSTITUTE OF TECHNOLOGY AND MANAGEMENT,BANGALORE</p>
        <p class="font-rale font-size-12 text-black-50 m-0"></p>
        <div class="font-rale font-size-14">
            <a href="logout.php" class="px-3 border-right border-left text-dark">Logout</a>
            <!--<a href="index1.php" class="px-3 border-right border-left text-dark">Sign Up</a>-->
            <!-- <a href="cart.php" class="px-3 border-right text-dark">Whishlist</a>  -->
        </div>
    </div>

    <!-- Primary Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark color-second-bg">
        <a class="navbar-brand" href="index.php">COLLEGE BAZAAR!</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav m-auto font-rubik">
                <li class="nav-item active">
                    <!-- <a class="nav-link" href="index.php">HOME</a>   -->
                </li>
            </ul>
            <!-- <form action="#" class="font-size-14 font-rale"> -->
                <!-- <a href="cart.php" class="py-2 rounded-pill color-primary-bg">
                    <span class="font-size-16 px-2 text-white"><i class="fas fa-shopping-cart"></i></span>
                    <span class="px-3 py-2 rounded-pill text-dark bg-light"><?php //echo count($product->getData('cart')); ?></span>
                </a> -->
                <a href="" class="nav-link" style="color:white">Welcome Admin</a>
            <!-- </form> -->
            
        </div>
    </nav>
    <!-- !Primary Navigation -->

</header>
<!-- !start #header -->

<!-- start #main-site -->
<main id="main-site">
    <div class="bg-light">
        <h3 class="text-center p-2">MANAGE DETAILS</h3>
    </div>
    <div class="row">
        <div class="col-md-12 bg-secondary p-1 d-flex align-items-center">
            <div class="px-5">
             <a href="#"><img src="./assets/admin.jpeg" class="ad_img"></a>
             <p class="text-light text-center">Admin</p>
            </div>
            <div class="button text-center m-auto  ">
                <button><a href="insert_item.php" class="nav-link text-light bg-info my-1">Insert Items</a></button>
                <button><a href="admin.php?view_items" class="nav-link text-light bg-info my-1">View Items</a></button>
                <button><a href="admin.php?view_items" class="nav-link text-light bg-info my-1">Edit Items</a></button>
                <button><a href="admin.php?view_items" class="nav-link text-light bg-info my-1">Delete Items</a></button>
                <button><a href="admin.php?insert_cat" class="nav-link text-light bg-info my-1">Insert Categories</a></button>
                <!-- <button><a href="" class="nav-link text-light bg-info my-1">View Categories</a></button>
                <button><a href="" class="nav-link text-light bg-info my-1">All Orders</a></button>
                <button><a href="" class="nav-link text-light bg-info my-1">All Payments</a></button> -->
                <!-- <button><a href="" class="nav-link text-light bg-info my-1">Add Users</a></button> -->
                <button><a href="admin.php?list_users" class="nav-link text-light bg-info my-1">List Users</a></button>
                <!-- <button><a href="" class="nav-link text-light bg-info my-1"></a></button> -->
            </div>
        </div>
    </div>
<?php
  include('./connect.php');
?>
    <div class="container my-5">
        <?php
          if(isset($_GET['insert_cat'])){
            include('insert_cat.php');
          }
          if(isset($_GET['insert_item'])){
            include('insert_item.php');
          }
          if(isset($_GET['view_items'])){
            include('view_items.php');
          }
          if(isset($_GET['edit_items'])){
            include('edit_items.php');
          }
          if(isset($_GET['delete_items'])){
            include('delete_items.php');
          }
          if(isset($_GET['list_users'])){
            include('list_users.php');
          }
        ?>
    </div>
