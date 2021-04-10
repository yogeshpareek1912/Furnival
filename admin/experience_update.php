

<?php 
include('config.php');

if($_POST['reg']=='submit')
	{
	$expid = $_POST['expid'];
	$expname = $_POST['expname'];
	
	mysqli_query($conn,"update experience set exp_name='$expname' where exp_id='$expid'")or die(mysqli_error());
	
	header("Location: experience.php?update"); 
	//echo "<script>document.location='experience.php'</script>";  
}	
	
?>
