<?php 
	require 'connect.php';
	
	function getRows($result)
	{
		return $result ? mysqli_fetch_assoc($result) : 0 ;
	}
	function mysqli_num_row($result)
	{
		return $result ? mysqli_fetch_assoc($result) : 0 ;
	}

	$id=$_POST['username'];
	$pass=$_POST['pass'];
	// $page=$_POST['p'];

	$passEncode=md5($pass);

	$query= "select * from user where username = '$id'";
	$re=mysqli_query($connect,$query);
	$count = mysqli_num_rows($re); 
    if($count!=0){ 
		$mess="Tài khoản đã tồn tại, vui lòng chọn tài khoản khác";
		header('Location: http://localhost/medcare/Login/signup.php?signupFail');
		
   
	} 
	else { 
	$sql= "select  * from user where email = '$id'  and password = '$passEncode'";
	$result= mysqli_query($connect,$sql);
	$rows = getRows($result);
	if(!empty($rows)){
		$_SESSION['user_id'] = $rows['user_id'];
		$_SESSION['user_name'] = $rows['user_name'];
		$_SESSION['email'] = $rows['email'];
		$_SESSION['phone'] = $rows['phone'];
		$_SESSION['create_date'] = $rows['create_date'];
		$_SESSION['role'] = $rows['role'];
		if ( $_SESSION['role']==2) {
			$_SESSION['dental_address'] = $rows['dental_address'];
			$_SESSION['categorize'] = $rows['categorize'];
			$_SESSION['open_time'] = $rows['open_time'];
			$_SESSION['doctor_degree_date'] = $rows['doctor_degree_date'];
			header('Location: http://localhost/medcare/index.php');
		}
		// if (p==0) {
		// 	# code...
		// }
		else if($_SESSION['role']==3)
		{
			header('Location: http://localhost/admin/index.php');
		}
		else if($_SESSION['role']==1)
		{
			header('Location: http://localhost/medcare/index.php');
		}
	}else {
		header('Location: http://localhost/medcare/Login/signin.php?signinFail');
		
	}
}
	
 ?>