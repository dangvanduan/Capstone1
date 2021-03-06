<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="img/favicon.png" type="image/png">
  <title>Cập nhật thông tin Người dùng&Nha khoa</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>
<?php 
 include('connsql.php');
    $conn = connectsql();
           if (isset($_POST['tai_len'])) {
                if($_SERVER["REQUEST_METHOD"]=="POST"){
                  $role_name =$_POST["danh_muc_user"];
                      if($role_name=="user")
                        $role=1;
                      if($role_name=="doctor")
                        $role=2;
                      if($role_name=="admin")
                         $role=3;

                  }
                  if(isset($_POST['f_name']))
                {
                  $name = $_POST['f_name'];
                  if(empty(addslashes(trim($name))))
                    {
                      echo '<script>alert("Vui lòng nhập tên !")</script>';
                    }
                }
                if(isset($_POST['email'])){
                  $email = $_POST['email'];
                  if(empty(addslashes(trim($email))))
                    {
                      echo '<script>alert("Vui lòng nhập email !")</script>';
                    }
                }
                if(isset($_POST['phone'])){
                  $phone = $_POST['phone'];
                  if(empty(addslashes(trim($phone))))
                    {
                      echo '<script>alert("Vui lòng nhập số điện thoại !")</script>';
                    }
                }
                if(isset($_POST['password'])){
                  $password = $_POST['password'];
                  if(empty(addslashes(trim($password))))
                    {
                      echo '<script>alert("Vui lòng nhập mật khẩu !")</script>';
                    }
                }
                if(isset($_POST['create_date'])){
                  $create_date = $_POST['create_date'];
                  if(empty(addslashes(trim($create_date))))
                    {
                      echo '<script>alert("Vui lòng nhập ngày tạo !")</script>';
                    }
                }
                if(isset($_POST['dental_address'])){
                  $dental_address = $_POST['dental_address'];
                  if(empty(addslashes(trim($dental_address))))
                    {
                      echo '<script>alert("Vui lòng nhập địa chỉ !")</script>';
                    }
                }
                if(isset($_POST['link'])){
                  $link = $_POST['link'];
                  if(empty(addslashes(trim($link))))
                    {
                      echo '<script>alert("Vui lòng nhập link trang chủ nha khoa !")</script>';
                    }
                }
                if(isset($_POST['categorize'])){
                  $categorize = $_POST['categorize'];
                  if(empty(addslashes(trim($categorize))))
                    {
                      echo '<script>alert("Vui lòng nhập hình thức kinh doanh !")</script>';
                    }
                }
                if(isset($_POST['open_time'])){
                  $open_time = $_POST['open_time'];
                  if(empty(addslashes(trim($open_time))))
                    {
                      echo '<script>alert("Vui lòng nhập giờ hoạt động !")</script>';
                    }
                }
                 $sql_them = "INSERT INTO user(user_id,user_name,email,password,phone,role,create_date,dental_address,link,
                 categorize,open_time,status) 
                 VALUES('','$name','$email','$password','$phone',$role,'$create_date','$dental_address','$link','$categorize','$open_time',1)";
                 $query_add = mysqli_query($conn,$sql_them);
                 if($query_add)
                 {
                   header('location: tables.php');
                  }
          }

            //   echo $role;
               // if($cate_id==0) echo "chua chon loai benh";

 ?>
<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block "><img src="img/admin.png" alt="" style="width: 100%; height: 100%;"></div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Người dùng - nha khoa</h1>
              </div>
              <form class="user" method="post">
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Họ và tên" name="f_name">
                  </div>
                  <div class="col-sm-6">
                    <input type="Email" class="form-control form-control-user" id="exampleEmail" placeholder="Email" name="email">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="examplePhone" placeholder="Số điện thoại" name="phone">
                  </div>
                  <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user" id="examplePassword" placeholder="Mật khẩu" name="password">
                  </div>
                </div>
               <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="date" class="form-control form-control-user" id="exampleDateStart" placeholder="Ngày tạo tài khoản" name="create_date">
                  </div>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" id="exampleStudy" placeholder="Địa chỉ" name="dental_address">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <select style="width: 200.98px;height: 50px;" name="danh_muc_user">
                      <option value=""  selected="">--Chọn--</option>
                      <option value="user">Người dùng</option>
                      <option value="doctor">Nha khoa</option>
                      <option value="admin">Người quản lý</option>
                      
                    </select>
                  </div>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" id="exampleDateOff" placeholder="Link trang chủ" name="link"> 
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="exampleSpace" placeholder="Hình thức" name="categorize">
                  </div>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" id="exampleSubject" placeholder="Giờ hoạt động" name="open_time">
                  </div>
                </div>
                  
              <input type="submit" name="tai_len" value="Thêm" style=" margin-left: 190px;font-size: 20px;padding: 10px 15px; width: 100px;font-family: arial;">
                <hr>
               
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
