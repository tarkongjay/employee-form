<?php
include('connect.php'); 
$customer_id = $_REQUEST["customer_id"];

$sql = "DELETE FROM customers WHERE customer_id='$customer_id'";


  $result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
  
  mysqli_close($con);

  if($result){
  echo "<script type='text/javascript'>";
  echo "alert('ลบข้อมูลสำเร็จ!!');";
  echo "</script>";
  }
  else{
  echo "<script type='text/javascript'>";
  echo "alert('error!!');";
  echo "</script>";
}
?>