<?php 
 session_start(); 
 //include "db_conn.php";
 include('./connect.php');
// session_start(); 
// include "./database/DBController.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	if (empty($uname)) {
		header("Location: admin_login.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: admin_login.php?error=Password is required");
	    exit();
	 }else{
        
		$pass=md5($pass);

		//    $sql = "SELECT * FROM user WHERE user_name='$uname' AND password='$pass'";
              $sql = "SELECT * FROM `admin` WHERE admin_name='$uname' AND password='$pass'";
        
		    $result = mysqli_query($con, $sql);
		  // $result = mysqli_query($conn, $sql);
		// $result = mysqli_query($this->con, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['admin_name'] === $uname && $row['password'] === $pass){
			//if ($row['first_name'] === $uname && $row['last_name'] === $pass){
            	// $_SESSION['user_name'] = $row['user_name'];
            	// $_SESSION['name'] = $row['name'];
            	// $_SESSION['id'] = $row['id'];
				echo "<script>alert('Login successful')</script>";
			    echo "<script>window.open('admin.php','_self')</script>";
            	//header("Location: index.php");
		        exit();
            }else{
				header("Location: admin_login.php?error=Incorect User name or password");
		        exit();
			}
		}else{
			header("Location: admin_login.php?error=Incorect User name or password");
	        exit();
		}
	}
	
}else{
	header("Location: admin.php");
	exit();
}