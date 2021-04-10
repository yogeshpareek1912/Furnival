
<!DOCTYPE html>
<html lang="en">
	<?php
include('config.php');
if (isset($_GET['delete'])){
$dep_id = $_GET['delete'];
  $query = "DELETE FROM department WHERE dep_id= '$dep_id'";
    $run_query = mysqli_query($conn, $query);
	
header("location:department.php");
}
?>

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
 
 <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	
 <title>
    Department Add
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/css/paper-dashboard.css?v=2.0.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="assets/demo/demo.css" rel="stylesheet" />
  <script src="jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('#country').on('change',function(){
        var countryID = $(this).val();
        if(countryID){
            $.ajax({
                type:'POST',
                url:'ajaxFile.php',
                data:'country_id='+countryID,
                success:function(html){
                    $('#state').html(html);
                    $('#city').html('<option value="">Select state first</option>'); 
                }
            }); 
        }else{
            $('#state').html('<option value="">Select country first</option>');
            $('#city').html('<option value="">Select state first</option>'); 
        }
    });
    
    $('#state').on('change',function(){
        var stateID = $(this).val();
        if(stateID){
            $.ajax({
                type:'POST',
                url:'ajaxFile.php',
                data:'state_id='+stateID,
                success:function(html){
                    $('#city').html(html);
                }
            }); 
        }else{
            $('#city').html('<option value="">Select state first</option>'); 
        }
    });
});
</script> 
 </head>

<body class="">
  <div class="wrapper ">
 	<?php include ('left_menu.php');
?>

    <div class="main-panel">
      <!-- Navbar -->
<?php include ('top_menu.php');
?>

<!-- Flash Error Messages  -->
						<div id="popup"> 
							<div class="alert alert-success alert-dismissible fade show">
                          <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
                            <i class="nc-icon nc-simple-remove"></i>
                          </button>
                          <span><b> Employee Add successfully </b></span>
                        </div>						
						</div>	
						<div id="update"> 
							<div class="alert alert-success alert-dismissible fade show">
                          <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
                            <i class="nc-icon nc-simple-remove"></i>
                          </button>
                          <span><b> Employee Update Successfully </b></span>
                        </div>						
						</div>
						<div id="delt"> 
							<div class="alert alert-danger alert-dismissible fade show">
                          <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
                            <i class="nc-icon nc-simple-remove"></i>
                          </button>
                          <span><b> Employee Delete  Successfully </b></span>
                        </div>						
						</div>
					
  <?php
 	if (isset($_GET['status']))
{
     echo '
       <script type="text/javascript">
         function hideMsg()
         {
            document.getElementById("popup").style.visibility = "hidden";
         }

         document.getElementById("popup").style.visibility = "visible";
         window.setTimeout("hideMsg()", 2000);
       </script>';
    }
		if (isset($_GET['update']))
   {
     echo '
       <script type="text/javascript">
         function hideMsg()
         {
            document.getElementById("update").style.visibility = "hidden";
         }

         document.getElementById("update").style.visibility = "visible";
         window.setTimeout("hideMsg()", 2000);
       </script>';
    }
	if (isset($_GET['delt']))
  {
     echo '
       <script type="text/javascript">
         function hideMsg()
         {
            document.getElementById("delt").style.visibility = "hidden";
         }

         document.getElementById("delt").style.visibility = "visible";
         window.setTimeout("hideMsg()", 2000);
       </script>';
    }
?>
      <div class="content">
        <div class="row">
    
	     <div class="col-md-12">
            <div class="card card-user">
              <div class="card-header">
                <h5 class="card-title">Employee Details</h5>
              </div>
              <div class="card-body">
             <form class="form-horizontal" method="post" action="emp_process.php" enctype='multipart/form-data'>
		 
                  <div class="row">
                    <div class="col-md-3 pr-1">
                      <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" name="username" placeholder="User Name"required>
                      </div>
                    </div>
					   <div class="col-md-3 pr-1">
                      <div class="form-group">
                        <label>Password</label>
                        <input type="text" class="form-control" name="pass"placeholder="Password"required >
                      </div>
                    </div>
				
							
					<div class="col-md-3 pr-1">
					 <label>Select Role</label>
					<select class="form-control" name="role"required>
					<option value="">Select Role</option>
					<?php
					include('config.php');
				$query = "SELECT * FROM role  ORDER BY role_name ASC";
				$run_query = mysqli_query($conn, $query);
				$count = mysqli_num_rows($run_query);
				
					if($count > 0){
						while($row = mysqli_fetch_array($run_query)){
							$role_name=$row['role_name'];
							echo "<option value='$role_name'>$role_name</option>";
						}
					}else{
						echo '<option value="">Role not available</option>';
					}
					?>
				</select>
				</div>
					
				
                    <div class="col-md-3 px-1">
                      <div class="form-group">
                        <label>Date Of Birth</label>
                        <input type="date"name="dob" class="form-control"required>
                      </div>
                    </div>  
					</div>

					  <div class="row">
                 
					   <div class="col-md-3 pr-1">
                      <div class="form-group">
                        <label>Phone</label>
                        <input type="text" class="form-control" name="phone" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="10"    placeholder="Phone" required>
                      </div>
                    </div>   
					<div class="col-md-3 pr-1">
                      <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Email" required>
                      </div>
                    </div>
					
		
					<div class="col-md-3 pr-1">
					  <label>Select Experience </label>
					<select  class="form-control" name="exp"required>
					<option value="">Select Experience </option>
					<?php
					include('config.php');
				$query = "SELECT * FROM experience  ORDER BY exp_name ASC";
				$run_query = mysqli_query($conn, $query);
				$count = mysqli_num_rows($run_query);
				
					if($count > 0){
						while($row = mysqli_fetch_array($run_query)){
							$exp_name=$row['exp_name'];
							echo "<option value='$exp_name'>$exp_name</option>";
						}
					}else{
						echo '<option value="">Country not available</option>';
					}
					?>
				</select>
				</div>
				<div class="col-md-3 pr-1">
                      <div class="form-group">
                        <label>Qualification</label>
                        <input type="text" name="quali" class="form-control" placeholder="Qualification"required onkeypress="return (event.charCode > 64 && event.charCode < 91 ) || (event.charCode > 96 && event.charCode < 123 ) || (event.charCode == 32)">
                      </div>
                    </div>
						
			</div>
					     <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Address</label>
                        <textarea class="form-control textarea" name="address"placeholder="Enter Address" required ></textarea>
                      </div>
                    </div>
                  </div>
		
		<div class="row">
				<div class="col-md-3 pr-1">
	   <label>Select Country</label>
    <select name="country" class="form-control" id="country" required>
        <option value="">Select Country</option>
        <?php
		    include('config.php');
    $query = "SELECT * FROM countries  ORDER BY country_name ASC";
    $run_query = mysqli_query($conn, $query);
	$count = mysqli_num_rows($run_query);

        if($count > 0){
            while($row = mysqli_fetch_array($run_query)){
				$country_id=$row['country_id'];
				$country_name=$row['country_name'];
                echo "<option value='$country_id'>$country_name</option>";
            }
        }else{
            echo '<option value="">Country not available</option>';
        }
        ?>
    </select>
	</div>		
	 <div class="col-md-3 pr-1">
	   <label>Select State</label>
    <select name="state" class="form-control" id="state" required>
        <option value="">Select country first</option>
    </select>
	</div>
	 <div class="col-md-3 pr-1">
	   <label>Select State</label>
    <select name="city" class="form-control" id="city"required>
        <option value="">Select state first</option>
    </select>
	</div>
			  <div class="col-md-3 px-1">
                      <div class="form-group">
                        <label>Date Of Join</label>
                        <input type="date" name="doj" class="form-control" placeholder="Username" required>
                      </div>
                    </div>  
						
	</div>	 
			
			 <div class="row">
                    
								
					<div class="col-md-3 pr-1">
					  <label>Select Designation </label>
		<select  class="form-control" name="desi" required>
        <option value="">Select Designation </option>
        <?php
		include('config.php');
    $query = "SELECT * FROM designation  ORDER BY designation_name ASC";
    $run_query = mysqli_query($conn, $query);
	$count = mysqli_num_rows($run_query);
    
        if($count > 0){
            while($row = mysqli_fetch_array($run_query)){
				$designation_name=$row['designation_name'];
				$des_id = $row['des_id'];
                echo "<option value='$des_id'>$designation_name</option>";
            }
        }else{
            echo '<option value="">Designation not available</option>';
        }
        ?>
    </select>
	</div>
			<div class="col-md-3 pr-1">
					  <label>Select Department </label>
    <select  class="form-control" name="depa" required>
        <option value="">Select Department </option>
        <?php
		include('config.php');
    $query = "SELECT * FROM department  ORDER BY dep_name ASC";
    $run_query = mysqli_query($conn, $query);
	$count = mysqli_num_rows($run_query);
    
        if($count > 0){
            while($row = mysqli_fetch_array($run_query)){
				$dep_name=$row['dep_name'];
                echo "<option value='$dep_name'>$dep_name</option>";
            }
        }else{
            echo '<option value="">Department not available</option>';
        }
        ?>
    </select>
	</div>
					</div>
	      <input type="submit" class="btn btn--radius-2 btn--blue"  name="reg" value="submit">            
				
                </form>
              </div>
            </div>
          </div>
     
        </div>
		        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Employee List</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
	
                  <table class="table">
                    <thead class=" text-primary">
                      <th>Sr.no</th>
                      <th>User Name </th> 
                      <th>Role</th> 
                      <th>DOB</th> 
                      <th>Phone</th> 
                      <th>Address</th> 
                      <th>Email</th> 
                      <th>Qualification</th> 
                      <th>Experience</th> 
                      <th>Join Date</th> 
                      <th>Department</th> 
                      <th>Designation</th> 
					  <th>Delete</th>  
					  <th>Edit</th>
                     
                    </thead>
                    <tbody>
													<?php
													include ('config.php');
    $query = "SELECT * FROM emp_details";
    $run_query = mysqli_query($conn, $query);
		$count=0;
            while($row = mysqli_fetch_array($run_query)){
		
        ?>
                      <tr>
					  <td><?php echo ++$count;?></td>
                      <td><?php echo $row['user_name'];?></td>  
					  <td><?php echo $row['user_role'];?></td>  
					  <td><?php echo $row['dob'];?></td>  
					  <td><?php echo $row['phone'];?></td>  
					  <td><?php echo $row['address'];?></td>  
					  <td><?php echo $row['email'];?></td>  
					  <td><?php echo $row['qualification'];?></td>  
					  <td><?php echo $row['exp'];?></td>  
					  <td><?php echo $row['join_date'];?></td>  
					  <td><?php echo $row['dep_id'];?></td>  
					  <td><?php echo $row['des_id'];?></td>  
					  
					  
					 	<td>										
	<a href="department.php?delete=<?php echo $row['emp_id'];?>"  onclick="return confirm('Are You Sure Delete Department?');">

		<i class="fa fa-trash" style="font-size:25px" aria-hidden="true"></i>
		<div class="clearfix"></div>
</td>
<td>
<a href="#myModal<?php echo $row['emp_id'];?>"   data-toggle="modal" data-target="#myModal<?php echo $row['dep_id'];?>"><i class="fa fa-edit" style="font-size:25px" aria-hidden="true"></i>
</a>
</td>
                      </tr>
					  <!-- Modal content-start--->
  <div class="modal fade" id="myModal<?php echo $row['dep_id'];?>"  role="dialog" >
    <div class="modal-dialog"  >

      <div class="modal-content"style=" width:800px; margin-left:-170px;" >
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
       
        </div>
        <div class="modal-body">
          <form class="form-horizontal" method="post" action="department_update.php" enctype='multipart/form-data'>
				
 <div class="row">
                    <div class="col-md-3 pr-1">
                      <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" value="<?php echo $row['user_name'];?>" name="username" placeholder="User Name" >
                      </div>
                    </div>
					   <div class="col-md-3 pr-1">
                      <div class="form-group">
                        <label>Password</label>
                        <input type="text" class="form-control" value="<?php echo $row['user_password'];?>" name="pass"placeholder="Password" >
                      </div>
                    </div>
				
							
					<div class="col-md-3 pr-1">
					 <label>Select Role</label>
					     <select name="states" class="form-control" >
          <?php
	include('config.php');
    $query1 = "SELECT * FROM role  ORDER BY role_name ASC";
    $run_query1 = mysqli_query($conn, $query1);
   $count1 = mysqli_num_rows($run_query1);
      
   while($row1 = mysqli_fetch_array($run_query1)){
				$role_name=$row1['role_name'];
				?>
			<option   value="<?php echo $row1['role_name'];?>"
               
			<?php if($row['user_role']==$role_name)echo 'selected';?>>
			<?php echo $role_name;?>
		</option><?php
	        }
        ?>
    </select>
				</div>
					
				
                    <div class="col-md-3 px-1">
                      <div class="form-group">
                        <label>Date Of Birth</label>
                        <input type="date"name="dob" value="<?php echo $row['dob']; ?>" class="form-control">
                      </div>
                    </div>  
					</div>

					  <div class="row">
                 
					   <div class="col-md-3 pr-1">
                      <div class="form-group">
                        <label>Phone</label>
                        <input type="text" class="form-control" value="<?php echo $row['phone']; ?>" name="phone" placeholder="Phone" >
                      </div>
                    </div>   
					<div class="col-md-3 pr-1">
                      <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" name="email" value="<?php echo $row['email']; ?>" placeholder="Email" >
                      </div>
                    </div>
					
		
					<div class="col-md-3 pr-1">
					  <label>Select Experience </label>
				
					     <select name="states" class="form-control" >
          <?php
	include('config.php');
   $query2 = "SELECT * FROM experience  ORDER BY exp_name ASC";
  $run_query2 = mysqli_query($conn, $query2);
   $count2 = mysqli_num_rows($run_query2);
      
   while($row2 = mysqli_fetch_array($run_query2)){
				$exp_name=$row2['exp_name'];
				?>
			<option   value="<?php echo $row2['exp_name'];?>"
               
			<?php if($row['exp']==$exp_name)echo 'selected';?>>
			<?php echo $exp_name;?>
		</option><?php
	        }
        ?>
    </select>
				</div>
				<div class="col-md-3 pr-1">
                      <div class="form-group">
                        <label>Qualification</label>
                        <input type="text" name="quali" class="form-control" value="<?php echo $row['qualification']; ?>" placeholder="Qualification" >
                      </div>
                    </div>
						
			</div>
					     <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Address</label>
                        <textarea class="form-control textarea" name="address"placeholder="Enter Address" ><?php echo $row['address']; ?></textarea>
                      </div>
                    </div>
                  </div>
		
		<!--div class="row">
				<div class="col-md-3 pr-1">
	   <label>Select Country</label>
    <select name="country" class="form-control" id="country">
        <option value="">Select Country</option>
        <?php
		    /*include('config.php');
    $query3 = "SELECT * FROM countries  ORDER BY country_name ASC";
    $run_query3 = mysqli_query($conn, $query3);
	$count3 = mysqli_num_rows($run_query3);

        if($count3 > 0){
            while($row3 = mysqli_fetch_array($run_query3)){
				$country_id=$row3['country_id'];
				$country_name=$row3['country_name'];
                echo "<option value='$country_id'>$country_name</option>";
            }
        }else{
            echo '<option value="">Country not available</option>';
        }*/
        ?>
    </select>
	</div>		
	 <div class="col-md-3 pr-1">
	   <label>Select State</label>
    <select name="state" class="form-control" id="state">
        <option value="">Select country first</option>
    </select>
	</div>
	 <div class="col-md-3 pr-1">
	   <label>Select State</label>
    <select name="city" class="form-control" id="city">
        <option value="">Select state first</option>
    </select>
	</div>
			  <div class="col-md-3 px-1">
                      <div class="form-group">
                        <label>Date Of Join</label>
                        <input type="date" name="doj" class="form-control" placeholder="Username">
                      </div>
                    </div>  
						
	</div--->	 
			
			 <div class="row">
                    
								
					<div class="col-md-3 pr-1">
					  <label>Select Designation </label>
	 <select name="states" class="form-control" >
          <?php
	include('config.php'); 
	$query4 = "SELECT * FROM designation  ORDER BY designation_name ASC";
	$run_query4 = mysqli_query($conn, $query4);
   $count4 = mysqli_num_rows($run_query4);
      
   while($row4 = mysqli_fetch_array($run_query4)){
				$designation_name=$row4['designation_name'];
				?>
			<option   value="<?php echo $row4['designation_name'];?>"
               
			<?php if($row['des_id']==$designation_name)echo 'selected';?>>
			<?php echo $designation_name;?>
		</option><?php
	        }
        ?>
    </select>
	</div>
			<div class="col-md-3 pr-1">
					  <label>Select Department </label>
    <select  class="form-control" name="depa">
        <option value="">Select Department </option>
        <?php
		include('config.php');
    $query5 = "SELECT * FROM department  ORDER BY dep_name ASC";
    $run_query5 = mysqli_query($conn, $query5);
	$count5 = mysqli_num_rows($run_query5);
    
        if($count5 > 0){
            while($row5 = mysqli_fetch_array($run_query5)){
				$dep_name=$row5['dep_name'];
                echo "<option value='$dep_name'>$dep_name</option>";
            }
        }else{
            echo '<option value="">Department not available</option>';
        }
        ?>
    </select>
	</div>
					</div>
	      <input type="submit" class="btn btn--radius-2 btn--blue"  name="reg" value="submit">            
				
				  
				  
				  
				  </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div> 
	 </div>
	</div>
        <!-- Modal end content--> 
                   <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
 
      </div>
 
    </div>
  </div>
  
  <!--   Core JS Files   -->
  <script src="assets/js/core/jquery.min.js"></script>
  <script src="assets/js/core/popper.min.js"></script>
  <script src="assets/js/core/bootstrap.min.js"></script>
  <script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="assets/js/paper-dashboard.min.js?v=2.0.0" type="text/javascript"></script>
  <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src="assets/demo/demo.js"></script>
</body>

</html>
