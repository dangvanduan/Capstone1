<?php
// connecting to database
require 'server/connect.php';

// $connect = mysqli_connect("localhost", "root", "", "nhakhoa") or die("Database Error");
$name = 'user';
if(isset($_SESSION['user_id'])){
    global $name;
    $name = substr($_SESSION['user_name'],strrpos($_SESSION['user_name']," "));
}

    // getting user message through ajax
$getMesg = mysqli_real_escape_string($connect, $_POST['text']);

//checking user query to database query
$check_data = "SELECT replies FROM chatbot WHERE queries LIKE N'%$getMesg%'";

// $check_data = "SELECT replies FROM chatbot WHERE queries RLIKE N'[[:<:]]".$getMesg."[[:>:]]'";

$run_query = mysqli_query($connect, $check_data) or die("Error");

// if user query matched to database query we'll show the reply otherwise it go to else statement
if(mysqli_num_rows($run_query) > 0){
    //fetching replay from the database according to the user query
    $fetch_data = mysqli_fetch_assoc($run_query);
    //storing replay to a varible which we'll send to ajax
    $replay = $fetch_data['replies'];

}else{
    $replay = "Thưa quý khách, hiện tại tôi chưa hiểu được yêu cầu của Quý khách. ";
    $myFile = "test.txt";
    $fh = fopen($myFile, 'a');
    fwrite($fh, $getMesg. "\n");
    // fwrite($fh, $getMesg. "<br/>");
    fclose($fh);
}
date_default_timezone_set('Asia/Ho_Chi_Minh');
$added_on=date('Y-m-d H:i:s');
mysqli_query($connect,"INSERT INTO message(message,added_on,type) VALUES('$getMesg','$added_on','$name')");
$added_on=date('Y-m-d H:i:s');
mysqli_query($connect,"INSERT INTO message(message,added_on,type) VALUES('$replay','$added_on','bot')");
echo $replay;
?>