<?php
//Include database configuration file
include('config.php');

if(isset($_POST["des_id"])){
    //Get all state data
	$empid= $_POST['des_id'];
	$qu = "select des_id from emp_details where emp_id='$empid'";
	$res = mysqli_query($conn,$qu);
	 while($row1 = mysqli_fetch_array($res)){
		 $des_id = $row1['des_id'];
	 }
	
	
	
	
	
    $query = "SELECT * FROM designation WHERE des_id = '$des_id'";
	$run_query = mysqli_query($conn, $query);
     
    $count = mysqli_num_rows($run_query);
     
    if($count > 0){
        //echo '<option value="">Select state</option>';
        while($row = mysqli_fetch_array($run_query)){
		$des_id=$row['des_id'];
		$salary=$row['salary'];
        echo "<option value='$salary'>$salary</option>";
        }
    }else{
        echo '<option value="">State not available</option>';
    }
}

if(isset($_POST["state_id"])){
	$state_id= $_POST['state_id'];
    //Get all city data
    $query = "SELECT * FROM cities WHERE state_id = '$state_id' 
	ORDER BY city_name ASC";
    $run_query = mysqli_query($conn, $query);
    //Count total number of rows
    $count = mysqli_num_rows($run_query);
    
    //Display cities list
    if($count > 0){
        echo '<option value="">Select city</option>';
        while($row = mysqli_fetch_array($run_query)){
		$city_id=$row['city_id'];
		$city_name=$row['city_name']; 
        echo "<option value='$city_id'>$city_name</option>";
        }
    }else{
        echo '<option value="">City not available</option>';
    }
}
?>