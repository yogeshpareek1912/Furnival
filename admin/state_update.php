

<?php 
include('config.php');

if($_POST['reg']=='submit')
	{
	$state_id = $_POST['state_id'];
	$state_name = $_POST['state_name'];
	$country = $_POST['country'];
	
	//echo "<script>alert('$country')</script>"; 
	mysqli_query($conn,"update states set state_name='$state_name',country_id='$country' where state_id='$state_id'")or die(mysqli_error());
	
	
	//echo "<script>document.location='state.php'</script>";  
		header("Location: state.php?update"); 
}
	
?>
