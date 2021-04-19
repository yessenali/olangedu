<?php


function connection(){
	
$mysqli = new mysqli("localhost","root","","olangedu");
if ($mysqli -> connect_errno) {
	echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
	exit();
}

return $mysqli;
}


function add($username,$email,$phone_num,$topic_of_msg,$message){
	$mysqli = connection();
	$statement = $mysqli -> prepare("insert into users(username,email,phone_num,topic_of_msg,message) values (?,?,?,?,?)");
	
	
	$statement-> bind_param("ssiss", $username,$email,$phone_num,$topic_of_msg,$message);
	$statement -> execute();
	$statement -> close();
	$mysqli -> close();
}

	
add($_GET['username'], $_GET['email'], $_GET['phone_num'], $_GET['topic_of_msg'], $_GET['message']);


?>