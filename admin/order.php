
<!DOCTYPE html>
<html lang="en">
	<?php
include('config.php');

  		   
						

if(isset($_GET['Delivered'])){  
					
                       $invoice_no=$_GET['Delivered'];
					   $select_query= "update orders set order_status='Delivered' where invoice_no='$invoice_no'";
                      $result =  mysqli_query($conn,$select_query);
		 
	 if($result){ 
					
		 	echo"<script>window.open('order.php?status','_self')</script>";	
			}
	       }
		   
		   
if(isset($_GET['Rejected'])){
                   
                       $invoice_no=$_GET['Rejected'];
					  $select_query= "update orders set order_status='Rejected' where invoice_no='$invoice_no'";
                      $result =  mysqli_query($conn,$select_query);
	 if($result){
					  echo"<script>window.open('order.php?delt','_self')</script>";	
			}
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
   Order List
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
                          <span><b>Order Delivered </b></span>
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
                          <span><b>Order Reject </b></span>
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
                <h4 class="card-title">Order List</h4>
              </div>
              <div class="card-body">
                <div class="table">
	
                  <table class="table">
                    <thead class=" text-primary">
                      <th>Sr.no</th>
                      <th>Invoice No</th> 
                      <th>Customer Name</th> 
					  <th>Order Time </th>  
					  <th>Order Status</th>  
					  <th>View Details</th>  
					  
                    </thead>
                    <tbody>
													<?php
													include ('config.php');
    $query = "SELECT * FROM orders group by invoice_no ";
    $run_query = mysqli_query($conn, $query);
$count=0;
            while($row = mysqli_fetch_array($run_query)){
				
		
        ?>
                      <tr>
					  <td><?php echo ++$count;?></td>
					  
    <td><?php echo $row['invoice_no'];?></td>
                      <td><?php
					    $c_id= $row['c_id'];
					    $query1 = "SELECT * FROM customer where c_id='$c_id'";
    $run_query1 = mysqli_query($conn, $query1);
 
            while($row1 = mysqli_fetch_array($run_query1)){
			echo $row1['c_f_name']." &nbsp;".$row1['c_L_name']; 
			}
			
					?></td>   
    <td><?php echo $row['order_time'];?></td>  
 
 
	 <td> 
		<?php if($row['order_status']=='Active'){?>	
		
		<a href="order.php?Delivered=<?php echo $row['invoice_no'];?>"  class="btn btn-success" > Accept Order </a>
					  
		<a href="order.php?Rejected=<?php echo $row['invoice_no'];?>"  class="btn btn-danger" > Reject Order</a> 
							  
		<?php } if($row['order_status']=='Delivered')echo 'Delivered';  ?>	
		
		<?php if($row['order_status']=='Rejected')echo 'Rejected';  ?>	
		 																				
	</td>
	
	<td>
<a href="#myModal<?php echo $row['invoice_no'];?>"   data-toggle="modal" data-target="#myModal<?php echo $row['invoice_no'];?>"><i class="fa fa-edit" style="font-size:25px" aria-hidden="true"></i>
</a>
</td>

                      </tr>
					  
					  <!-- Modal content-start--->
  <div class="modal fade" id="myModal<?php echo $row['invoice_no'];?>" role="dialog">
    <div class="modal-dialog">

      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
       
        </div>
        <div class="modal-body">
          <form class="form-horizontal" method="post" action="category_update.php" enctype='multipart/form-data'>
 
		  <div class="row">
                    <div class="col-md-12">
                      <?php 
					 $invoice_no = $row['invoice_no'];
					  
				 $query2 = "SELECT * FROM orders where invoice_no='$invoice_no'";
				$run_query2 = mysqli_query($conn, $query2);
 
            while($row2 = mysqli_fetch_array($run_query2)){
				$p_id = $row2['p_id'];
				$qty = $row2['qty'];
				
				
				 $query3 = "SELECT * FROM product where p_id='$p_id'";
				$run_query3 = mysqli_query($conn, $query3);
 
            while($row3 = mysqli_fetch_array($run_query3)){
				echo "<br>".$row3['p_name']."<b> &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp; Qty : ".$row2['qty']."</b>"; 
				
			}
			
			}
			
			?>
				 
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
