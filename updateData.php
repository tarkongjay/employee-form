<?php 
include('connect.php'); 
$customer_id = $_REQUEST["customer_id"];
$customer_name = $_REQUEST["customer_name"];
$customer_address = $_REQUEST["customer_address"];
$postal_code = $_REQUEST["postal_code"];
$phone_number = $_REQUEST["phone_number"];
$fax_number = $_REQUEST["fax_number"];
$email = $_REQUEST["email"];

$sql = "UPDATE customers SET 
    customer_name ='$customer_name', customer_address = '$customer_address', postal_code = '$postal_code',
    phone_number = '$phone_number', fax_number = '$fax_number', email = '$email'
    WHERE customer_id='$customer_id'
    ";


  $result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
  
  mysqli_close($con);

  if($result){
  echo "<script type='text/javascript'>";
  echo "alert('แก้ไขข้อมูลสำเร็จ!!');";
  echo "</script>";
  }
  else{
  echo "<script type='text/javascript'>";
  echo "alert('error!!');";
  echo "</script>";
}
?>