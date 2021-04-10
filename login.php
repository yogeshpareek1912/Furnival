<?php include('config.php');?>
<?php
	 session_start();
if(isset($_POST['login'])){
	$email = $_POST['email'];
	//$password = sha1($_POST['password']);
	$password = $_POST['password'];

		 $sql = "select * from customer where c_email ='$email' AND c_pass ='$password'";
		//echo $sql;
		$result = mysqli_query($conn,$sql);
		if(mysqli_num_rows($result) > 0)
	{
			while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
			{
			
			$c_f_name = $row['c_f_name'];
			$_SESSION['c_f_name']=$c_f_name;
				
			$c_email = $row['c_email'];
			$_SESSION['c_email']=$c_email;
			
			$c_id = $row['c_id'];
			$_SESSION['c_id']=$c_id;
			
			$c_img = $row['c_img'];
			$_SESSION['c_img']=$c_img;
				 
		
		}
	//echo "<script>alert('login successful')</script>";
	echo"<script>window.open('user_login/index.php','_self')</script>";	

}
 else
    {
			
			echo "<script>alert('Invalid Id Password')</script>";
			echo"<script>window.open('login.php','_self')</script>";				
			}

}
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
<title>Furnival System Bootstrap Responsive Website Template | Login :: w3layouts</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta property="og:title" content="Vide" />
<meta name="keywords" content="Furnival Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- js -->
   <script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Noto+Sans:400,700' rel='stylesheet' type='text/css'>
<!--- start-rate---->
<script src="js/jstarbox.js"></script>
	<link rel="stylesheet" href="css/jstarbox.css" type="text/css" media="screen" charset="utf-8" />
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
<body>


<a><img src="images/download.png" class="img-head" alt=""></a>
<div class="header">

		<div class="container">
			
			<div class="logo"> 
				<h1 ><a href="index.php"><b>T<br>H<br>E</b> &nbsp;Furnival  EStreet : Online Furniture Shopping<span>Indian Style Furniture</span></a></h1>
			</div>
			
			
			<div class="head-t">
				<ul class="card">
				<li><a href="login.php" ><i class="fa fa-user" aria-hidden="true"></i>Login</a></li>
					<li><a href="register.php" ><i class="fa fa-arrow-right" aria-hidden="true"></i>Register</a></li>
				
				</ul>
			</div>

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
			<div class="clearfix"></div>
				</div>
					
				</div>			
</div>
  <!---->
 <!--banner-->
<div class="banner-top">
	<div class="container">
		<h3 >Login</h3>
		<h4><a href="index.html">Home</a><label>/</label>Login</h4>
		<div class="clearfix"> </div>
	</div>
</div>
<!--login-->

	<div class="login">
	
		<div class="main-agileits">
				<div class="form-w3agile">
					<h3>Login</h3>
					
					<form class="login-form text-center" method="post">
			<div class="form-group">
				<input type="email" class="form-control rounded-pill form-control-lg" placeholder="Username" name='email' required>
			</div>
			<div class="form-group">
				<input type="password" class="form-control rounded-pill form-control-lg" placeholder="Password" name="password" required>
			</div>

			<input type="submit" class="btn btn-success mb-5 btn-block rounded-pill form-control-lg" name="login">
		</form>
				</div>
				<div class="forg">
					<a href="#" class="forg-left">Forgot Password</a>
					<a href="register.html" class="forg-right">Register</a>
				<div class="clearfix"></div>
				</div>
			</div>
		</div>
<!--footer-->
<?php include('footer.php');?>
<!-- //footer-->
<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {
		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
			};
		*/								
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->
<!-- for bootstrap working -->
		<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<script type='text/javascript' src="js/jquery.mycart.js"></script>
  <script type="text/javascript">
  $(function () {

    var goToCartIcon = function($addTocartBtn){
      var $cartIcon = $(".my-cart-icon");
      var $image = $('<img width="30px" height="30px" src="' + $addTocartBtn.data("image") + '"/>').css({"position": "fixed", "z-index": "999"});
      $addTocartBtn.prepend($image);
      var position = $cartIcon.position();
      $image.animate({
        top: position.top,
        left: position.left
      }, 500 , "linear", function() {
        $image.remove();
      });
    }

    $('.my-cart-btn').myCart({
      classCartIcon: 'my-cart-icon',
      classCartBadge: 'my-cart-badge',
      affixCartIcon: true,
      checkoutCart: function(products) {
        $.each(products, function(){
          console.log(this);
        });
      },
      clickOnAddToCart: function($addTocart){
        goToCartIcon($addTocart);
      },
      getDiscountPrice: function(products) {
        var total = 0;
        $.each(products, function(){
          total += this.quantity * this.price;
        });
        return total * 1;
      }
    });

  });
  </script>

</body>
</html>



