<?php

require_once("connect.php");

$usr_inputnm = $_REQUEST['fnm'];
$usr_inputpwd = $_REQUEST['pwd'];

$matchQuery = "SELECT * FROM user_info WHERE eml='$usr_inputnm' AND pwd='$usr_inputpwd'";

$runQuery = mysqli_query($connect, $matchQuery);

$data_count= mysqli_num_rows($runQuery); 

if($runQuery==true){
	
	if($data_count===1){
		
	setcookie("crntusrnm",$usr_inputnm,time()+(86400*2));
	
	header ("location: profile.php");
}else{
	header ("location: signin_form.php?incorrect_info");
}
}
?>