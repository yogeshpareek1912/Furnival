<?php
	session_start();	
	include("config.php");
	 
		$username=$_POST['username'];
		$pass=$_POST['pass'];
		
		 $sql = "SELECT * FROM admin WHERE A_username='$username' and A_password='$pass'";
		//echo $sql;
		
		$result = mysqli_query($conn,$sql);
		
		if(mysqli_num_rows($result) > 0)
	 
    { 	 	 
			echo"<script>window.open('product.php','_self')</script>";		
    }
    else
    {
		 	
			echo "<script>alert('Invalid Id Password')</script>";
			echo"<script>window.open('index.php','_self')</script>";				
			}

?>



