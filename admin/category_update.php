

<?php 
include('config.php');

if($_POST['reg']=='submit')
	{
	$cat_title = $_POST['cat_title'];
	$cat_id = $_POST['cat_id'];
	 
	//echo "<script>alert('$country')</script>"; 
	mysqli_query($conn,"update category set cat_title='$cat_title' where cat_id='$cat_id'")or die(mysqli_error());
	
	
	//echo "<script>document.location='city.php'</script>";  
	header("Location: category.php?update"); 
}
	
?>
