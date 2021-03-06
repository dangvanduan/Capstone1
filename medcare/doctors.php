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
    <title>Danh sách nha khoa uy tín tại Đà Nẵng</title>
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
    <link rel="stylesheet" href="css/font.css">
</head>
<body>

    <!--================Header Menu  =================-->

     <header class="header_area">
        <div class="top_menu row m0">
            <div class="container">
                <div class="float-left">
                    <a class="dn_btn" href="mailto:TuVanSucKhoe.@gmail.com"><i class="ti-email"></i>TuVanNhaKhoa.@gmail.com</a>
                </div>
                <div class="float-right">
                    <ul class="list header_social">
                       
                        <li><a href="https://www.facebook.com/T%C6%B0-v%E1%BA%A5n-nha-khoa-107003941234885"><i class="ti-facebook"></i>Facebook</a></li>
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
                     <a style="font-size: 20px; color: purple" class="navbar-brand logo_h" href="index.php"><img src="img/logo.png" alt=""></a>
                     <form action="timkiem.php" method="GET">
                    <input type="text" class="search-box" placeholder= "vd: viêm nướu..." style="width: 230px ;height:40px;" name="key" required="Vui lòng gõ gì đó">
                        <input type="submit" value="Tìm" style="margin-left: 5px; border: 1px solid blue; height: 40px; background-color: green;color: white;width: 48px;">
                     </form>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item"><a class="nav-link font" href="index.php">Trang chủ</a></li> 
                            
                            <li class="nav-item"><a class="nav-link font" href="doctors.php">Nha khoa</a></li>    
                            <li class="nav-item">
                                <a href="hoidap.php" class="nav-link font">Tư vấn</a>
                            </li> 
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
    </header>

    <!--================Header Menu Area =================-->


    <!--================Home Banner Area =================-->
    <section class="banner_area">
      <div class="banner_inner d-flex align-items-center">
        <div class="container">
          <div
            class="banner_content d-md-flex justify-content-between align-items-center">
            <div class="Title_Banner">
              <h2>Danh sách nha khoa uy tín tại Đà Nẵng</h2>
          </div>
        </div>
      </div>
    </section>
    <!--================End Home Banner Area =================-->


     
    <!--================ Team section start =================-->  
    <section class="team-area area-padding">
        <div class="container">
            <div class="area-headin row">
                <div class="col-md-5 col-xl-4">
                    <h3>Chuyên nghiệp<br>
                    làm việc bằng lương tâm</h3>
                </div>
                <div class="col-md-7 col-xl-8">
                    <p>Không ai muốn gặp chúng tôi thường xuyên nhưng chúng tôi luôn đợi bạn</p>
                </div>
            </div>

            <div class="row">
                 <?php 
                    require "server/getDoctor.php";

                    for($i=0;$i<12;$i++)
                    {   
                        $text='<a id="jumpHere"><div class="col-md-6 col-lg-4 col-md-4">
                        <div class="single-blog">
                            <div class="thumb">
                                <img class="card-img rounded-0" src="img/team/'.($i+1).'.jpg" alt="">
                            </div>
                            <div class="short_details">
                                <a class="d-block">
                                     <h3>'.$arr[$i]->categorize.': '.$arr[$i]->user_name.'</h3>
                                </a>
                                <p>Địa chỉ: '.$arr[$i]->dental_address.'<br/> Điện thoại: <span style="color: brown"> '.$arr[$i]->phone.'</span></p>
                            </div>
                            <div class="team-footer d-flex justify-content-between" style="margin-top:-25px;">
        
                                  <p>Email: <a class="user_email" href="mailto:'.$arr[$i]->email.'">'.$arr[$i]->email.'</a><br/ >Giờ hoạt động:'.$arr[$i]->open_time.'<br/>Thông tin chi tiết: <a href="'.$arr[$i]->link.'">link trang chủ<a/><p/>
                                </div> 
                            </div>
                        </div></a>';
                        echo $text;
                    }
                 ?>
            </div>
        </div>
    </section>
    
    <!--================ Team section end =================-->  



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




<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
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