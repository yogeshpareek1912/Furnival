<?php include('config.php'); INCLUDE('config2.php'); ?>
<?php 
$id = $_GET['id'];
$sql = ("DELETE from product WHERE p_id='$id'");
$result = mysqli_query($conn,$sql); 

$sql1 = ("DELETE from stock WHERE p_id='$id'");
$result1 = mysqli_query($connect,$sql1); 
mysqli_close($connect);

echo '<script type="text/javascript">location.replace("product.php");</script>';

?>