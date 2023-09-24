<?php
session_start(); 
 include "db_conn.php";
header("Location: payment.php?success=Payment Successful");
	         exit();
?>