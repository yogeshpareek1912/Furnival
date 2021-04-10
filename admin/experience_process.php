<?php include('config.php');

if($_POST['reg']=='submit')
	{
		$exp_name= $_POST['exp_name'];
	 $sql="INSERT INTO experience(exp_name)VALUES('$exp_name')";
$result = mysqli_query($conn,$sql);
	//echo $sql;
 if($result)
	{
			//echo "<script>alert('experience Add Successfully')</script>";
		//	echo"<script>window.open('experience.php','_self')</script>";	
			header("Location: experience.php?status=1"); 
} 
    else
    {
		echo "<script>alert(' Unsuccessfully Add experience ')</script>";
			echo"<script>window.open('experience.php','_self')</script>";
	}
	}
?>