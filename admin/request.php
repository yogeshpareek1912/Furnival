
<!DOCTYPE html>
<html lang="en">
	<?php
include('config.php');

  		   
						

if(isset($_GET['Aproval'])){ 
				 			   //	echo "<script>alert('".$_GET['type']."')</script>";
	 /*									
					   $day=$_GET['day'];
					   $emp_id=$_GET['emp_id'];
					   $type=$_GET['type'];
            $query = "SELECT * FROM emp_leave where emp_id=$emp_id";
			 $run_query = mysqli_query($conn, $query);
 
            while($row = mysqli_fetch_array($run_query)){
			$casual=$row['casual'];
			$medical=$row['medical'];
			$half_pay=$row['half_pay'];
			
			} 
			 
			if($type=='Casual'){
			echo "<script>alert('".$type."')</script>";
		
				 	$newday1=$casual-$day;
					  $select_query1= "update emp_leave set casual='$newday1' where emp_id=$emp_id";
                      mysqli_query($conn,$select_query1);
					 }
					 $newday2=$casual-$day;
					   $select_query2= "update emp_leave set medical='$newday2' where emp_id=$emp_id";
                      mysqli_query($conn,$select_query2);
					  
					  $newday3=$casual-$day;
					 $select_query3= "update emp_leave set half_pay='$newday3' where emp_id=$emp_id";
                      mysqli_query($conn,$select_query3);
					  */
				 
					
					
                       $id=$_GET['Aproval'];
					 $select_query= "update request_leave set status=1 where req_id=$id";
                      $result =  mysqli_query($conn,$select_query);
		 
	 if($result){ 
					
		 	echo"<script>window.open('request.php?status','_self')</script>";	
			}
	       }
		   
		   
if(isset($_GET['Reject'])){
                   
                       $id=$_GET['Reject'];
					  $select_query= "update request_leave set status=2 where req_id=$id";
                      $result =  mysqli_query($conn,$select_query);
	 if($result){
					  echo"<script>window.open('request.php?delt','_self')</script>";	
			}
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
   Leave Request List
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
                          <span><b>Approved </b></span>
                        </div>						
						</div>	
						<div id="update"> 
							<div class="alert alert-success alert-dismissible fade show">
                          <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
                            <i class="nc-icon nc-simple-remove"></i>
                          </button>
                          <span><b> Role Update</b></span>
                        </div>						
						</div>
						<div id="delt"> 
							<div class="alert alert-danger alert-dismissible fade show">
                          <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
                            <i class="nc-icon nc-simple-remove"></i>
                          </button>
                          <span><b>Reject </b></span>
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
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Leave Request List</h4>
              </div>
              <div class="card-body">
                <div class="table">
	
                  <table class="table">
                    <thead class=" text-primary">
                      <th>Sr.no</th>
                      <th>Employee Name </th> 
                      <th>Type </th> 
					  <th>No of Day</th>  
					  <th>Reason</th>  
					  <th>Action</th>
                     
                    </thead>
                    <tbody>
													<?php
													include ('config.php');
    $query = "SELECT * FROM request_leave";
    $run_query = mysqli_query($conn, $query);
$count=0;
            while($row = mysqli_fetch_array($run_query)){
		
        ?>
                      <tr>
					  <td><?php echo ++$count;?></td>
                      <td><?php
					    $empid= $row['emp_id'];
					    $query1 = "SELECT * FROM emp_details where emp_id='$empid'";
    $run_query1 = mysqli_query($conn, $query1);
 
            while($row1 = mysqli_fetch_array($run_query1)){
			echo $row1['user_name'];
			}
			
					?></td>  
    <td><?php echo $row['type'];?></td> 
	<td><?php echo $row['day'];?></td>  
 <td><?php echo $row['reason'];?></td>  
 
	 <td> 
		<?php if($row['status']==0){?>	
		
		<a href="request.php?Aproval=<?php echo $row['req_id'];?> && type=<?php echo $row['type'];?> && day=<?php echo $row['day'];?> && emp_id=<?php echo $row['emp_id'];?>"  class="btn btn-success" > Accept </a>
					  
		<a href="request.php?Reject=<?php echo $row['req_id'];?>"  class="btn btn-danger" > Reject </a> 
							  
		<?php } if($row['status']==1)echo 'Approved';  ?>	
		
		<?php if($row['status']==2)echo 'Rejected';  ?>	
		 																				
	</td>
	
                      </tr>
					  
                   <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
 
      </div>
      <footer class="footer footer-black  footer-white ">
        <div class="container-fluid">
          <div class="row">
            <nav class="footer-nav">
              <ul>
                <li>
                  <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>
                </li>
                <li>
                  <a href="http://blog.creative-tim.com/" target="_blank">Blog</a>
                </li>
                <li>
                  <a href="https://www.creative-tim.com/license" target="_blank">Licenses</a>
                </li>
              </ul>
            </nav>
            <div class="credits ml-auto">
              <span class="copyright">
                ©
                <script>
                  document.write(new Date().getFullYear())
                </script>, made with <i class="fa fa-heart heart"></i> by Creative Tim
              </span>
            </div>
          </div>
        </div>
      </footer>
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
