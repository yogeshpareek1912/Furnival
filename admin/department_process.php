<?php include('config.php');

if($_POST['reg']=='submit')
	{
		$dep_name= $_POST['depname'];
	 $sql="INSERT INTO department(dep_name)VALUES('$dep_name')";
$result = mysqli_query($conn,$sql);
	//echo $sql;
 if($result)
	{
			//echo "<script>alert('department Add Successfully')</script>";
			//echo"<script>window.open('department.php','_self')</script>";	
			header("Location: department.php?status"); 
} 
    else
    {
		echo "<script>alert(' Unsuccessfully Add department ')</script>";
			echo"<script>window.open('department.php','_self')</script>";
	}
	}
?>