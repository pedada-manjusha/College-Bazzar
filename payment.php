<?php
// include header.php file
//include ('header.php');
include('./connect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
    <!-- <div class="container">
        <h2 class="text-center text-info">Payment Options</h2>
        <div class="row d-flex justify-content-center align-items-center">
            <div class="">
               <a href="https://pay.google.com" class="" ><img src="./assets/payment/gpay.jpeg"></a>
            </div> 
            <div class="">
            <a href="https://www.phonepe.com/" class="" ><img src="./assets/payment/phonepe.jpeg"></a>
            </div>    -->
        <!-- <div class="row d-flex justify-content-center align-items-center">
            <a href="https://www.phonepe.com/" class="" ><img src="./assets/payment/phonepe.jpeg"></a>
        </div> -->
    <!-- </div> -->
    <form action="payment1.php" method="post">
     	<h2>Payment Successful</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<!-- <label>User Name</label>
     	<input type="text" name="uname" placeholder="User Name"><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password"><br> -->

     	<!-- <button type="submit">Pay</button> -->
		<a href="cart.php" class="ca">Back To Cart</a>
     </form>
    
</body>
</html>

<?php
// include footer.php file
//include ('footer.php');
?>