<?php include('header.php');?>

<?php 
include('config.php');
if (isset($_GET['wishlist_id'])){
                       $wishlist_id=$_GET['wishlist_id'];

                      $select_query= "delete from wishlist where wishlist_id=$wishlist_id";
                      $select_query_run = mysqli_query($conn,$select_query);
           }

		   if(isset($_POST['add_to_cart'])){
			   
			$p_id = $_POST['p_id'];
			$qty = $_POST['qty'];
			$c_id = $_SESSION['c_id'];
            $v_email=$_SESSION['c_email'];
		  	for($i=0; $i<sizeof($p_id); $i++) {
		  
		   $qry1="insert into cart(c_id,p_id,v_email,qty)
			values('$c_id','$p_id[$i]','$v_email','$qty[$i]')" or die (mysqli_error());
	    
		 mysqli_query($conn,$qry1);
		  }  
		  
		  // wishlist ALL  VALUE DELETE 
			$qry2= "delete from wishlist where c_id=$c_id";
			mysqli_query($conn,$qry2);
			echo"<script>window.open('mywishlist.php','_self')</script>";	
		   }
		 // <!--------------wishlist Item -------------------->
		 
		 if (isset($_GET['plus'])){
                       $wishlist_id = $_GET['plus'];
			
			$query = "SELECT qty FROM wishlist where wishlist_id ='$wishlist_id'";
			$run_query = mysqli_query($conn, $query);
            while($r = mysqli_fetch_array($run_query)){
			$q = $r['qty'];
			}
					$qty = $q+1;
		
  mysqli_query($conn,"update wishlist set qty='$qty' where wishlist_id='$wishlist_id'")or die(mysqli_error());
			
			 	
			 echo "<script>window.location.replace('mywishlist.php');</script>";
		               
           }
		   
		   	 if (isset($_GET['minus'])){
                       $wishlist_id = $_GET['minus'];
			
			$query = "SELECT qty FROM wishlist where wishlist_id ='$wishlist_id'";
			$run_query = mysqli_query($conn, $query);
            while($r = mysqli_fetch_array($run_query)){
			$q = $r['qty'];
			}
					$qty = $q-1;
		
  mysqli_query($conn,"update wishlist set qty='$qty' where wishlist_id='$wishlist_id'")or die(mysqli_error());
			
				
			 echo "<script>window.location.replace('mywishlist.php');</script>";
		               
           }
		   
	?>
   <!--banner-->
<div class="banner-top">
	<div class="container">
		<h3 >My wishlist</h3>
		<h4><a href="index.html">Home</a><label>/</label>My wishlist</h4>
		<div class="clearfix"> </div>
	</div>
</div>

	<!-- contact -->
		<div class="check-out">	 
		<div class="container">	 
	 <div class="spec ">
				<h3>My Wishlist</h3>
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
 <form action="mywishlist.php" method="post">
					
		  <tr>
			<th class="t-head " width="20%"><center>Products</th>
			<th class="t-head " width="10%"><center>Image</th>
			<th class="t-head"  width="40%"><center>Quantity</th>
			<th class="t-head"  width="10%"><center>Price</th>
			<th class="t-head"  width="10%"><center>Sub Total</th>

			<th class="t-head"  width="20%"><center>Remove</th>
		  </tr>
		  
		   <?php  
		
			include("config.php");
			$tot=0;
				$c_id=$_SESSION['c_id'];
                      $select_query= "Select * from wishlist  where c_id='$c_id'";
                      $select_query_run =  mysqli_query($conn,$select_query);
						$numrow = mysqli_num_rows ($select_query_run);
                      while   ($row=   mysqli_fetch_array($select_query_run))

                  {
					  $p_id = $row['p_id'];
				   $select_query1= "Select * from product  where p_id='$p_id'";
                      $select_query_run1 =     mysqli_query($conn,$select_query1);
                      while   ($row1=   mysqli_fetch_array($select_query_run1))
					  {
					$tot+= $row1['p_price']*$row['qty'];
                          
              ?>
			  
		  <tr class="cross">
		
			<td class="ring-in t-data">
			<div class="sed">
				<h5><?php echo $row1['p_name'];?></h5>
			</div> 
			
			 </td>
			 
			 	<td  class="t-data">
					<img src="../image/<?php echo $row1['p_img'];?>" height="50" width="50" class="img-responsive" alt="">
			
			</td>
			<td class="t-data">
		
			<div class="quantity"> 
		<div class="quantity-select">            
		<a href="mywishlist.php?minus=<?php echo $row['wishlist_id'];?>">	<div class="entry value-minus">&nbsp;</div></a>
				<div class="entry value"><span class="span-1"><?php echo $row['qty'];?></span></div>									
			<a href="mywishlist.php?plus=<?php echo $row['wishlist_id'];?>">	<div class="entry value-plus active">&nbsp;</div></a>
		</div>
			 </div>
			
			</td>
			<td class="t-data">Cad.<?php echo $row1['p_price'];?></td>
			<td class="t-data">Cad.<?php echo $row1['p_price']*$row['qty'];?></td>
			
			
			<td  class="t-data">
				<center><a href="mywishlist.php?wishlist_id=<?php echo $row['wishlist_id'];?>"onclick="return confirm('Are You Sure Remove Product?');">
 

 <i class="fa fa-times" style="font-size:35px; color:red;" aria-hidden="true"></i> </center>
				 
			
			</td>
			<input type="hidden" name="p_id[]" value="<?php echo $row['p_id'];?>" >
			<input type="hidden" name="qty[]" value="<?php echo $row['qty'];?>" >
			
			
		  </tr>
				  <?php } } if($numrow > 0){?>
				  
				    <tr>
		  <td colspan="4"><h4>Total Bill Amount : </td>
				 
						<td><h4>Cad.<?php echo $tot;?> </td>
						<td></td>
		  </tr>
				  
		  
		  <tr>
		  <td colspan="5">
		  
		  <td> <input type="submit" name="add_to_cart" value="Add To Cart" style="float:right;"class="btn btn-success">
		   
		  </td>
		  		
		  </tr>
		  
		  <?php }else{ ?>
		  
		  <tr>
		  <td colspan="5"> 
		  <center><h2>Your wishlist is empty!</h2>
		  		</td>
		  </tr>
		  <?php }?>
		  </form>
	</table>
	
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
		<script src="../js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<script type='text/javascript' src="../js/jquery.mywishlist.js"></script>
  <script type="text/javascript">
  $(function () {

    var goTowishlistIcon = function($addTowishlistBtn){
      var $wishlistIcon = $(".my-wishlist-icon");
      var $image = $('<img width="30px" height="30px" src="' + $addTowishlistBtn.data("../image") + '"/>').css({"position": "fixed", "z-index": "999"});
      $addTowishlistBtn.prepend($image);
      var position = $wishlistIcon.position();
      $image.animate({
        top: position.top,
        left: position.left
      }, 500 , "linear", function() {
        $image.remove();
      });
    }

    $('.my-wishlist-btn').mywishlist({
      classwishlistIcon: 'my-wishlist-icon',
      classwishlistBadge: 'my-wishlist-badge',
      affixwishlistIcon: true,
      checkoutwishlist: function(products) {
        $.each(products, function(){
          console.log(this);
        });
      },
      clickOnAddTowishlist: function($addTowishlist){
        goTowishlistIcon($addTowishlist);
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