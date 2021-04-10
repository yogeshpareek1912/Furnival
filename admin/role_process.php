<?php include('config.php');

if($_POST['reg']=='submit')
	{
		$rolename= $_POST['rolename'];
	 $sql="INSERT INTO role(role_name)VALUES('$rolename')";
$result = mysqli_query($conn,$sql);
	//echo $sql;
 if($result)
	{
			//echo "<script>alert('department Add Successfully')</script>";
			//echo"<script>window.open('department.php','_self')</script>";	
			header("Location: role.php?status"); 
} 
    else
    {
		echo "<script>alert(' Unsuccessfully Add department ')</script>";
			echo"<script>window.open('role.php','_self')</script>";
	}
	}
?>