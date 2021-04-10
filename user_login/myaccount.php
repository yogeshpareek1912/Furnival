<?php include('header.php');?>

<?php 
include('config.php');
if (isset($_GET['cart_id'])){
                       $cart_id=$_GET['cart_id'];

                      $select_query= "delete from cart where cart_id=$cart_id";
                      $select_query_run =     mysqli_query($conn,$select_query);
           }
		   
		   
			$invoice_no=date('Ymdhis');

		   if(isset($_POST['order'])){
			   
			$p_id = $_POST['p_id'];
			$qty = $_POST['qty'];
			$c_id = $_SESSION['c_id'];
		  	for($i=0; $i<sizeof($p_id); $i++) {
		  
		   $qry1="insert into orders(invoice_no,p_id,c_id,qty)
			values('$invoice_no','$p_id[$i]','$c_id','$qty[$i]')" or die (mysqli_error());
	    
		 mysqli_query($conn,$qry1);
		  }  
		  
		  // CART ALL  VALUE DELETE 
			$qry2= "delete from cart where c_id=$c_id";
			mysqli_query($conn,$qry2);
			echo"<script>window.open('mycart.php','_self')</script>";	
		   }
		  
	?>
   <!--banner-->
<div class="banner-top">
	<div class="container">
		<h3 >My Account</h3>
		<div class="clearfix"> </div>
	</div>
</div>

	<!-- contact -->
		<div class="check-out">	 
		<div class="container">	 
	 <div class="spec ">
				<h3>My Account</h3>
					<div class="ser-t">
						<b></b>
						<span><i></i></span>
						<b class="line"></b>
					</div>
			</div>
				<script>$(document).ready(function(c) {
					$('.close1').on('click', function(c){
						$('.cross').fadeOut('slow', function(c){
							$('.cross').remove();
						});
						});	  
					});
			   </script>
			<script>$(document).ready(function(c) {
					$('.close2').on('click', function(c){
						$('.cross1').fadeOut('slow', function(c){
							$('.cross1').remove();
						});
						});	  
					});
			   </script>	
			   <script>$(document).ready(function(c) {
					$('.close3').on('click', function(c){
						$('.cross2').fadeOut('slow', function(c){
							$('.cross2').remove();
						});
						});	  
					});
			   </script>	
			    
 <table class="table "> 
			 
		  
		  
		  <?php  
		  $c_id = $_SESSION['c_id'];
		   $select_query1 = "SELECT * FROM customer where c_id='$c_id'";
					  $select_query_run1 =  mysqli_query($conn,$select_query1);
					while ($row =  mysqli_fetch_array($select_query_run1))

                  {
					  
					  $cname =  $row['c_f_name'];
					  $lname =  $row['c_L_name'];
					  $c_age =  $row['c_Birthday'];
					  $c_phn =  $row['c_phn'];
						$c_email =  $row['c_email'];
						
				  }
					  ?>	
		    <tr>
			<th class="t-head head-it ">First Name</th>
			<td class="ring-in t-data"> <?php echo $cname ;?></td>
			 
		  </tr> 
		  
		  <tr>
			<th class="t-head head-it ">Last Name</th>
			<td class="ring-in t-data">  <?php echo $lname ;?></td>
			 
		  </tr>
		  
			
		  <tr>
			<th class="t-head head-it "> Age</th>
			<td class="ring-in t-data">  <?php echo $c_age ;?></td>
			 
		  </tr> 
		  <tr>
			<th class="t-head head-it "> Phone</th>
			<td class="ring-in t-data">  <?php echo $c_phn ;?></td>
			 
		  </tr> 
		  <tr>
			<th class="t-head head-it "> Email </th>
			<td class="ring-in t-data">  <?php echo $c_email ;?></td>
			 
		  </tr>
		   
		 
				   
	 
	</table>
	
				  
				  
		 </div>
		 </div>
		 				
	<!--quantity-->
			<script>
			$('.value-plus').on('click', function(){
				var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)+1;
				divUpd.text(newVal);
			});

			$('.value-minus').on('click', function(){
				var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)-1;
				if(newVal>=1) divUpd.text(newVal);
			});
			</script>
			<!--quantity-->
			

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