
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
 
 <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	
 <title>
    Product Add
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
                          <span><b> Product Add successfully </b></span>
                        </div>						
						</div>	
						<div id="update"> 
							<div class="alert alert-success alert-dismissible fade show">
                          <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
                            <i class="nc-icon nc-simple-remove"></i>
                          </button>
                          <span><b> Product Update Successfully </b></span>
                        </div>						
						</div>
						<div id="delt"> 
							<div class="alert alert-danger alert-dismissible fade show">
                          <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
                            <i class="nc-icon nc-simple-remove"></i>
                          </button>
                          <span><b> Product Delete  Successfully </b></span>
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
                <h5 class="card-title">Product Add</h5>
              </div>
              <div class="card-body">
             <form class="form-horizontal" method="post" action="product_process.php" enctype='multipart/form-data'>
		 
                  <div class="row">
                    <div class="col-md-3 pr-1">
                      <div class="form-group">
                        <label>Product Name</label>
                        <input type="text" class="form-control" name="p_name" placeholder="Product Name"required>
                      </div>
                    </div>
					   <div class="col-md-3 pr-1">
                      <div class="form-group">
                        <label>Product Price</label>
                        <input type="text" class="form-control" name="p_price"placeholder="Price"required >
                      </div>
                    </div>
					   <div class="col-md-3 pr-1">
                      <div class="form-group">
                        <label>Each Product Quantity</label>
                        <input type="text" class="form-control" name="each_qty"placeholder="Each Product Quantity"required >
                      </div>
                    </div>
				
					 
				
                    <div class="col-md-3 px-1">
                      <div class="form-group">
                        <label>Manufacturing Date</label>
                        <input type="date"name="p_mfg" class="form-control"required>
                      </div>
                    </div>  
					</div>

					  <div class="row">
                  
		
					<div class="col-md-3 pr-1">
					  <label>Category </label>
					<select  class="form-control" name="p_cat_title"required>
					<option value="">Select Category </option>
					<?php
					include('config.php');
				$query = "SELECT * FROM category  ORDER BY cat_title ASC";
				$run_query = mysqli_query($conn, $query);
				$count = mysqli_num_rows($run_query);
				
					if($count > 0){
						while($row = mysqli_fetch_array($run_query)){
							$cat_title=$row['cat_title'];
							echo "<option value='$cat_title'>$cat_title</option>";
						}
					}else{
						echo '<option value="">Category not available</option>';
					}
					?>
				</select>
				</div>
				<div class="col-md-3 pr-1">
                      <div class="form-group">
                        <label>Brand</label>
                        <input type="text" name="p_brand" class="form-control" placeholder="Brand"required onkeypress="return (event.charCode > 64 && event.charCode < 91 ) || (event.charCode > 96 && event.charCode < 123 ) || (event.charCode == 32)">
                      </div>
                    </div>
				<div class="col-md-3 pr-1">
                      <div class="form-group">
                        <label>Product Qty</label>
                        <input type="text" name="p_qty" class="form-control" placeholder="Product Qty"required>
                      </div>
                    </div>
					<div class="col-md-3 pr-1">
                
                        <label>Product Image</label>
					  <input type="file" name="p_img" class="form-control" required>
                   
                     
					</div>
						
			</div>
					     <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control textarea" name="p_desc" placeholder="Enter Description" required ></textarea>
                      </div>
                    </div>
                  </div>
	 	  
	      <input type="submit" class="btn btn--radius-2 btn--blue" name="submit" value="submit">            
				
                </form>
              </div>
            </div>
          </div>
     
        </div>
		        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Product List</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
	
                  <table class="table">
                    <thead class=" text-primary">
                      <th>#</th>
                      <th>P Name</th> 
                      <th>P Price</th> 
                      <th>P Mfg Date</th> 
                      <th>Image</th> 
                      <th>Catgeory</th> 
                      <th width="15%">Disc</th> 
                      <th>Status</th> 
                      <th>Action</th>
                     
                    </thead>
                    <tbody>
													<?php
													include ('config.php');
    $query = "SELECT * FROM product";
    $run_query = mysqli_query($conn, $query);
		$count=0;
            while($row = mysqli_fetch_array($run_query)){
		
        ?>
                      <tr>
					  <td><?php echo ++$count;?></td>
                      <td><?php echo $row['p_name'];?></td>  
					  <td><?php echo $row['p_price'];?></td>  
					  <td><?php echo $row['p_mfg'];?></td>  
					  <td><img src="../image/<?php echo $row['p_img'];?>" width="100" height="100"> </td>  
					  <td><?php echo $row['cat_title'];?></td>  
					  <td><?php echo $row['p_desc'];?></td>   
					  <td><?php echo $row['p_status'];?></td>  
					  
					  
					 	<td>										
	<a href="delete_product.php?id=<?php echo $row['p_id'];?>"  onclick="return confirm('Are You Sure Delete product?');">

		<i class="fa fa-trash" style="font-size:25px" aria-hidden="true"></i>
		<div class="clearfix"></div>
</td>
<td>
<a href="#myModal<?php echo $row['p_id'];?>"   data-toggle="modal" data-target="#myModal<?php echo $row['p_id'];?>"><i class="fa fa-edit" style="font-size:25px" aria-hidden="true"></i>
</a>
</td>
                      </tr>
					  <!-- Modal content-start--->
  <div class="modal fade" id="myModal<?php echo $row['p_id'];?>" >
    <div class="modal-dialog"  >

      <div class="modal-content"style=" width:800px; margin-left:-170px;" >
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
       
        </div>
        <div class="modal-body">
          <form class="form-horizontal" method="post" action="product.php" enctype='multipart/form-data'>
				
 <div class="row">
                    <div class="col-md-3 pr-1">
                      <div class="form-group">
                        <label>Product Name</label>
                        <input type="text" class="form-control" value="<?php echo $row['p_name'];?>" name="p_name" placeholder="Product Name" >
                        <input type="hidden" class="form-control" value="<?php echo $row['p_id'];?>" name="p_id" >
                      </div>
                    </div>
					   <div class="col-md-3 pr-1">
                      <div class="form-group">
                        <label>Product Price</label>
                        <input type="text" class="form-control" value="<?php echo $row['p_price'];?>" name="p_price"placeholder="Product Price" >
                      </div>
                    </div>

                    <div class="col-md-3 pr-1">
                      <div class="form-group">
                        <label>Product MFG Date</label>
                        <input type="text" class="form-control" value="<?php echo $row['p_mfg'];?>" name="p_mfg"placeholder="Product MFG" >
                      </div>
                    </div>

                    <div class="col-md-3 pr-1">
                      <div class="form-group">
                        <label>Product</label>
                    <img src="../image/<?php echo $row['p_img'];?>" width="100" height="100">
                      </div>
                    </div>

                    
					              <input type="hidden" name="p_img" class="form-control" value="<?php echo $row['p_img'];?>"></input>
                       

					<div class="col-md-3 pr-1">
					 <label>Select Category</label>
					     <select name="cat_title" class="form-control" >
          <?php
	include('config.php');
    $query1 = "SELECT * FROM category  ORDER BY cat_id ASC";
    $run_query1 = mysqli_query($conn, $query1);
   $count1 = mysqli_num_rows($run_query1);
      
   while($row1 = mysqli_fetch_array($run_query1)){
				$cat_name=$row1['cat_title'];
				?>
			<option   value="<?php echo $row1['cat_title'];?>"
               
			<?php if($row['cat_title']==$cat_name)echo 'selected';?>>
			<?php echo $cat_name;?>
		</option><?php
	        }
        ?>
    </select>
				</div>
					
				
                    <div class="col-md-3 px-1">
                      <div class="form-group">
                        <label>Description</label>
                        <input type="text" rows="4" value="<?php echo $row['p_desc']; ?>" name="p_desc" class="form-control">
                      </div>
                    </div>  
					</div>

					  <div class="row">
                 
					   <div class="col-md-3 pr-1">
                      <div class="form-group">
                        <label>Status</label>
                        <input type="text" class="form-control" value="<?php echo $row['p_status']; ?>" name="p_status" placeholder="status" >
                      </div>
                    </div>   
					</div>
	      <input type="submit" class="btn btn--radius-2 btn--blue"  name="update" value="update">            
				
				  
				  
				  
				  </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div> 
	 </div>
	</div>
<?php 

if(isset($_POST['update'])){
  INCLUDE('config2.php'); 
  
  $p_img = $_FILES['p_img']['name'];  // this is for storing the image in a variable
  $p_img_tmp =  $_FILES['p_img']['tmp_name']; 
  move_uploaded_file($p_img_tmp,"../image/$p_img");
  $sql1 = ("UPDATE product SET p_name = '".$_POST["p_name"]."', 
                                      p_price = '".$_POST["p_price"]."', p_mfg = '".$_POST["p_mfg"]."', p_img = '".$_POST["p_img"]."', cat_title = '".$_POST["cat_title"]."',
                                      p_desc = '".$_POST["p_desc"]."', p_status = '".$_POST["p_status"]."'
                                      
                                      WHERE p_id='".$_POST["p_id"]."' ");
  $result = mysqli_query($conn,$sql1); 

  $sql4 = ("UPDATE stock SET p_name = '".$_POST["p_name"]."', 
                                      p_price = '".$_POST["p_price"]."', p_mfg = '".$_POST["p_mfg"]."', p_img = '".$_POST["p_img"]."', cat_title = '".$_POST["cat_title"]."',
                                      p_desc = '".$_POST["p_desc"]."', p_status = '".$_POST["p_status"]."'
                                      
                                      WHERE p_id='".$_POST["p_id"]."' ");
  $result4 = mysqli_query($connect,$sql4); 
  mysqli_close($connect);

  echo '<script type="text/javascript">location.replace("product.php");</script>';
}  
?>

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
