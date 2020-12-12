<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chatbot</title>
    <link rel="stylesheet" href="css/bot.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
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

    <!--================Header Menu Area =================-->
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
                            
                            <li class="nav-item"><a class="nav-link font" href="doctors.php">Nhakhoa</a></li>    
                            <li class="nav-item">
                                <a href="hoidap.php" class="nav-link font">Tư vấn</a>
                            </li> 
                            <li class="nav-item">
                                <a href="bot.php" class="nav-link font">ChatBot</a>
                            </li> 
                            <li class="nav-item"><a class="nav-link font" href="TinTuc.php">Tin tức</a></li> 
                           <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle font" data-toggle="dropdown"role="button" aria-haspopup="true" aria-expanded="false">Tài khoản</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link font" href="Login/signup.php">Đăng Ký</a></li>
                                    <?php if(isset($_SESSION['user_id'])): ?>
                                        <li class="nav-item"><a class="nav-link font" href="server/logout.php">Đăng xuất</a></li> 
                                    <?php else: ?>
                                        <li class="nav-item"><a class="nav-link font" href="Login/signin.php">Đăng nhập</a></li> 
                                    <?php endif; ?>
                                </ul>
                            </li> 
                            <?php if(isset($_SESSION['user_id'])): ?>
                                <?php 
                                    $name=substr($_SESSION['user_name'],strrpos($_SESSION['user_name']," "));
                                 ?>
                                <li class="nav-item"><a href="userInfo.php" class="nav-link font" style="color: #780664">Hi <?php echo $name; ?> </a></li> 
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
        <div class="container" style="margin-top: 50px">
          <div
            class="banner_content d-md-flex justify-content-between align-items-center">
            <div class="mb-3 mb-md-0">
              <h2>ChatBot</h2>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================End Home Banner Area =================-->
    <section class="appointment-area area-padding" >
        <div class="container" >
        
    <div class="wrapper">
        <div class="header">
            <div class="title">Simple Online Chatbot</div>
        </div>
        <div class="form">
            <div class="bot-inbox inbox">
                <div class="icon"></div>
                <div class="msg-header">
                    <div class="msg-info">
                        <div class="msg-info-name">ChatBot</div>
                        <div class="msg-info-time">24/7</div>
                    </div>
                    <div class="msg-text">
                        <p>Xin chào, tôi có thể giúp được gì cho bạn!</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="typing-field">
            <div class="input-data">
                <input id="data" type="text" placeholder="Xin mời nhập vào đây ..." required>
                <button id="send-btn">Send</button>
            </div>
        </div>
    </div>
    </div>
    </section>

    <!--================ appointment Area End =================-->
     <section class="hotline-area text-center area-padding" style="margin-top: 15px;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2>Điên thoại tu vấn 24/7</h2>
                        <span>(034)-7927070</span>
                        <p class="pt-3">Chúng tôi sẵn sàng giúp bạn vượt qua khó khăn mặc cảm, hãy để chúng tôi cảm nhận và cùng bạn đánh bại chúng</p>
                    </div>
                </div>
            </div>
            <div style="margin-top: 5px;">
                <a style="color: pink;text-align: center; font-size: 18px;" class="dn_btn" href="mailto:TuVanNhaKhoa.@gmail.com"><i class=""></i>TuVanNhaKhoa.@gmail.com</a>
                <a style="color: yellow;margin-left: 5px;" href="https://www.facebook.com/T%C6%B0-v%E1%BA%A5n-nha-khoa-107003941234885"><i class="ti-facebook"></i></a>
                <a style="color: yellow;margin-left: 5px;"  href="https://secure.skype.com/portal/overview"><i class="ti-skype"></i></a>
            </div>
     </section>
    <div class="footer" style="text-align: center; margin-bottom: 20px;">
        <hr>
         
    </div>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              
    <!-- End footer Area -->


    <script>
        $(document).ready(function(){
            $("#send-btn").on("click", function(){
                $value = $("#data").val();
                $msg = '<div class="user-inbox inbox"><div class="msg-user"><div class="msg-info"><div class="msg-info-time">'+getCurrentTime()+'</div><div class="msg-info-name">User</div></div><div class="msg-text"><p>'+ $value +'</p></div></div><div class="msg-img"></div></div>';
                $(".form").append($msg);
                $("#data").val('');
                
                // start ajax code
                $.ajax({
                    url: 'message.php',
                    type: 'POST',
                    data: 'text='+$value,
                    success: function(result){
                        $replay = '<div class="bot-inbox inbox"><div class="icon"></div><div class="msg-header"><div class="msg-info"><div class="msg-info-name">ChatBot</div><div class="msg-info-time">'+getCurrentTime()+'</div></div><p>'+ result +'</p></div></div>';
                        $(".form").append($replay);
                        // when chat goes down the scroll bar automatically comes to the bottom
                        $(".form").scrollTop($(".form")[0].scrollHeight);
                    }
                });
            });
        });

    </script>
    <script>
                function getCurrentTime(){
			var now = new Date();
			var hh = now.getHours();
			var min = now.getMinutes();
			var ampm = (hh>=12)?'PM':'AM';
			hh = hh%12;
			hh = hh?hh:12;
			hh = hh<10?'0'+hh:hh;
			min = min<10?'0'+min:min;
            var time = hh+":"+min+" "+ampm;
            return time;
        }
    </script>



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