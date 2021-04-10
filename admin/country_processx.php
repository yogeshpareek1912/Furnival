<?php include('config.php');

if($_POST['reg']=='submit')
	{
		$country_name= $_POST['cname'];
	 $sql="INSERT INTO countries(country_name)VALUES('$country_name')";
$result = mysqli_query($conn,$sql);
	//echo $sql;
 if($result)
	{
			//echo "<script>alert('country Add Successfully')</script>";
			//echo"<script>window.open('country.php','_self')</script>";	
			header("Location: country.php?status"); 
} 
    else
    {
		echo "<script>alert(' Unsuccessfully Add country ')</script>";
			echo"<script>window.open('country.php','_self')</script>";
	}
	}
?>