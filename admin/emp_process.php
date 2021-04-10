  <?php include('config.php');

if($_POST['reg']=='submit')
	{
		$username= $_POST['username'];
		$pass= $_POST['pass'];
		$dob= $_POST['dob'];
		$phone= $_POST['phone'];
		$email= $_POST['email'];
		$role= $_POST['role'];
		$exp= $_POST['exp'];
		$address= $_POST['address'];
		$country= $_POST['country'];
		$state= $_POST['state'];
		$city= $_POST['city'];
		$quali= $_POST['quali'];
		$doj= $_POST['doj'];
		$desi= $_POST['desi'];
		$depa= $_POST['depa'];
		
	 $sql="INSERT INTO emp_details(user_name,user_password,user_role,dob,phone,address,country_id,state_id,city_id,email,qualification,exp,join_date,dep_id,des_id)
	 VALUES('$username','$pass','$role','$dob','$phone','$address','$country','$state','$city','$email','$quali','$exp','$doj','$depa','$desi')";
$result = mysqli_query($conn,$sql);

		$emp_id = mysqli_insert_id($conn);
		
		echo $sql1="INSERT INTO emp_leave(emp_id) VALUES('$emp_id')";
		mysqli_query($conn,$sql1);
	//echo $sql;
 if($result)
	{  
		//	echo "<script>alert('city Add Successfully')</script>";
			//echo"<script>window.open('city.php','_self')</script>";	
			header("Location: emp_add.php?status"); 
} 
    else
    {
		echo "<script>alert(' Unsuccessfully Add city ')</script>";
			echo"<script>window.open('emp_add.php','_self')</script>";
	}
	}
?>