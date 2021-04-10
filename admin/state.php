
<!DOCTYPE html>
<html lang="en">
	<?php
include('config.php');
if (isset($_GET['delete'])){
$state_id = $_GET['delete'];
  $query = "DELETE FROM states WHERE state_id= '$state_id'";
    $run_query = mysqli_query($conn, $query);
	
header("location:state.php?delt");
}
?>

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  
  
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	
  <title>
    State Add
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/paper-dashboard.css?v=2.0.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
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
                          <span><b> Sate Add successfully </b></span>
                        </div>						
						</div>	
						<div id="update"> 
							<div class="alert alert-success alert-dismissible fade show">
                          <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
                            <i class="nc-icon nc-simple-remove"></i>
                          </button>
                          <span><b> State Update Successfully </b></span>
                        </div>						
						</div>
						<div id="delt"> 
							<div class="alert alert-danger alert-dismissible fade show">
                          <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
                            <i class="nc-icon nc-simple-remove"></i>
                          </button>
                          <span><b> State Delete  Successfully </b></span>
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
      <!-- End Navbar -->
      <!-- <div class="panel-header panel-header-sm">


</div> -->
      <div class="content">
        <div class="row">
          <div class="col-md-8">
            <div class="card card-user">
              <div class="card-header">
                <h5 class="card-title">State Add</h5>
              </div>
              <div class="card-body">
                <form action="state_process.php" method="POST">

   <div class="row">
	  <div class="col-md-6 pr-1">  
    <select name="country" class="form-control" id="country"required>
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
	</div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>State Name</label>
                        <input type="text" class="form-control" placeholder="State Name" name="sname" onkeypress="return (event.charCode > 64 && event.charCode < 91 ) || (event.charCode > 96 && event.charCode < 123 ) || (event.charCode == 32)" required>
                          <input type="submit" class="btn btn--radius-2 btn--blue"  name="reg" value="submit">            
					 </div>
                    </div>  
				  </div>
             
                </form>
              </div>
            </div>
          </div>
        </div>
		        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> State List</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
	
                  <table class="table">
                    <thead class=" text-primary">
                      <th>Sr.no </th>
                      <th>Country Name</th> 
					   <th>State Name</th> 
					  <th>Delete</th> 
					  <th>Edit</th>
                     
                    </thead>
                    <tbody>
													<?php
													include ('config.php');
    $query = "SELECT * FROM states";
    $run_query = mysqli_query($conn, $query);
$count=0;
            while($row = mysqli_fetch_array($run_query)){
		
        ?>
                      <tr>
					  <td><?php echo ++$count;?></td>
                      <td><?php echo $row['country_id'];?></td>  
                      <td><?php echo $row['state_name'];?></td>  
					 	<td>										
	<a href="state.php?delete=<?php echo $row['state_id'];?>"  onclick="return confirm('Are You Sure Delete State ?');">

		<i class="fa fa-trash" style="font-size:25px" aria-hidden="true"></i>
		<div class="clearfix"></div>
</td>
<td>
<a href="#myModal<?php echo $row['state_id'];?>"  data-toggle="modal" data-target="#myModal<?php echo $row['state_id'];?>"><i class="fa fa-edit" style="font-size:25px" aria-hidden="true"></i>
</a>
</td>
                      </tr>
					    <!-- Modal content-start--->
  <div class="modal fade" id="myModal<?php echo $row['state_id'];?>" role="dialog">
    <div class="modal-dialog">

      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
       
        </div>
        <div class="modal-body">
          <form class="form-horizontal" method="post" action="state_update.php" enctype='multipart/form-data'>
			<?php
    //Include database configuration file
    include('config.php');
    
    //Get all country data
    $query1 = "SELECT * FROM countries  ORDER BY country_name ASC";
    $run_query1 = mysqli_query($conn, $query1);
    //Count total number of rows
	$count1 = mysqli_num_rows($run_query1);
    ?> 
   <div class="row">
	  <div class="col-md-6 pr-1"> 
	  <label>Country Name</label>
    <select name="country" class="form-control" >
          <?php
            while($row1 = mysqli_fetch_array($run_query1)){
				$country_id=$row1['country_id'];
				$country_name=$row1['country_name'];
				?>
			<option   value="<?php echo $row1['country_id'];?>"
               
			<?php if($row['country_id']==$country_id)echo 'selected';?>>
			<?php echo $country_name;?>
		</option><?php
	        }
        ?>
    </select>
	</div>
	</div>	
		  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
				
                        <label>State Name</label>
                        <input type="hidden" class="form-control" placeholder="City Name" value="<?php echo $row['state_id'];?>" name="state_id">
                        <input type="text" class="form-control" placeholder="State Name" value="<?php echo $row['state_name'];?>" name="state_name">
                          <input type="submit" class="btn btn--radius-2 btn--blue"  name="reg" value="submit">            
					 </div>
                    </div>  
				  </div>
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
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/paper-dashboard.min.js?v=2.0.0" type="text/javascript"></script>
  <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
</body>

</html>
