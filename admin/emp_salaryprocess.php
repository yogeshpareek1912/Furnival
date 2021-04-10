  <?php include('config.php');

if($_POST['submit']=='submit')
	{
		//$empname= $_POST['user_name'];
		$basicsal= $_POST['basicsal'];
		$salarymonth= $_POST['myval'];
		$da= $_POST['da'];
		$hra= $_POST['hra'];
		$ma= $_POST['ma'];
		$grosssal= $_POST['grosssal'];
		$pf= $_POST['pf'];
		$tax= $_POST['tax'];
		$netsal= $_POST['netsal'];
		$empid = $_POST['user_id'];
		
		$sql1 = "select user_name from emp_details where emp_id ='$empid'";
		$res=mysqli_query($conn,$sql1);
		while($row = mysqli_fetch_assoc($res)){
				$empname = $row['user_name'];
		}
		
	//echo $empname;
		
		
	 $sql="INSERT INTO salary(EmpName,Basic_Salary,Month_Salary,Da,Hra,Ma,GrossSal,Pf,Tax,NetSal)
		

	 VALUES('$empname','$basicsal','$salarymonth','$da','$hra','$ma','$grosssal','$pf','$tax','$netsal')";
$result = mysqli_query($conn,$sql);

//echo $sql;

//		$emp_id = mysqli_insert_id($conn);
		
//		echo $sql1="INSERT INTO emp_leave(emp_id) VALUES('$emp_id')";
//		mysqli_query($conn,$sql1);
	//echo $sql;
 if($result)
	{  
			//echo "<script>alert('Salary Add Successfully')</script>";
			//echo"<script>window.open('city.php','_self')</script>";	
			header("Location: salery.php?status"); 
} 
    else
    {
		echo "<script>alert(' Unsuccessfully Add salary ')</script>";
		//	echo"<script>window.open('emp_add.php','_self')</script>";
	}
	}
?>