<?php 
	require 'connect.php';

	$name=$_POST['username'];
	$pass=$_POST['pass'];
	// $page=$_POST['p'];
	function checkpass($str){
		return (!preg_match("/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/",$str)) ? FALSE : TRUE; 

	}
	if(!checkpass($pass))
	{		
		echo '<script language="javascript">alert("Mật khẩu phải có ít nhất 8 ký tự, có một ký tự hoa và một số");window.location="http://localhost/medcare/Login/signup.php";</script>';
	}
	else{

	$passEncode=md5($pass);
	$email = $_POST['email'];
	function checkemail($str) {
		return (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $str)) ? FALSE : TRUE;
		}
		if(!checkemail($email)){
			echo "Địa chỉ email không tồn tại!";
		}
		else{
			$sql = "SELECT * FROM user WHERE  email = '$email'";
			$result = mysqli_query($conn, $sql);
			if (mysqli_num_rows($result) != 0)
            {
				echo '<script language="javascript">alert("Tài khoản email đã tồn tại vui lòng chọn tài khoản khác!"); window.location="http://localhost/medcare/Login/signup.php";</script>'; 
			}
			else{
			$phone = $_POST['phone'];
			$date = date('d/m/Y');
			echo $date;
			$sql = "INSERT INTO user(user_id,user_name,email,password,phone,role,create_date,dental_address,doctor_degree_date,
						categorize,open_time,status) 
						VALUES('','$name','$email','$passEncode','$phone',1,'$date','','','','',1)";
			$result= mysqli_query($connect,$sql);
			echo '<script language="javascript">alert("Đăng ký tài khoản thành công!");window.location="http://localhost/medcare/index.php";</script>'; 
		
		}
	}
	}

 ?>