<?php 
	$sql='select * from user where role = 2';
	$result = mysqli_query($connect,$sql);

	class doctor{
		function doctor($user_id,$user_name,$email,$password,$phone,$dental_address,$categorize, $open_time,$link){
			$this->user_id=$user_id;
			$this->user_name=$user_name;
			$this->email=$email;
			$this->password=$password;
			$this->phone=$phone;
			$this->dental_address=$dental_address;
			$this->categorize=$categorize;
			$this->open_time=$open_time;
			$this->link=$link;
			
		}
		public function getId(){
            return $this->user_id;
        }
        public function getName(){
            return $this->user_name;
        }
        public function getEmail(){
            return $this->email;
        }
        public function getPhone(){
            return $this->phone;
        }
        public function getAddress(){
            return $this->dental_address;
		}
		public function getLink(){
            return $this->link;
        }
	}

	$arr= array();

	while(($row=mysqli_fetch_assoc($result))){
		$phone = empty($row['phone'])?"chưa công khai" :$row['phone'];
		array_push($arr, new doctor($row['user_id'],$row['user_name'],$row['email'],$row['password'],$phone,$row['dental_address'],$row['categorize'],$row['open_time'],$row['link']));
	}
	shuffle($arr);
 ?>