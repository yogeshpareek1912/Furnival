<?php include('config.php');

if($_POST['reg']=='submit')
	{
		$state_name= $_POST['sname'];
		$country_id= $_POST['country'];
	 $sql="INSERT INTO states(state_name,country_id)VALUES('$state_name','$country_id')";
$result = mysqli_query($conn,$sql);
	//echo $sql;
 if($result)
	{
			//echo "<script>alert('States Add Successfully')</script>";
			//echo"<script>window.open('state.php','_self')</script>";	
		header("Location: state.php?status"); 
} 
    else
    {
		echo "<script>alert(' Unsuccessfully Add States ')</script>";
			echo"<script>window.open('state.php','_self')</script>";
	}
	}
?>