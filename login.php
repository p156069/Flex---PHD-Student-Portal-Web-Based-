<?php
	session_start();

	$a = $_POST['username'];
	$b = $_POST['password'];
	//$count = 0;
  	$xml = simplexml_load_file("login-details.xml");	
	
	foreach($xml->student as $item){
		if($item->username ==$a && $item->password==$b){
			$_SESSION['username'] = $_POST['username'];
			if($_SESSION['username']){
				header("Location: main.php");
			}
			

		}
		else{
			echo "invalid";
		}
	}


?>