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

if(isset($_GET['username']) && isset($_GET['email']) && isset($_GET['phone_num']) && isset($_GET['topic_of_msg']) && isset($_GET['message'])){
add($_GET['username'], $_GET['email'], $_GET['phone_num'], $_GET['topic_of_msg'], $_GET['message']);

}

function add1($username,$topic_of_msg,$message){
	$mysqli = connection();
	$statement = $mysqli -> prepare("insert into messages(username,topic_of_msg,message) values (?,?,?)");
	
	
	$statement-> bind_param("sss", $username,$topic_of_msg,$message);
	$statement -> execute();
	$statement -> close();
	$mysqli -> close();
}

if(isset($_GET['username']) && isset($_GET['topic_of_msg']) && isset($_GET['message'])){
add1($_GET['username'],$_GET['topic_of_msg'], $_GET['message']);

}

?>