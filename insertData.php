<?php
include('connect.php'); 
  $customer_id = $_REQUEST["customer_id"];
  $customer_name = $_REQUEST["customer_name"];
  $address = $_REQUEST["customer_address"];
  $postal_code = $_REQUEST["postal_code"];
  $phone_number = $_REQUEST["phone_number"];
  $fax_number = $_REQUEST["fax_number"];
  $email = $_REQUEST["email"];
  $sql = "INSERT INTO customers(customer_id, customer_name, customer_address, postal_code, phone_number, fax_number, email) 
       VALUES('$customer_id', '$customer_name', '$address', '$postal_code', '$phone_number', '$fax_number', '$email')";

  $result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
  
  mysqli_close($con);

  if ($result) {
    echo "<script type='text/javascript'>";
    echo "alert('บันทึกข้อมูลสำเร็จ!!');";
    echo "</script>";
  }
  
  else{
  echo "<script type='text/javascript'>";
  echo "alert('error!!');";
  echo "</script>";
}
?>