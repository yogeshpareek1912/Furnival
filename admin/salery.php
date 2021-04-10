
<!DOCTYPE html>
<html lang="en">
 
<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  
      <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	
  <title>
   Salery
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
  
<script src="jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

<script type="text/javascript">

$(document).ready(function(){
    $('#country').on('change',function(){
        var countryID = $(this).val();
		//alert(countryID);
        if(countryID){
            $.ajax({
                type:'POST',
                url:'ajaxFile_salery.php',
                data:'des_id='+countryID,
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
                url:'ajaxFile_salery.php',
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
                          <span><b> Salary Add successfully </b></span>
                        </div>						
						</div>	
						<div id="update"> 
							<div class="alert alert-success alert-dismissible fade show">
                          <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
                            <i class="nc-icon nc-simple-remove"></i>
                          </button>
                          <span><b> Salary Update Successfully </b></span>
                        </div>						
						</div>
						<div id="delt"> 
							<div class="alert alert-danger alert-dismissible fade show">
                          <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
                            <i class="nc-icon nc-simple-remove"></i>
                          </button>
                          <span><b> Salary Delete  Successfully </b></span>
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
                <h5 class="card-title">Salary</h5>
              </div>
              <div class="card-body">
                <form action="emp_salaryprocess.php" method="POST">
     
   <div class="row">
	
	  <div class="col-md-8 pr-1">  
	   <label>Select Name</label>
    <select class="form-control" name ="user_id" onChange="myFunction()" id="country">
        <option value="">Select Name</option>
        <?php
		    include('config.php');
    $query = "SELECT * FROM emp_details";
    $run_query = mysqli_query($conn, $query);
	$count = mysqli_num_rows($run_query);

        if($count > 0){
            while($row = mysqli_fetch_array($run_query)){
				$des_id=$row['emp_id'];
				$user_name=$row['user_name'];
                echo "<option value='$des_id'>$user_name</option>";
		
            }
        }else{
            echo '<option value="">Country not available</option>';
        }
        ?>
    </select>
	</div>
	
	</div>
   <div class="row">
	
	  <div id="a" class="col-md-4 pr-1">  
	   <label>Basic Salary</label>
    <select name="basicsal" class="form-control" id="state" name="basicsal" >
       
    </select>
	</div>
	
	 <div id="a" class="col-md-4 pr-1">  
	   <label>Month </label>
   
	<select  class="form-control" name="myval">
    <option value="January">January</option>
    <option value="February">February</option>
    <option value="March" selected>March</option>
    <option value="April">April</option>
    <option value="May">May</option>
    <option value="June">June</option>
    <option value="7">July</option>
    <option value="July">August</option>
    <option value="September">September</option>
    <option value="October">October</option>
    <option value="November">November</option>
    <option value="December">December</option>
</select>
	
	</div>
	</div> 
                  <div class="row">
                    <div class="col-md-2 pr-1">
                      <div class="form-group">
                        <label>DA %</label>
                        <input type="text" class="form-control" value="5"  id = "da" readonly>
                   	 </div>
                    </div>   
					<div class="col-md-2 pr-1">
                      <div class="form-group">
                        <label>Tex Amount</label>
                        <input type="text" class="form-control"    id = "daamount" name="da"  readonly>
                   	 </div>
                    </div> 
    <div class="col-md-2 pr-1">
                      <div class="form-group">
                        <label>HRA %</label>
                        <input type="text" class="form-control" value="8"  id = "hra"   readonly>
                   	 </div>
                    </div>   
					
						<div class="col-md-2 pr-1">
                      <div class="form-group">
                        <label>HRA Amount</label>
                        <input type="text" class="form-control"    id = "hraamount" name="hra" readonly>
                   	 </div>
                    </div>  
				  </div>
				  
                  
                  <div class="row">
                    <div class="col-md-2 pr-1">
                      <div class="form-group">
                        <label>MA %</label>
                        <input type="text" class="form-control" value="3"  id = "ma"  readonly>
                   	 </div>
                    </div>   
					<div class="col-md-2 pr-1">
                      <div class="form-group">
                        <label>MA Amount</label>
                        <input type="text" class="form-control"    id = "maamount" name ="ma" readonly>
                   	 </div>
                    </div>  
				  </div>
				 
				  <div class="row">
                    
					<div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label><b>Gross Salary</b></label>
                        <input type="text" class="form-control" id = "gross_amount" name="grosssal" readonly>
                   	 </div>
                    </div>  
				  </div>
				  
				  		    
                  <div class="row">
                    <div class="col-md-2 pr-1">
                      <div class="form-group">
                        <label>PF %</label>
                        <input type="text" class="form-control" value="2"  id = "pf"  readonly>
                   	 </div>
                    </div>   
					<div class="col-md-2 pr-1">
                      <div class="form-group">
                        <label>PF Amount</label>
                        <input type="text" class="form-control"    id = "pfamount" name="pf" readonly>
                   	 </div>
                    </div>  
					  <div class="col-md-2 pr-1">
                      <div class="form-group">
                        <label>TEX %</label>
                        <input type="text" class="form-control" value="7"  id = "tex" readonly>
                   	 </div>
                    </div>   
					<div class="col-md-2 pr-1">
                      <div class="form-group">
                        <label>TEX Amount</label>
                        <input type="text" class="form-control"    id = "texamount" name ="tax" readonly>
                   	 </div>
                    </div>
				  </div>      
				  
				    <div class="row">
                    
					<div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label>NET Salary</label>
                        <input type="text" class="form-control"    id = "final_salary" name="netsal" readonly>
                   	 </div>
                    </div>  
				  </div>
				  
	<div>
	 
<input type="button" name="submit" value="Generate Salary" class="btn btn-radius-2 btn--blue"  id = "newsalary"></button><br><br>
<input type="submit" name="submit" value="submit" class="btn btn-radius-2 btn--blue"></button><br><br>
         
 
 
<input type = "hidden" id = "result"> 
<input type = "hidden" id = "result1"> 
<input type = "hidden" id = "result2">  
<input type = "hidden" id = "result3">  
<input type = "hidden" id = "result4">  
<input type = "hidden" id = "net_amount">  

</div>
		 
                </form> 
                
     			<script>
$(document).ready(function(){
$("#newsalary").click(function(){
	var n = $("#state").val();
	var da = $("#da").val();
	
	var hra = $("#hra").val();
	var ma = $("#ma").val();
	var pf = $("#pf").val();
	var tex = $("#tex").val();
	
	var daamount = $("#result").val((+n) + ((+n)*(+da)) / 100).val();
	var da_without = $("#daamount").val((+daamount) - ((+n))).val();
	
	var hraamount = $("#result1").val((+n) + ((+n)*(+hra)) / 100).val();
	var hra_without =$("#hraamount").val((+hraamount) - ((+n))).val();
	
	var maamount = $("#result2").val((+n) + ((+n)*(+ma)) / 100).val();
	var ma_without  = $("#maamount").val((+maamount) - ((+n))).val();
	 
 	var gross_amount = $("#gross_amount").val((+n) + (+da_without)+((+hra_without)+(+ma_without))).val();
	
	var pfamount = $("#result3").val((+n) + ((+n)*(+pf)) / 100).val();
	var pf_without  = $("#pfamount").val((+gross_amount) - ((+pfamount))).val();
	
	var texamount = $("#result4").val((+n) + ((+n)*(+tex)) / 100).val();
	var tex_without  = $("#texamount").val((+gross_amount) - ((+texamount))).val();
		
	  var pf_tex_plus = $("#net_amount").val((+pf_without)+((+tex_without))).val();
	
	var final_salary = $("#final_salary").val((+gross_amount)-((+pf_tex_plus))).val();
	 
});
});
  
</script>
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
