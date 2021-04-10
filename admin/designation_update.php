

<?php 
include('config.php');

if($_POST['reg']=='submit')
	{
	$des_id = $_POST['des_id'];
	$designation_name = $_POST['designation_name'];
	$salary = $_POST['salary'];
	
	mysqli_query($conn,"update designation set designation_name='$designation_name',salary='$salary' where des_id='$des_id'")or die(mysqli_error());
	
	
//	echo "<script>document.location='designation.php'</script>";  
		header("Location: designation.php?update");
}
	
?>
