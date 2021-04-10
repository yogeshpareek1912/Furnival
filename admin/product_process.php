
<?php
if(isset($_POST['submit'])){    /*when vendor will press submit button by filling the form records then the all data  will be stored in DB */
INCLUDE('config.php');
INCLUDE('config2.php');

    $p_name = $_POST['p_name'];   /*stores product name*/
    $p_price =$_POST['p_price'];
    $each_qty=$_POST['each_qty'];
    $p_cat_title = $_POST['p_cat_title'];
    $p_mfg = $_POST['p_mfg'];
    $p_desc = $_POST['p_desc'];
    $qty = $_POST['p_qty'];
    $p_brand = $_POST['p_brand'];

    $p_img = $_FILES['p_img']['name'];  // this is for storing the image in a variable
    $p_img_tmp =  $_FILES['p_img']['tmp_name'];  //this is for temporarily store the the image.it helps  untill image is getting uploaded

    move_uploaded_file($p_img_tmp,"../image/$p_img"); //when image is uploaded then it will be stored in image folder we have used
 
	 $sql="INSERT INTO product(p_name,p_brand,p_price,each_qty,p_mfg,p_img,cat_title,p_desc,Qty)
	 value('$p_name','$p_brand','$p_price','$each_qty','$p_mfg','$p_img','$p_cat_title','$p_desc','$qty')";
	
$result = mysqli_query($conn,$sql);

$sql1="INSERT INTO stock(p_name,p_brand,p_price,each_qty,p_mfg,p_img,cat_title,p_desc,Qty)
	 value('$p_name','$p_brand','$p_price','$each_qty','$p_mfg','$p_img','$p_cat_title','$p_desc','$qty')";
	

$result1 = mysqli_query($connect,$sql1);
 mysqli_close($connect);
 
 if($result && $result1)
	{  
			 	header("Location: product.php?status"); 
} 
    else
    {
			echo "<script>alert(' Unsuccessfull')</script>";
			echo"<script>window.open('product.php','_self')</script>";
	}
	
	
	
	
}

