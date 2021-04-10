

<?php 
include('config.php');

if($_POST['reg']=='submit')
	{
	$cat_title = $_POST['city_name'];
	$cat_id = $_POST['city_id'];
	 
	//echo "<script>alert('$country')</script>"; 
	mysqli_query($conn,"update city set city_name='$cat_title' where city_id='$cat_id'")or die(mysqli_error());
	
	
	//echo "<script>document.location='city.php'</script>";  
	header("Location: city.php?update"); 
}
	
?>
