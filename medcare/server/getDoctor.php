<?php 
	$sql='select * from user where role = 2';
	$result = mysqli_query($connect,$sql);

	class doctor{
		function doctor($user_id,$user_name,$email,$password,$phone,$dental_address,$categorize, $open_time){
			$this->user_id=$user_id;
			$this->user_name=$user_name;
			$this->email=$email;
			$this->password=$password;
			$this->phone=$phone;
			$this->dental_address=$dental_address;
			$this->categorize=$categorize;
			$this->open_time=$open_time;
			
		}
	}

	$arr= array();

	while(($row=mysqli_fetch_assoc($result))){
		$phone = empty($row['phone'])?"chưa công khai" :$row['phone'];
		array_push($arr, new doctor($row['user_id'],$row['user_name'],$row['email'],$row['password'],$phone,$row['dental_address'],$row['categorize'], $row['open_time']));
	}
	shuffle($arr);
	// echo "<pre>";
	//  print_r($arr);
	//  echo "</pre>";
 ?>