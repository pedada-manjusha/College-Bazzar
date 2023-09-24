<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
     <form action="login.php" method="post">
	 <!-- <form action="" method="post"> -->
     	<h2>USER LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>User Name</label>
     	<input type="text" name="uname" placeholder="User Name"><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password"><br>

     	<button type="submit" name="user_login">Login</button>
		<a href="signup.php" class="ca">Create an account</a>
     </form>
</body>
</html>

<?php
//   if(isset($_POST['user_login'])){
// 	$uname=$_POST['uname'];
// 	$password=$_POST['password'];

//     if (empty($uname)) {
// 		header("Location: index1.php?error=User Name is required");
// 	    exit();
// 	}else if(empty($pass)){
//         header("Location: index1.php?error=Password is required");
// 	    exit();
// 	}
// 	else{
//        $select_query="Select * from `user` where user_name='$uname'";
// 	   $result=mysqli_query($con,$select_query);
// 	   $row_count=mysqli_num_rows($result);
// 	   $row_data=mysqli_fetch_assoc($result);
// 	   if($row_count>0){
//           if(password_verify($password,$row_data['password'])){
// 			echo "<script>alert('Registration successful')</script>";
// 		  }
// 		  else{
// 			echo "<script>alert('Invalid')</script>";
// 		  }
// 	   }
// 	   else{
// 		header("Location: index1.php?error=Incorect User name or password");
// 		exit();
// 	   }
// 	}
//   }
?>