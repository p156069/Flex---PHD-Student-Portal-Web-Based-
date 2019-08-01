<?php
	session_start();

	$a = $_POST['username'];
	$b = $_POST['password'];
	//$count = 0;
  	$xml = simplexml_load_file("gcs-login-details.xml");	
	
	foreach($xml->gcs as $item){
		if($item->username ==$a && $item->password==$b){
			$_SESSION['username1'] = $_POST['username'];
			if($_SESSION['username1']){
				header("Location: gcs-main.php");
			}
			

		}
		else{
			echo "invalid";
		}
	}


?>