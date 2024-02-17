<?php
include('connect.php'); 
$sql = "SELECT * FROM customers";
$data = mysqli_query($con, $sql) or die("Error in query: $sql " . mysqli_error($con));
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <title>55</title>
<link rel="icon" href="img/core-img/favicon.ico">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
  <div class="container">
    <h1>ข้อมูลลูกค้า</h1>
    <form action="" method="POST" id="myForm" target="iframe_target">
    <iframe id="iframe_target" name="iframe_target" src="#" style="width:0;height:0;border:0px solid #fff;"></iframe>
      <div class="row">
        <div class="col-md-6">
          <label for="id">รหัสลูกค้า:</label>
          <input type="text" class="form-control" id="customer_id" name="customer_id">
        </div>
        <div class="col-md-6">
          <label for="name">ชื่อลูกค้า:</label>
          <input type="text" class="form-control" id="customer_name" name="customer_name" >
        </div>
      </div>
      <br>
      <div class="form-group">
        <label for="address ">ที่อยู่:</label>
        <textarea class="form-control" id="customer_address" rows="3" name="customer_address"></textarea>
      </div>
      <div class="row">
        <div class="col-md-6">
          <label for="zip">รหัสไปรษณีย์:</label>
          <input type="number" class="form-control" id="postal_code" name="postal_code">
        </div>
        <div class="col-md-6">
          <label for="phone">เบอร์โทรศัพท์:</label>
          <input type="tel" class="form-control" id="phone_number" name="phone_number" >
        </div>
      </div>
      <div class="row" >
        <div class="col-md-6">
            <label for="telfax">เบอร์แฟกซ์:</label>
            <input type="text" class="form-control" id="fax_number" name="fax_number">
          </div>
          <div class="col-md-6">
            <label for="phone">อีเมล</label>
            <input type="email" class="form-control" id="email" name="email">
          </div>
      </div>
      <br>
      <div class="row" style="padding-top:30px">
    <div class="col-md-4" id="save">
        <button class="btn btn-primary btn-block" onclick="insertData()" type="submit" style="width: 100%">บันทึก</button>
    </div>
    <div class="col-md-4" id="edit">
        <button class="btn btn-warning btn-block" onclick="updateData()" type="submit" style="width: 100%">แก้ไข</button>
    </div>
    <div class="col-md-4" id="del">
        <button class="btn btn-danger btn-block" onclick="deleteData()" type="submit" style="width: 100%">ลบ</button>
    </div>
</div>

<br>
      <table id="customerTable" class="table table-hover table-dark">
        <thead>
          <tr>
            <th scope="col">รหัสลูกค้า</th>
            <th scope="col">ชื่อลูกค้า</th>
            <th scope="col">ที่อยู่</th>
            <th scope="col">รหัสไปรษณีย์</th>
            <th scope="col">เบอร์โทรศัพท์</th>
            <th scope="col">เบอร์แฟกซ์</th>
            <th scope="col">อีเมล</th>
          </tr>
        </thead>
        <tbody>
        <?php foreach ($data as $customer): ?>
            <tr>
                <td><?php echo $customer["customer_id"]; ?></td>
                <td><?php echo $customer["customer_name"]; ?></td>
                <td><?php echo $customer["customer_address"]; ?></td>
                <td><?php echo $customer["postal_code"]; ?></td>
                <td><?php echo $customer["phone_number"]; ?></td>
                <td><?php echo $customer["fax_number"]; ?></td>
                <td><?php echo $customer["email"]; ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
      </table>
      </div>

    </div>
    </div>
      <br>
    </form>
  </div>
</body>
<script>
        document.addEventListener('DOMContentLoaded', function () {
            var table = document.getElementById('customerTable');
            
            table.addEventListener('click', function (event) {
                var target = event.target;
  
                if (target.tagName.toLowerCase() === 'td') {

                    var rowData = target.parentElement.cells;

                    document.getElementById("customer_id").value = rowData[0].textContent;
                    document.getElementById("customer_name").value = rowData[1].textContent;
                    document.getElementById("customer_address").value = rowData[2].textContent;
                    document.getElementById("postal_code").value = rowData[3].textContent;
                    document.getElementById("phone_number").value = rowData[4].textContent;
                    document.getElementById("fax_number").value = rowData[5].textContent;
                    document.getElementById("email").value = rowData[6].textContent;
                }
            });
        });
    </script>
    <script src="get_type_data.js"></script>
</html>