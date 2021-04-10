

<?php 
include('config.php');

if($_POST['reg']=='submit')
	{
	$dep_id = $_POST['dep_id'];
	$dep_name = $_POST['dep_name'];
	
	mysqli_query($conn,"update department set dep_name='$dep_name' where dep_id='$dep_id'")or die(mysqli_error());
	
	
//	echo "<script>document.location='department.php'</script>";  
			header("Location: department.php?update"); 
}
	
?>
