<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="img/favicon.png" type="image/png">
  <title>Cập nhật thông tin Người dùng&Bác sĩ</title>

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
                  if(isset($_POST['danh_muc_user']))
                {
                  $name = $_POST['danh_muc_user'];
                }
              }
                 $sql_del = "UPDATE user SET status = 0 WHERE user_name='$name'";
                 $query_del = mysqli_query($conn,$sql_del);
                 if($query_del)
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
                <h1 class="h4 text-gray-900 mb-4">Người dùng - bác sĩ</h1>
              </div>
              <form class="user" method="post">
               
                  <?php 
                       $sql = "SELECT user_name FROM user ORDER BY user_id ASC";
                        $query = mysqli_query($conn,$sql);
                   ?>
                 <select  name="danh_muc_user" class="col-sm-12 mb-3 mb-sm-0" style="border-radius: 80px !important;color: #9E9E9E !important;font-size: .8rem;" selected="selected">
                                      <option >--Chọn--</option>

                             <?php 
                               while ($row = mysqli_fetch_array($query)) {?>
                                   <option value="<?php echo $row['user_name'];?>"><?php echo $row['user_name'];?></option>
                             <?php }?>
                    </select>
              <input type="submit" name="tai_len" value="Xóa" style=" margin-left: 190px;font-size: 20px;padding: 10px 15px; width: 100px;font-family: arial;">
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
