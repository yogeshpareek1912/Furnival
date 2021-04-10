<?php
session_start();
?>
<?php
if($_SESSION["c_email"]) {
?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>furnival Bootstrap Responsive Website Template| Home :: w3layouts</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta property="og:title" content="Vide" />
<meta name="keywords" content="Big store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="../css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="../css/style.css" rel='stylesheet' type='text/css' />
<!-- js -->
   <script src="../js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="../js/move-top.js"></script>
<script type="text/javascript" src="../js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<link href="../css/font-awesome.css" rel="stylesheet"> 
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Noto+Sans:400,700' rel='stylesheet' type='text/css'>
<!--- start-rate---->
<script src="../js/jstarbox.js"></script>
	<link rel="stylesheet" href="../css/jstarbox.css" type="text/css" media="screen" charset="utf-8" />
		<script type="text/javascript">
			jQuery(function() {
			jQuery('.starbox').each(function() {
				var starbox = jQuery(this);
					starbox.starbox({
					average: starbox.attr('data-start-value'),
					changeable: starbox.hasClass('unchangeable') ? false : starbox.hasClass('clickonce') ? 'once' : true,
					ghosting: starbox.hasClass('ghosting'),
					autoUpdateAverage: starbox.hasClass('autoupdate'),
					buttons: starbox.hasClass('smooth') ? false : starbox.attr('data-button-count') || 5,
					stars: starbox.attr('data-star-count') || 5
					}).bind('starbox-value-changed', function(event, value) {
					if(starbox.hasClass('random')) {
					var val = Math.random();
					starbox.next().text(' '+val);
					return val;
					} 
				})
			});
		});
		</script>
<!---//End-rate---->

</head>
<a><img src="../images/download.png" class="img-head" alt=""></a>
<div class="header">

		<div class="container">
			
			<div class="logo"> 
				<h1 ><a href="index.php"><b>T<br>H<br>E</b> &nbsp;Furnival  EStreet : Online Furniture Shopping<span>Indian Style Furniture</span></a></h1>
			</div>
			
			
			<div class="head-t">
				<ul class="card">
				
								
				
				<li><a href="#"  >
				<li role="presentation" class="dropdown">
				<i class="fa fa-arrow-right" aria-hidden="true"></i>
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Manage Profile<span class="caret"></span></a>
				
				<ul class="dropdown-menu">
				<li><a href="myaccount.php">My Account</a></li>
				<!--li><a href="change password.php">Change Password</a></li-->
				</ul>
			</li>	
<li><a href="my_order.php" ><i class="fa fa-file-text-o" aria-hidden="true"></i>Order History</a></li>
			
				<!--li><a><?php //echo 'Welcome &nbsp;' .$_SESSION['c_f_name'];?></a></li-->
				
					<li><a href="logout.php" ><i class="fa fa-user" aria-hidden="true"></i> Logout</a></li>
						
			</div>
			
			
			
			
			<!--div class="head-t">
				<ul class="card">
					<li><a href="wishlist.html" ><i class="fa fa-heart" aria-hidden="true"></i>Wishlist</a></li>
					<li><a href="login.php" ><i class="fa fa-user" aria-hidden="true"></i>Login</a></li>
					<li><a href="register.php" ><i class="fa fa-arrow-right" aria-hidden="true"></i>Register</a></li>
					<li><a href="about.html" ><i class="fa fa-file-text-o" aria-hidden="true"></i>Order History</a></li>
					<li><a href="shipping.html" ><i class="fa fa-ship" aria-hidden="true"></i>Shipping</a></li>
				</ul>	
			</div-->
			
			

				<div class="nav-top">
					<nav class="navbar navbar-default">
					
					<div class="navbar-header nav_2">
						<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						

					</div> 
					<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
						<ul class="nav navbar-nav " >
							<li class=" active"><a href="index.php" class="hyper "><span>Home</span></a></li>	
							
							<li class="dropdown " >
								<a href="#" class="dropdown-toggle  hyper" data-toggle="dropdown" ><span>Category<b class="caret"></b></span></a>
								<ul class="dropdown-menu multi" style="min-width:200px;" >
									<div class="row">
										<div class="col-sm-12 ">
											<ul class="multi-column-dropdown">
								 <?php  include("config.php");
                     $cnt=0;
                      $select_query= "Select * from category ";
                      $select_query_run =     mysqli_query($conn,$select_query);
                      while   ($row=   mysqli_fetch_array($select_query_run) )
                  {
                          
              ?>
												<li><a href="view.php?cat_title=<?php echo $row['cat_title'];?>"><i class="fa fa-angle-right" aria-hidden="true"></i><?php echo $row['cat_title'];?></a></li>
											
										<?php } ?>
											</ul>
										
										</div>
								 
										<div class="clearfix"></div>
									</div>	
								</ul>
							</li>
							
							
							<li><a href="contact.php" class="hyper"><span>Contact Us</span></a></li>
							<li><a href="about.php" class="hyper"><span>About Us</span></a></li>
							<li><a href="feedback.php" class="hyper"><span>Feedback</span></a></li>
							<li><a href="complain.php" class="hyper"><span>Complain</span></a></li>
						</ul>
					</div>
					</nav>
					<?php 
				if($_SESSION['c_email']){?>
			
					<div class="col-2 top_nav_right text-center mt-sm-0 mt-2">
							<div class="wthreecartaits wthreecartaits2 cart cart box_1">
								 <?php 
							include('config.php');	
					if(($_SESSION['c_id'])){ 
								$c_id=$_SESSION['c_id'];
							$user=mysqli_query($conn,"Select * from cart where c_id='$c_id'");
							$count1= mysqli_num_rows($user);
							}else
							{
								$count1=0;
							
							}

							?>
							
							
								<a href="mycart.php" class="notification">
										<i class="fa fa-shopping-cart" style="font-size:40px;color:green"> </i>
										 <span class="badge"><?php echo $count1?></span>
									</a>
									</div>
							
							</div>
						<?php }?>

							<?php 
				if($_SESSION['c_email']){?>
			
					<div class="col-2 top_nav_right text-center mt-sm-0 mt-2">
							<div class="wthreecartaits wthreecartaits2 cart cart box_1">
								 <?php 
							include('config.php');	
					if(($_SESSION['c_id'])){ 
								$c_id=$_SESSION['c_id'];
							$user=mysqli_query($conn,"Select * from wishlist where c_id='$c_id'");
							$count1= mysqli_num_rows($user);
							}else
							{
								$count1=0;
							
							}

							?>
								<a href="mywishlist.php" class="notification">
										<i class="fa fa-plus" style="font-size:40px;color:green"> </i>
										 <span class="badge"><?php echo $count1?></span>
									</a>
									 
							</div>
							
						</div>
					<?php }?>
						
					<?php if(($_SESSION['c_email'])){?>
						<div class="col-2 top_nav_right text-center mt-sm-0 mt-2">
							<div class="wthreecartaits wthreecartaits2 cart cart box_1" style="width:150px">
								  
								<b><a><?php echo 'Welcome &nbsp;' .$_SESSION['c_f_name'];?></a></b>
								<img src="../image/<?php echo $_SESSION['c_img']; ?>" height="40px;" style="border-radius: 20%;"></img> 	 
							</div>
							
						</div>
						<!--div class="col-2 top_nav_right text-center mt-sm-0 mt-2">
							<div class="wthreecartaits wthreecartaits2 cart cart box_1">
								  
								<img src="image/<?php echo $_SESSION['c_img']; ?>" height="40px;" ></img> 
							</div>
							
						</div-->
						                  
						<?php }?>
						
					 
					<div class="clearfix"></div>
				</div>
					
				</div>			
</div>
<?php } else header("Location:../login.php"); ?>