

<?php 
include('config.php');

if($_POST['reg']=='submit')
	{
	$country_id = $_POST['country_id'];
	$country_name = $_POST['country_name'];

	
	mysqli_query($conn,"update countries set country_name='$country_name' where country_id='$country_id'")or die(mysqli_error());
	
	
	//echo "<script>document.location='country.php'</script>";  
	header("Location: country.php?update"); 
}
	
?>
