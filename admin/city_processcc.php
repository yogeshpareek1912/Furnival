<?php include('config.php');

if($_POST['reg']=='submit')
	{
		$city_name= $_POST['cname'];
		$state_id= $_POST['state'];
		
	 $sql="INSERT INTO cities(city_name,state_id)VALUES('$city_name','$state_id')";
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