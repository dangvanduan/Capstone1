<?php 
	$sql="";
    $isDental = true;
    if(isset($_GET['id'])){
		$user_id = $_GET['id']; 
		$sql="select user_id, dental_name,dental_email,dental_address, dental_phone, dental_source, dental_description,dental_price, open_time from dental where user_id= '$user_id'";
		$isDental = true;
	}else if(isset($_GET['user_id'])){
		$user_id = $_GET['user_id']; 
		$isDental = false;
		$sql="select * from nhakhoa where user_id = '$user_id' ";
    }
    
    $result = mysqli_query($connect,$sql);

    class dental{
        public $user_id;
        public $dental_name;
        public $dental_email;
        public $dental_address;
        public $dental_phone;
        public $dental_source;
        public $dental_description;
        public $dental_price;
        public $open_time;

        function dental($user_id, $dental_name, $dental_email, $dental_address, $dental_phone, $dental_source, $dental_description, $dental_price, $open_time){
            $this->user_id = $user_id;
            $this->dental_name = $dental_name;
            $this->dental_email = $dental_email;
            $this->dental_address = $dental_address;
            $this->dental_phone = $dental_phone;
            $this->dental_source = $dental_source;
            $this->dental_description = $dental_description;
            $this->dental_price = $dental_price;
            $this->open_time = $open_time;
        }
        public function getID()
        {
          return $this->user_id;
        }
        public function getName()
        {
			    return $this->dental_name;
        }
        
        public function getEmail()
        {
			    return $this->dental_email;
        }
        
        public function getAddress()
        {
			    return $this->dental_address;
        }
        
        public function getPhone()
        {
		    	return $this->dental_phone;
        }
        
        public function getSource()
        {
			    return $this->dental_source;
        }
        
        public function getDescription()
        {
			    return $this->dental_description;
        }
        
        public function getPrice()
        {
			    return $this->dental_price;
		    }
    }
    $arrDental= array();
    while ($row = mysqli_fetch_row($result)) {
		if($isDental){
			$dental = new dental($row['0'], $row['1'], $row['2'], $row['3'], $row['4'], $row['5'], $row['6'], $row['7'], $row['8']);
		}
		else $dental = new dental($row['0'], $row['2'],$row['3'],$row['3'], $row['1'] ,"");
		$arr[] = $dental;
		break;
	}
	
 ?>