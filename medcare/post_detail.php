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
    <title>Chi tiết</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap1.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css"> 
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="vendors/animate-css/animate.css">
    <!-- main css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/post_detail_style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/styleCustom.css">
     <link rel="stylesheet" href="css/tuongtacPost.css">
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
                       
                        <li><a href="https://www.facebook.com/T%C6%B0-v%E1%BA%A5n-nha-khoa-107003941234885"><i class="ti-facebook"></i></a></li>
                        <li><a href="https://secure.skype.com/portal/overview"><i class="ti-skype"></i></a></li>
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
    </header>
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

    <section class="banner_area">
      <div class="banner_inner d-flex align-items-center">
        <div class="container">
          <div
            class="banner_content d-md-flex justify-content-between align-items-center">
            <div class="Title_Banner">
              <h2>Tương tác</h2>
              <p></p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <div class="tuongtac">
        <div class="left">
            <?php 
                require 'server/getInteraction.php';
                $text='<div class="x">
                            <span>Người hỏi:</span> 
                             <span class="text">'.$user->user_name.'</span>     
                        </div>
                         <div class="x">
                            <span>Ngày hỏi: </span>
                            <span class="text">'.$user->create_date.'</span>    
                        </div>
                        <div class="x">
                            <span>Triệu chứng / bệnh : </span> 
                            <span class="text">'.$user->category_name.'</span>      
                        </div>
                        <div class="x">
                            <span>Câu hỏi: </span>
                            <span class="text">'.$user->qa_title.'</span>   
                        </div>
                        <div class="x" >
                            <span>Mô tả: </span>
                            <p class="text1">~'.$user->qa_content.'</p>        
                        </div>';
                        echo $text;
             ?>
        </div>
        <div class="right">
            <?php 
                $count=count($cmt);
                $count= $count>10?10:$count;
                for($i=0;$i<$count;$i++){
                    $text2='<div class="card-body">
                                <p class="user_name">'.$cmt[$i]->user_name.'<a class="user_email" href="mailto:'.$cmt[$i]->email.'">'.$cmt[$i]->email.'</a></p>
                                <div style=" color: white;float:left">'.$cmt[$i]->qa_content.'</div>
                                <div style=" color: #786365;text-align:right">'.$cmt[$i]->create_date.'</div>
                            </div> ';
                    echo $text2;
                }
                $text3='<div class="cmt_box">
                            <form action="server/commenting.php?" method="GET">
                                <input type="hidden" value="'.$qa_id.'" name = "qa_id">
                                <input type="textarea" name="cmt"; placeholder="Trả lời..." style="width: 100%;border-radius: 5px;border:1px solid blue;min-height: 50px;padding:5px;" required/>
                                <input style="margin-top: 5px; border:1px solid brown" type="submit" value="Trả lời" name="">
                            </form>
                        </div>';
                echo $text3;        
             ?>
        </div>
    </div>
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