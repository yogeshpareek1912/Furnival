

<?php 
include('config.php');

if($_POST['reg']=='submit')
	{
	$role_id = $_POST['role_id'];
	$role_name = $_POST['role_name'];
	
	mysqli_query($conn,"update role set role_name='$role_name' where role_id='$role_id'")or die(mysqli_error());
	
	
//	echo "<script>document.location='department.php'</script>";  
			header("Location: role.php?update"); 
}
	
?>
