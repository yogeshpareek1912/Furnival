<?php include('header.php');?>
  <!---->
<!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
           <img class="first-slide" src="../images/ba.jpg" alt="First slide">
       
        </div>
        <div class="item">
           <img class="second-slide " src="../images/ba1.jpg" alt="Second slide">
         
        </div>
        <div class="item">
           <img class="third-slide " src="../images/ba2.jpg" alt="Third slide">
          
        </div>
      </div>
    
    </div>
	
 <!--banner-->
<div class="banner-top">
	<div class="container">
		<h3 >Complain</h3>
		<h4><a href="index.html">Home</a><label>/</label>Complain</h4>
		<div class="clearfix"> </div>
	</div>
</div>

<!-- contact -->
<div class="contact">
	<div class="container">
		<div class="spec ">
			<h3>Complain</h3>
				<div class="ser-t">
					<b></b>
					<span><i></i></span>
					<b class="line"></b>
				</div>
		</div>
		<div class=" contact-w3">	
			<div class="col-md-5 contact-right">	
				<img src="../images/complain.png" class="img-responsive" alt="">
				<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d2482.432383990807!2d0.028213999961443994!3d51.52362882484525!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1423469959819" style="border:0"></iframe>
			</div>
			<div class="col-md-7 contact-left">
				<h4>Complain</h4>
				<p> please complain the form below for your complains</p>
				<ul class="contact-list">
					<li> <i class="fa fa-map-marker" aria-hidden="true"></i>Toronto/Canada</li>
					<li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:Ypareek198@gmail.com">Ypareek198@gmail.com</a></li>
					<li> <i class="fa fa-phone" aria-hidden="true"></i>5199826619/li>
				</ul>
				<div id="container">
					<!--Horizontal Tab-->
					<div id="parentHorizontalTab">
						<ul class="resp-tabs-list hor_1">
							<li><i class="fa fa-envelope" aria-hidden="true"></i></li>
							<li> <i class="fa fa-map-marker" aria-hidden="true"></i> </span></li>
							<li> <i class="fa fa-phone" aria-hidden="true"></i></li>
						</ul>
						<div class="resp-tabs-container hor_1">
							<div>
								 <form method="post" action="complain.php" enctype="multipart/form-data">
          <h2 class="mb-5 font-weight-light text-uppercase text-center" style="font-family: 'Kaushan Script', cursive;"> COMPLAIN</h2>
          <div  class="row" class="form-group">
            <div class="col-lg-12 mr-5">
			<h2> We are here to assist you!</h2>
              <input type="text" class="form-control rounded-pill form-control-lg" placeholder="Complainant's name" name="f_name">
            </div>
          </div>

          <div class="row m-4">
            <div class="col-lg-6">
              <div class="form-group">
                <input type="number" class="form-control rounded-pill form-control-lg" placeholder="Phone no." name="phone">
              </div>
            </div>

            <div class="col-lg-6">
              <div class="form-group">
                <input type="email" class="form-control rounded-pill form-control-lg" placeholder="Email Id" name="email">
              </div>
            </div>
          </div>
		  <p> Discribe your Complain</p>


          <div class="form-group" style="border-radius:10px;">
              <textarea  type="text" name="message" placeholder="Message" class="w-100" style="height:100px;border-radius:10px;"  ></textarea>
          </div>

          <input type="submit" class="btn btn-success mb-5 btn-block rounded-pill" name="complain">
        </form>
							</div>
							<div>
								<div class="map-grid">
								<h5>Our Branches</h5>
									<ul>
										<li><i class="fa fa-arrow-right" aria-hidden="true"></i>India.</li>
										<li><i class="fa fa-arrow-right" aria-hidden="true"></i>France.</li>
										<li><i class="fa fa-arrow-right" aria-hidden="true"></i>Uk.</li>
										
									</ul>
								</div>
							</div>
							<div>
								<div class="map-grid">
									<h5>Contact Me Through</h5>
									<ul>
										<li>Mobile No : 07 53 79 49 04</li>
										<li>Office No : 03 26 65 46 42</li>
									
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!--Plug-in Initialisation-->
				<script type="text/javascript">
				$(document).ready(function() {
					//Horizontal Tab
					$('#parentHorizontalTab').easyResponsiveTabs({
						type: 'default', //Types: default, vertical, accordion
						width: 'auto', //auto or any width like 600px
						fit: true, // 100% fit in a container
						tabidentify: 'hor_1', // The tab groups identifier
						activate: function(event) { // Callback function if tab is switched
							var $tab = $(this);
							var $info = $('#nested-tabInfo');
							var $name = $('span', $info);
							$name.text($tab.text());
							$info.show();
						}
					});

					// Child Tab
					$('#ChildVerticalTab_1').easyResponsiveTabs({
						type: 'vertical',
						width: 'auto',
						fit: true,
						tabidentify: 'ver_1', // The tab groups identifier
						activetab_bg: '#fff', // background color for active tabs in this group
						inactive_bg: '#F5F5F5', // background color for inactive tabs in this group
						active_border_color: '#c1c1c1', // border color for active tabs heads in this group
						active_content_border_color: '#5AB1D0' // border color for active tabs contect in this group so that it matches the tab head border
					});

					//Vertical Tab
					$('#parentVerticalTab').easyResponsiveTabs({
						type: 'vertical', //Types: default, vertical, accordion
						width: 'auto', //auto or any width like 600px
						fit: true, // 100% fit in a container
						closed: 'accordion', // Start closed if in accordion view
						tabidentify: 'hor_1', // The tab groups identifier
						activate: function(event) { // Callback function if tab is switched
							var $tab = $(this);
							var $info = $('#nested-tabInfo2');
							var $name = $('span', $info);
							$name.text($tab.text());
							$info.show();
						}
					});
				});
			</script>
				
			</div>
			
		<div class="clearfix"></div>
	</div>
	</div>
</div>
<!-- //contact -->

<!--footer-->
<?php include('footer.php');?>
<!-- //footer-->
<!-- tabs -->
<script src="../js/easyResponsiveTabs.js" type="text/javascript"></script>
	<script type="text/javascript">
		$(document).ready(function () {
			$('#horizontalTab').easyResponsiveTabs({
			type: 'default', //Types: default, vertical, accordion           
			width: 'auto', //auto or any width like 600px
			fit: true   // 100% fit in a container
			});
		});				
	</script>
<!-- //tabs -->
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
		<script src="../js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<script type='text/javascript' src="../js/jquery.mycart.js"></script>
  <script type="text/javascript">
  $(function () {

    var goToCartIcon = function($addTocartBtn){
      var $cartIcon = $(".my-cart-icon");
      var $image = $('<img width="30px" height="30px" src="' + $addTocartBtn.data("../image") + '"/>').css({"position": "fixed", "z-index": "999"});
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

<?php

 if(isset($_POST['complain']))
 {
include('config.php');
$f_name=$_POST['f_name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$message=$_POST['message'];



$query= ("INSERT INTO complain (complain_person_name,phone_no,Email,message) value('$f_name','$phone','$email','$message')");
 $result = mysqli_query($conn,$query);
echo "<script>window.open('complain.php','_self')</script>";

 }

  ?>