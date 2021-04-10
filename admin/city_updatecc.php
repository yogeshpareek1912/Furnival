

<?php 
include('config.php');

if($_POST['reg']=='submit')
	{
	$state_id = $_POST['states'];
	$city_name = $_POST['city_name'];
	$city_id = $_POST['city_id'];
	
	//echo "<script>alert('$country')</script>"; 
	mysqli_query($conn,"update cities set city_name='$city_name',state_id='$state_id' where city_id='$city_id'")or die(mysqli_error());
	
	
	//echo "<script>document.location='city.php'</script>";  
	header("Location: city.php?update"); 
}
	
?>
