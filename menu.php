
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
					 
					<div class="clearfix"></div>
				</div>
					
				</div>			
</div>
