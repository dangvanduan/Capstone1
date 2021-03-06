<?php 
    require 'server/connect.php';
 ?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="img/favicon.png" type="image/png">
    <title>Chi tiết tư vấn</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="vendors/animate-css/animate.css">
    <!-- main css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/styleCustom.css">
    <link rel="stylesheet" href="css/userInfo.css">
    <link rel="stylesheet" href="css/font.css">
</head>

<body>

    <!--================Header Menu  =================-->

    <header class="header_area">
        <div class="top_menu row m0">
            <div class="container">
                <div class="float-left">
                    <a class="dn_btn" href="mailto:TuVanSucKhoe.@gmail.com"><i
                            class="ti-email"></i>TuVanNhaKhoa.@gmail.com</a>
                </div>
                <div class="float-right">
                    <ul class="list header_social">

                        <li><a href="https://www.facebook.com/T%C6%B0-v%E1%BA%A5n-nha-khoa-107003941234885"><i
                                    class="ti-facebook"></i>Facebook</a></li>
                        <li><a href="https://secure.skype.com/portal/overview"><i class="ti-skype"></i>Skype</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- =============================MAIN MENU -->

        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a style="font-size: 20px; color: purple" class="navbar-brand logo_h" href="index.php"><img
                            src="img/logo.png" alt=""></a>
                    <form action="timkiem.php" method="GET">
                        <input type="text" class="search-box" placeholder="vd: viêm nướu..."
                            style="width: 230px ;height:40px;" name="key" required="Vui lòng gõ gì đó">
                        <input type="submit" value="Tìm"
                            style="margin-left: 5px; border: 1px solid blue; height: 40px; background-color: green;color: white;width: 48px;">
                    </form>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item"><a class="nav-link font" href="index.php">Trang chủ</a></li>

                            <li class="nav-item"><a class="nav-link font" href="doctors.php">Nhakhoa</a></li>
                            <li class="nav-item">
                                <a href="hoidap.php" class="nav-link font">Tư vấn</a>
                            </li>
                            <li class="nav-item"><a class="nav-link font" href="TinTuc.php">Tin tức</a></li>
                            <?php if(isset($_SESSION['user_id']) && $_SESSION['role']==1): ?>
                                <?php $name=substr($_SESSION['user_name'],strrpos($_SESSION['user_name']," "));?>
                                    <li class="nav-item submenu dropdown"><a href="userInfo.php" class="nav-link font" style="color: #780664">Hi <?php echo $name; ?> </a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item"><a class="nav-link font" href="Login/changepass.php">Cập nhật thông tin</a></li>
                                            <li class="nav-item"><a class="nav-link font" href="server/logout.php">Đăng xuất</a></li> 
                                        </ul>
                                    </li>
                                <?php>
                            <?php elseif(isset($_SESSION['user_id']) && $_SESSION['role']==2): ?>
                                <?php $name=substr($_SESSION['user_name'],strrpos($_SESSION['user_name']," "));?>
                                    <li class="nav-item submenu dropdown"><a href="userInfo.php" class="nav-link font" style="color: #780664">Hi <?php echo $name; ?> </a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item"><a class="nav-link font" href="Login/changepass.php">Cập nhật thông tin</a></li>
                                            <li class="nav-item"><a class="nav-link font" href="server/logout.php">Đăng xuất</a></li> 
                                        </ul>
                                    </li>
                                <?php>
                            <?php elseif(isset($_SESSION['user_id']) && $_SESSION['role']==3): ?>
                                <?php $name=substr($_SESSION['user_name'],strrpos($_SESSION['user_name']," "));?>
                                    <li class="nav-item submenu dropdown"><a href="userInfo.php" class="nav-link font" style="color: #780664">Hi <?php echo $name; ?> </a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item"><a class="nav-link font" href="Login/changepass.php">Cập nhật thông tin</a></li>
                                            <li class="nav-item"><a class="nav-link font" href="server/logout.php">Đăng xuất</a></li> 
                                        </ul>
                                    </li>
                                <?php>
                                <?php else : ?>
                                    <li class="nav-item submenu dropdown"><a href="#" class="nav-link dropdown-toggle font" data-toggle="dropdown"role="button" aria-haspopup="true" aria-expanded="false">Tài khoản</a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item"><a class="nav-link font" href="Login/signup.php">Đăng Ký</a></li>
                                            <li class="nav-item"><a class="nav-link font" href="Login/signin.php">Đăng nhập</a></li> 
                                        </ul>
                                    </li> 
                            <?php endif; ?>

                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        </div>
    </header>
        <!--================Home Banner Area =================-->
        <section class="banner_area">
      <div class="banner_inner d-flex align-items-center">
        <div class="container">
          <div
            class="banner_content d-md-flex justify-content-between align-items-center">
            <div class="Title_Banner">
              <h2>Thông tin người dùng</h2>
          </div>
        </div>
      </div>
    </section>
    <!--================End Home Banner Area =================-->

    <section class="blog-area area-padding">
        <div class="container">
            <div class="Title_Banner row">
                <div class="col-md-5 col-xl-4">
                    <h1 style="color: black">Thông tin của bạn</h1>
                </div>
            </div>
            <div style="margin-top: -15px;margin: 0px auto;">
                <?php 
                        $phone = empty($_SESSION['phone'])?"chưa công khai" :$_SESSION['phone'];
                        $role = $_SESSION['role'] ==1?'Khách hàng':'Nha khoa';
                             $text='<div class="info">
                                <div class="x">
                                    <span>Loại tài khoản: '.$role.'</span> 
                                </div>
                                <div class="x">
                                    <span>Tên: '.$_SESSION['user_name'].'</span> 
                                </div>
                                 <div class="x">
                                    <span>Email đăng nhập: '.$_SESSION['email'].'</span>
                                </div>
                                <div class="x">
                                    <span>Mật khẩu: xxxx</span> 
                                </div>
                                <div class="x">
                                    <span>Số điện thoại: '.$phone.'</span>
                                </div>
                                <div class="x">
                                    <span>Ngày tạo: '.$_SESSION['create_date'].'</span>
                                </div>';
                             if( $_SESSION['role'] ==2){
                                $text= $text.'<div class="x">
                                                    <span>Địa chỉ: '.$_SESSION['dental_address'].'</span> 
                                                </div>
                                                <div class="x">
                                                    <span>Hình thức: '.$_SESSION['categorize'].'</span> 
                                                </div>
                                                 <div class="x">
                                                    <span>Link trang chủ: '.$_SESSION['link'].'</span>
                                                </div>
                                                <div class="x">
                                                    <span>Giờ hoạt động: '.$_SESSION['open_time'].'</span> 
                                                </div>';
                             }
                             $text= $text.'</div>';
                             echo $text;  
                            
                     ?>
                <div class="business">
                    <div class="row">
                        <?php 
                                require 'server/getUserInfo.php';
                                $text='<div class="col-md-6 col-lg-4" >
                                     <div class="card-service text-center text-lg-left mb-4 mb-lg-0" style="border-radius: 8px;background-color: purple">
                                        <h1 class="title">Bạn đã hỏi</h1>
                                        <p class="value">'.$arr.'</p>     
                                     </div>
                                </div>
                                <div class="col-md-6 col-lg-4" >
                                     <div class="card-service text-center text-lg-left mb-4 mb-lg-0" style="border-radius: 8px;background-color: purple">
                                        <h1 class="title">Được giải đáp</h1>
                                        <p class="value">'.$number3.'</p>     
                                     </div>
                                </div>
                                <div class="col-md-6 col-lg-4" >
                                     <div class="card-service text-center text-lg-left mb-4 mb-lg-0" style="border-radius: 8px;background-color: purple">
                                        <h1 class="title">Đang quan tâm</h1>
                                        <p class="value">'.$number2.'</p>     
                                     </div>
                                </div>';
                                echo $text;
                             ?>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ================ LIÊN HỆ ================= -->  
    <section class="hotline-area text-center area-padding" style="margin-top: 15px;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2>Điên thoại tư vấn 24/7</h2>
                        <span>(034)-7927070</span>
                        <p class="pt-3">Chúng tôi sẵn sàng giúp bạn vượt qua khó khăn mặc cảm, hãy để chúng tôi cảm nhận và cùng bạn đánh bại chúng</p>
                    </div>
                </div>
            </div>
            <div style="margin-top: 5px;">
                <a style="color: pink;text-align: center; font-size: 18px;" class="dn_btn" href="mailto:TuVanSucKhoe.@gmail.com"><i class=""></i>TuVanNhaKhoa@gmail.com</a>
                <a style="color: yellow;margin-left: 5px;" href="https://www.facebook.com/T%C6%B0-v%E1%BA%A5n-nha-khoa-107003941234885"><i class="ti-facebook"></i></a>
                <a style="color: yellow;margin-left: 5px;"  href="https://secure.skype.com/portal/overview"><i class="ti-skype"></i></a>
            </div>
     </section>
    <!-- ================ Hotline Area End ================= -->  


<!-- ====================================FOOTER -->

<div class="footer" style="text-align: center; margin-bottom: 20px;">
	<hr>
	 Dịch vụ được hoàn hiện bởi | <a href="#" target="_blank">Team C1SE13</a>
</div>


    <!-- ====================================FOOTER -->

    <script src="js/jquery-2.2.4.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/stellar.js"></script>
    <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/mail-script.js"></script>
    <script src="js/contact.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>
    <script src="js/theme.js"></script>
</body>

</html>