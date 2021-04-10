<?php include('config.php');

if($_POST['reg']=='submit')
	{
		$designation_name= $_POST['desname'];
		$salary= $_POST['salary'];
	 $sql="INSERT INTO designation(designation_name,salary)VALUES('$designation_name','$salary')";
$result = mysqli_query($conn,$sql);
	//echo $sql;
 if($result)
	{
			//echo "<script>alert('designation  Add Successfully')</script>";
		//	echo"<script>window.open('designation.php','_self')</script>";	
				header("Location: designation.php?status");
} 
    else
    {
		echo "<script>alert(' Unsuccessfully Add designation ')</script>";
			echo"<script>window.open('designation.php','_self')</script>";
	}
	}
?>