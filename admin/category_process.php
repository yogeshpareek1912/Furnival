<?php include('config.php');

if($_POST['reg']=='submit')
	{
		$cat_title= $_POST['cname'];
	 
	 $sql="INSERT INTO category(cat_title)VALUES('$cat_title')";
$result = mysqli_query($conn,$sql);
	//echo $sql;
 if($result)
	{
		//	echo "<script>alert('city Add Successfully')</script>";
			//echo"<script>window.open('city.php','_self')</script>";	
			header("Location: category.php?status"); 
} 
    else
    {
		echo "<script>alert(' Unsuccessfully Add category ')</script>";
			echo"<script>window.open('category.php','_self')</script>";
	}
	}
?>