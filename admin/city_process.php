<?php include('config.php');

if($_POST['reg']=='submit')
	{
		$city_name= $_POST['cname'];
	 
	 $sql="INSERT INTO city(city_name)VALUES('$city_name')";
$result = mysqli_query($conn,$sql);
	//echo $sql;
 if($result)
	{
		//	echo "<script>alert('city Add Successfully')</script>";
			//echo"<script>window.open('city.php','_self')</script>";	
			header("Location: city.php?status"); 
} 
    else
    {
		echo "<script>alert(' Unsuccessfully Add city ')</script>";
			echo"<script>window.open('city.php','_self')</script>";
	}
	}
?>